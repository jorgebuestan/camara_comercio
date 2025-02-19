<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\Socio;
use App\Models\SocioAdherente;
use App\Models\TipoIdentificacion;
use App\Models\Adherente;
use App\Models\HistorialSocioAdherente;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\LogActivity;

class AdherenteController extends Controller
{
    public function adherentes_socio()
    {
        $paises = Pais::orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $tipos_identificacion = TipoIdentificacion::pluck('descripcion', 'id');

        //$sociosSelect = Socio::pluck('razon_social', 'id');
        $sociosSelect = Socio::whereIn('id_tipo_personeria', [2, 3])
        ->where('estado', 1)
        ->pluck('razon_social', 'id');

        return view('administrador.socios.adherentes_socio', compact('paises', 'provincias', 'cantones', 'parroquias', 'tipos_identificacion', 'sociosSelect'));
    }

    public function index(Request $request)
    {
        $columns = [
            0 => 'adherentes.identificacion',
            1 => 'adherentes.nombres',
            2 => 'adherentes.apellidos',
            3 => 'socios_adherentes.estado',
            4 => 'socios_adherentes.id',
        ];
        $validator = Validator::make($request->all(), [
            'id_socio' => 'sometimes|integer|nullable',
            'busqueda' => 'sometimes|string|nullable',
            'estado' => 'sometimes|integer|nullable',
            'start' => 'sometimes|integer|nullable',
            'length' => 'sometimes|integer|nullable',
            'with_socio' => 'sometimes|boolean|nullable',
            'with_adherente' => 'sometimes|boolean|nullable',
            'mostrar_no_afiliados' => 'sometimes|boolean|nullable',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }
        $data = $validator->validated();

        if (isset($data['mostrar_no_afiliados']) && $data['mostrar_no_afiliados']) {
            $query = Adherente::when(isset($request['busqueda']), fn($q) => $q->where('identificacion', 'like', '%' . $request['busqueda'] . '%')
                ->orWhere('nombres', 'like', '%' . $request['busqueda'] . '%')
                ->orWhere('apellidos', 'like', '%' . $request['busqueda'] . '%'))
                ->when(isset($request['order'][0]['column']), function ($q) use ($request, $columns) {
                    $orderColumnIndex = $request['order'][0]['column'];
                    $orderDir = $request['order'][0]['dir'];
                    $q->orderBy($columns[$orderColumnIndex], $orderDir);
                })
                ->where('estado', 0);

            $total_filtered = $query->count();

            $start = $request['start'] ?? 0;
            $length = $request['length'] ?? 10;
            $adherentes = $query->skip($start)->take($length)->get();

            if ($adherentes->isEmpty()) {
                return response()->json([
                    'draw' => intval($request['draw']) ?? 1,
                    'recordsTotal' => 0,
                    'recordsFiltered' => 0,
                    'data' => []
                ]);
            }

            $response = $adherentes->map(function ($adherente) {
                $btnReafiliar = '<button class="btn btn-info mb-1 reafiliar-socio-adherente flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $adherente->id . '">Reafiliar</button>';
                $socioAnteriorAdherente = SocioAdherente::where('id_adherente', $adherente->id)->with('historial')->first();
                return array_merge($adherente->toArray(), [
                    'id_adherente' => $adherente->id,
                    'identificacion' => $adherente->identificacion ?? '',
                    'nombres' => $adherente->nombres ?? '',
                    'apellidos' => $adherente->apellidos ?? '',
                    'estado' => 'No Afiliado',
                    'socio_anterior' => $socioAnteriorAdherente ? $socioAnteriorAdherente : null,
                    'btn' => '<div class="d-flex justify-content-center align-items-center flex-wrap gap-2">' . $btnReafiliar . '</div>'
                ]);
            });

            return response()->json([
                'draw' => intval($request['draw']) ?? 1,
                'recordsTotal' => Adherente::count(),
                'recordsFiltered' => $total_filtered,
                'data' => $response
            ]);
        }

        $socioAdherentes = SocioAdherente::when(isset($request['id_socio']), fn($q) => $q->where('socios_adherentes.id_socio', $request['id_socio']))
            ->when(isset($request['busqueda']), fn($q) => $q->where('adherentes.identificacion', 'like', '%' . $request['busqueda'] . '%')
                ->orWhere('adherentes.nombres', 'like', '%' . $request['busqueda'] . '%')
                ->orWhere('adherentes.apellidos', 'like', '%' . $request['busqueda'] . '%'))
            ->when(isset($request['estado']), fn($q) => $q->where('socios_adherentes.estado', $request['estado']))
            ->when(isset($request['with_socio']), fn($q) => $q->with('socio'))
            ->when(
                isset($request['with_adherente']),
                fn($q) => $q->with('adherente')
            )
            ->when(isset($request['order'][0]['column']), function ($q) use ($request, $columns) {
                $orderColumnIndex = $request['order'][0]['column'];
                $orderDir = $request['order'][0]['dir'];
                $q->leftJoin('adherentes', 'socios_adherentes.id_adherente', '=', 'adherentes.id')
                    ->leftJoin('socios', 'socios_adherentes.id_socio', '=', 'socios.id')
                    ->select([
                        'socios_adherentes.*',
                    ])
                    ->orderBy($columns[$orderColumnIndex], $orderDir);
            });
        $total_filtered = $socioAdherentes->count();

        $start = $request['start'] ?? 0;
        $length = $request['length'] ?? 10;
        $socioAdherentes->skip($start)->take($length);

        $socioAdherentes = $socioAdherentes->get()->filter(function ($socioAdherente) {
            return isset($socioAdherente->adherente);
        });

        if ($socioAdherentes->isEmpty()) {
            return response()->json([
                'draw' => intval($request['draw']) ?? 1,
                'recordsTotal' => SocioAdherente::count(),
                'recordsFiltered' => 0,
                'data' => []
            ]);
        }
        $response = $socioAdherentes->map(function ($socioAdherente) {
            $logSociosAdherentesIns = LogActivity::with('user')->where('record_id', $socioAdherente->id)->where('table_name', 'socios_adherentes')->where('action', 'insert')->get();
            $logSociosAdherentesMod = LogActivity::with('user')->where('record_id', $socioAdherente->id)->where('table_name', 'adherentes')->where('action', 'update')->get();
            $logSociosAdherentesIns = $logSociosAdherentesIns->map(function ($log) {
                return [
                    'created_at' => $log->created_at,
                    'user_id' => $log->user_id,
                    'user' => [
                        'name' => $log->user->name,
                        'email' => $log->user->email,
                        'username' => $log->user->username
                    ]
                ];
            });

            $logSociosAdherentesMod = $logSociosAdherentesMod->map(function ($log) {
                return [
                    'created_at' => $log->created_at,
                    'user_id' => $log->user_id,
                    'user' => [
                        'name' => $log->user->name,
                        'email' => $log->user->email,
                        'username' => $log->user->username
                    ]
                ];
            });

            $logSociosAdherentes = [
                'insert' => $logSociosAdherentesIns[0] ?? null,
                'update' => $logSociosAdherentesMod ?? null
            ];
            $btnModificar = '<button class="btn btn-outline-warning btn-sm rounded-pill edit-modal" title="Modificar" data-id="' . $socioAdherente->id . '">&nbsp;<i class="fa-solid fa-pencil"></i>&nbsp;</button>&nbsp;';
            $btnDesafiliar = '<button class="btn btn-outline-danger btn-sm rounded-pill delete-socio-adherente" title="Desafiliar" data-id="' . $socioAdherente->id . '">&nbsp;<i class="fa-solid fa-trash"></i>&nbsp;</button>';
            $socioAdherente->adherente->fecha_ingreso = Carbon::createFromFormat('Y-m-d', $socioAdherente->adherente->fecha_ingreso)->format('d/m/Y');
            return array_merge($socioAdherente->toArray(), [
                'logs' => $logSociosAdherentes,
                'identificacion' => $socioAdherente->adherente->identificacion ?? '',
                'nombres' => $socioAdherente->adherente->nombres ?? '',
                'apellidos' => $socioAdherente->adherente->apellidos ?? '',
                'estado' => $socioAdherente->estado == 1 ? 'Afiliado' : 'No Afiliado',
                'btn' => '<div class="d-flex justify-content-center align-items-center">' . $btnModificar . $btnDesafiliar . '</div>'
            ]);
        })->filter()->values();
        if ($response->isEmpty()) {
            return response()->json([
                'draw' => intval($request['draw']) ?? 1,
                'recordsTotal' => SocioAdherente::count(),
                'recordsFiltered' => 0,
                'data' => []
            ]);
        }

        return response()->json([
            'draw' => intval($request['draw']) ?? 1,
            'recordsTotal' => SocioAdherente::count(),
            'recordsFiltered' => $total_filtered,
            'data' => $response
        ]);
    }

    public function store(Request $request)
    {
        $storedFilePath = null;
        try {
            $validator = Validator::make($request->all(), [
                'id_socio' => 'required|integer',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'fecha_ingreso' => 'required|date_format:d/m/Y',
                'id_tipo_identificacion' => 'required|integer',
                'identificacion' => 'required|string',
                'ruc' => 'sometimes|string|nullable',
                'nombres' => 'required|string',
                'apellidos' => 'required|string',
                'correo' => 'required|email|nullable',
                'telefono' => 'required|string|nullable',
                'id_pais' => 'required|integer',
                'id_provincia' => 'required|integer',
                'id_canton' => 'required|integer',
                'id_parroquia' => 'required|integer',
                'calle' => 'required|string|nullable',
                'manzana' => 'required|string|nullable',
                'numero' => 'required|string|nullable',
                'interseccion' => 'required|string|nullable',
                'referencia' => 'sometimes|string|nullable',
                'observaciones' => 'sometimes|string|nullable',
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first()], 422);
            }

            $data = $validator->validated();
            DB::beginTransaction();
            $existeAdherente = Adherente::where('identificacion', $data['identificacion'])->first();
            if ($existeAdherente) {
                return response()->json(['message' => 'Ya existe un adherente con la identificación ingresada'], 400);
            }
            $fecha_ingreso = Carbon::createFromFormat('d/m/Y', $data['fecha_ingreso'])->format('Y-m-d');
            $data['fecha_ingreso'] = $fecha_ingreso;
            $rutaFoto = 'prueba';
            if ($request->hasFile('foto')) {
                $archivoFoto = $request->file('foto');
                $nombreArchivo = $data['identificacion'] . '.' . $archivoFoto->getClientOriginalExtension();
                $storedFilePath = "fotos_adherentes/" . $data['identificacion'] . '/' . $nombreArchivo;
                $rutaFoto = $storedFilePath;;
                $archivoFoto->storeAs("fotos_adherentes/" . $data['identificacion'], $nombreArchivo, 'public');
            }

            $data['estado'] = 1;
            $data['foto'] = $rutaFoto ?? null;
            $adherente = Adherente::create($data);
            $adherenteId = $adherente->id;

            $existeSocioAdherente = SocioAdherente::where('id_adherente', $adherenteId)->where('id_socio', '!=', $data['id_socio'])->first();
            if ($existeSocioAdherente) {
                return response()->json(['message' => 'El adherente ya está asociado a otro socio'], 400);
            }

            $socioAdherente = SocioAdherente::create([
                'id_socio' => $data['id_socio'],
                'id_adherente' => $adherenteId,
                'estado' => 1,
            ]);

            $historial = HistorialSocioAdherente::create([
                'id_socio_adherente' => $socioAdherente->id,
                'fecha_afiliacion' => $data['fecha_ingreso'],
            ]);

            DB::commit();
            return response()->json(['message' => 'Adherente guardado correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            if ($storedFilePath && Storage::disk('public')->exists($storedFilePath)) {
                Storage::disk('public')->delete($storedFilePath);
            }
            return response()->json(['message' => 'Error al guardar el adherente'], 500);
        }
    }

    public function update(Request $request)
    {
        $storedFilePath = null;
        $contents = null;
        try {
            $data = $request->validate([
                'id' => 'required|integer',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'fecha_ingreso' => 'sometimes|date_format:d/m/Y',
                'id_tipo_identificacion' => 'sometimes|integer',
                'identificacion' => 'sometimes|string',
                'ruc' => 'sometimes|string|nullable',
                'nombres' => 'sometimes|string',
                'apellidos' => 'sometimes|string',
                'correo' => 'sometimes|email|nullable',
                'telefono' => 'sometimes|string|nullable',
                'id_pais' => 'sometimes|integer',
                'id_provincia' => 'sometimes|integer',
                'id_canton' => 'sometimes|integer',
                'id_parroquia' => 'sometimes|integer',
                'calle' => 'sometimes|string|nullable',
                'manzana' => 'sometimes|string|nullable',
                'numero' => 'sometimes|string|nullable',
                'interseccion' => 'sometimes|string|nullable',
                'referencia' => 'sometimes|string|nullable',
                'observaciones' => 'sometimes|string|nullable',
            ]);

            DB::beginTransaction();
            $adherente = Adherente::find($data['id']);
            if (!$adherente) return response()->json(['message' => 'Adherente no existe'], 404);
            $fecha_ingreso = Carbon::createFromFormat('d/m/Y', $data['fecha_ingreso'])->format('Y-m-d');
            $data['fecha_ingreso'] = $fecha_ingreso;
            $rutaFoto = '';
            $contents = Storage::disk('public')->get($adherente->foto);
            if ($request->hasFile('foto')) {
                $archivoFoto = $request->file('foto');
                $nombreArchivo = $data['identificacion'] . '.' . $archivoFoto->getClientOriginalExtension();
                $storedFilePath = "fotos_adherentes/" . $data['identificacion'] . '/' . $nombreArchivo;
                $rutaFoto = $storedFilePath;
                $archivoFoto->storeAs("fotos_adherentes/" . $data['identificacion'], $nombreArchivo, 'public');
            }

            $data['foto'] = $rutaFoto == '' ? $adherente->foto : $rutaFoto;
            $adherente->update($data);
            DB::commit();
            return response()->json(['message' => 'Adherente actualizado correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            if ($contents && Storage::disk('public')->exists($storedFilePath)) {
                Storage::disk('public')->put($storedFilePath, $contents);
            }
            return response()->json(['message' => 'Error al actualizar el adherente'], 500);
        }
    }

    public function reafiliarAdherente(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id_socio' => 'required|integer',
                'id_adherente' => 'required|integer',
                'motivo_reafiliacion' => 'required|string|max:255',
                'fecha_reafiliacion' => 'required|date_format:d/m/Y'
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first()], 422);
            }

            $data = $validator->validated();
            DB::beginTransaction();
            $data['fecha_reafiliacion'] = Carbon::createFromFormat('d/m/Y', $data['fecha_reafiliacion'])->format('Y-m-d');

            $socio = Socio::find($data['id_socio']);
            if (!$socio) return response()->json(['message' => 'Socio no existe'], 404);

            $adherente = Adherente::find($data['id_adherente']);
            if (!$adherente) return response()->json(['message' => 'Adherente no existe'], 404);
            if ($adherente->fecha_ingreso > $data['fecha_reafiliacion']) return response()->json(['message' => 'Fecha de Reafiliacion no puede ser menor que la fecha de ingreso del adherente'], 404);
            $adherente->estado = 1;
            $adherente->save();

            $esNuevoHistorial = null;
            $socioAnterior = null;
            $socioAdherente = SocioAdherente::where('id_adherente', $data['id_adherente'])->first();
            if (!$socioAdherente) return response()->json(['message' => 'El Adherente no se encuentra conectado con algun socio previamente.'], 404);
            if ($socioAdherente->id_socio == $data['id_socio']) {
                $esNuevoHistorial = false;
            } else {
                $socioAnterior = Socio::find($socioAdherente->id_socio);
                if (!$socioAnterior) return response()->json(['message' => 'El Socio anterior no existe.'], 404);
                $esNuevoHistorial = true;
            }
            $socioAdherente->estado = 1;
            $socioAdherente->id_socio = $data['id_socio'];
            $socioAdherente->save();

            if ($esNuevoHistorial) {
                $nuevoHistorial = HistorialSocioAdherente::create([
                    'id_socio_adherente' => $socioAdherente->id,
                    'id_socio_anterior' => $socioAnterior->id ?? null,
                    'id_adherente' => $adherente->id,
                    'fecha_afiliacion' => $data['fecha_reafiliacion'],
                ]);
                $adherente->fecha_ingreso = $data['fecha_reafiliacion'];
                $adherente->save();
            } else {
                $historial = HistorialSocioAdherente::where('id_socio_adherente', $socioAdherente->id)->first();
                if (!$historial) return response()->json(['message' => 'No se encontró historial del socio adherente'], 404);
                if ($historial->fecha_desafiliacion > $data['fecha_reafiliacion']) return response()->json(['message' => 'La fecha de reafiliacion del adherente no puede ser menor que la fecha de desafiliacion '], 404);
                $historial->update([
                    'fecha_reafiliacion' => $data['fecha_reafiliacion'],
                    'fecha_desafiliacion' => null,
                    'motivo_desafiliacion' => null,
                    'motivo_reafiliacion' => $data['motivo_reafiliacion']
                ]);
            }

            DB::commit();
            return response()->json(['message' => 'Adherente eliminado correctamente', 'socio' => $socio->razon_social], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollback();
            return response()->json([
                'error' => $th->getMessage(),
                'message' => 'Error al reafiliar adherente',
            ], 500);
        }
    }

    public function eliminarAdherente(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id_socio_adherente' => 'required|integer',
                'id_adherente' => 'required|integer',
                'id_socio' => 'required|integer',
                'motivo_desafiliacion' => 'required|string|max:255',
                'fecha_desafiliacion' => 'required|date_format:d/m/Y',
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first()], 422);
            }
            $data = $validator->validated();
            DB::beginTransaction();
            $data['fecha_desafiliacion'] = Carbon::createFromFormat('d/m/Y', $data['fecha_desafiliacion'])->format('Y-m-d');
            $socioAdherente = SocioAdherente::find($data['id_socio_adherente']);
            if (!$socioAdherente) return response()->json(['message' => 'El Adherente no se encuentra conectado con el Socio'], 404);
            $socioAdherente->estado = 0;
            $socioAdherente->save();

            $adherente = Adherente::find($data['id_adherente']);
            if (!$adherente) return response()->json(['message' => 'Adherente no existe'], 404);
            if ($adherente->fecha_ingreso > $data['fecha_desafiliacion']) return response()->json(['message' => 'Fecha de Desafiliacion no puede ser menor que la fecha de ingreso del adherente'], 400);
            $adherente->estado = 0;
            $adherente->save();


            $historial = HistorialSocioAdherente::where('id_socio_adherente', $socioAdherente->id)->update([
                'motivo_desafiliacion' => $data['motivo_desafiliacion'],
                'fecha_desafiliacion' => $data['fecha_desafiliacion'],
            ]);

            DB::commit();
            return response()->json(['message' => 'Adherente eliminado correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollback();
            return response()->json([
                'error' => $th->getMessage(),
                'message' => 'Error al eliminar adherente',
            ], 500);
        }
    }
}
