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

class AdherenteController extends Controller
{
    public function adherentes_socio()
    {
        $paises = Pais::pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id');
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id');
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->pluck('nombre', 'id');
        $tipos_identificacion = TipoIdentificacion::pluck('descripcion', 'id');

        $sociosSelect = Socio::pluck('razon_social', 'id');

        return view('administrador.socios.adherentes_socio', compact('paises', 'provincias', 'cantones', 'parroquias', 'tipos_identificacion', 'sociosSelect'));
    }

    public function index(Request $request)
    {
        $columns = [
            0 => 'adherentes.identificacion',
            1 => 'adherentes.nombres',
            2 => 'adherentes.apellidos',
        ];

        $data = $request->validate([
            'id_socio' => 'sometimes|integer|nullable',
            'busqueda' => 'sometimes|string|nullable',
            'estado' => 'sometimes|integer|nullable',
            'start' => 'sometimes|integer|nullable',
            'length' => 'sometimes|integer|nullable',
            'with_socio' => 'sometimes|boolean|nullable',
            'with_adherente' => 'sometimes|boolean|nullable',
        ]);

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
                        'adherentes.identificacion',
                        'adherentes.nombres',
                        'adherentes.apellidos',
                    ])
                    ->orderBy($columns[$orderColumnIndex], $orderDir);
            });
        $total_filtered = $socioAdherentes->count();

        $start = $request['start'] ?? 0;
        $length = $request['length'] ?? 10;
        $socioAdherentes->skip($start)->take($length);

        $socioAdherentes = $socioAdherentes->get();
        $response = $socioAdherentes->map(function ($socioAdherente) {
            $btnAfiliar = $socioAdherente->estado == 0 ? '<button class="btn btn-info mb-1 reafiliar-modal flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socioAdherente->id . '">Reafiliar</button>' : '';
            return array_merge($socioAdherente->toArray(), [
                'identificacion' => $socioAdherente->adherente->identificacion,
                'nombres' => $socioAdherente->adherente->nombres,
                'apellidos' => $socioAdherente->adherente->apellidos,
                'estado' => $socioAdherente->estado ? 'Activo' : 'Inactivo',
                'btn' => '<div class="d-flex justify-content-center align-items-center flex-wrap gap-2">' . $btnAfiliar .
                    '<button class="btn btn-primary mb-1 edit-modal flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socioAdherente->id . '">Modificar</button>' .
                    '<button class="btn btn-warning mb-1 delete-socio-adherente flex-grow-1 flex-shrink-1" style="min-width: 100px;" data-id="' . $socioAdherente->id . '">Eliminar</button></div>'
            ]);
        });

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
            $data = $request->validate([
                'id_socio' => 'required|integer',
                'foto' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
                'fecha_ingreso' => 'required|date',
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
                'adjuntos' => 'sometimes|array|nullable',
            ]);
            $data['foto'] = ''; //cambiar luego
            $data['adjuntos'] = ''; //cambiar luego
            DB::beginTransaction();
            $existeAdherente = Adherente::where('identificacion', $data['identificacion'])->first();
            if ($existeAdherente) {
                return response()->json(['message' => 'Ya existe un adherente con la identificación ingresada'], 400);
            }
            $fecha_ingreso = Carbon::createFromFormat('d/m/Y', $data['fecha_ingreso'])->format('Y-m-d');
            $data['fecha_ingreso'] = $fecha_ingreso;
            $rutaFoto = 'prueba';
            if ($request->hasFile('file')) {
                $archivoFoto = $request->file('file');
                $nombreArchivo = $data['identificacion'] . '.' . $archivoFoto->getClientOriginalExtension();
                $storedFilePath = "fotos_adherentes/" . $data['identificacion'] . '/' . $nombreArchivo;
                $rutaFoto = "fotos_adherentes/" . $nombreArchivo;
                $archivoFoto->storeAs("fotos_adherentes/" . $data['identificacion'], $nombreArchivo, 'public');
            }

            $data['estado'] = 1;
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
        try {
            $data = $request->validate([
                'id' => 'required|integer',
                'foto' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
                'fecha_ingreso' => 'sometimes|date',
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
                'archivos_adjuntos' => 'sometimes|string|nullable',
            ]);

            DB::beginTransaction();
            $fecha_ingreso = Carbon::createFromFormat('d/m/Y', $data['fecha_ingreso'])->format('Y-m-d');
            $data['fecha_ingreso'] = $fecha_ingreso;
            $rutaFoto = 'prueba';
            if ($request->hasFile('file')) {
                $archivoFoto = $request->file('file');
                $nombreArchivo = $data['identificacion'] . '.' . $archivoFoto->getClientOriginalExtension();
                $storedFilePath = "fotos_adherentes/" . $data['identificacion'] . '/' . $nombreArchivo;
                $rutaFoto = "fotos_adherentes/" . $nombreArchivo;
                $archivoFoto->storeAs("fotos_adherentes/" . $data['identificacion'], $nombreArchivo, 'public');
            }

            $adherente = Adherente::find($data['id']);
            if (!$adherente) return response()->json(['message' => 'Adherente no existe'], 404);
            $adherente->update($data);
            DB::commit();
            return response()->json(['message' => 'Adherente actualizado correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            if ($storedFilePath && Storage::disk('public')->exists($storedFilePath)) {
                Storage::disk('public')->delete($storedFilePath);
            }
            return response()->json(['message' => 'Error al actualizar el adherente'], 500);
        }
    }

    public function reafiliarAdherente(Request $request)
    {
        try {
            $data = $request->validate([
                'id_socio' => 'sometimes|integer',
                'id_adherente' => 'required|integer',
                'id_socio_adherente' => 'required|integer',
                'motivo_reafiliacion' => 'required|string|max:255',
                'fecha_reafiliacion' => 'required|date_format:d/m/Y'
            ]);
            DB::beginTransaction();
            $data['fecha_reafiliacion'] = Carbon::createFromFormat('d/m/Y', $data['fecha_reafiliacion'])->format('Y-m-d');
            $adherente = Adherente::find($data['id_adherente']);
            if (!$adherente) return response()->json(['message' => 'Adherente no existe'], 400);
            if ($adherente->fecha_ingreso > $data['fecha_reafiliacion']) return response()->json(['message' => 'Fecha de Desafiliacion no puede ser menor que la fecha de ingreso del adherente'], 400);
            $adherente->estado = 1;
            $adherente->save();

            $socioAdherente = SocioAdherente::find($data['id_socio_adherente']);
            if (!$socioAdherente) return response()->json(['message' => 'El Adherente no se encuentra conectado con el Socio']);
            $socioAdherente->estado = isset($data['id_socio']) ? 0 : 1;
            $socioAdherente->save();

            if (isset($data['id_socio'])) {
                $nuevoSocioAdherente = SocioAdherente::create([
                    'id_socio' => $data['id_socio'],
                    'id_adherente' => $data['id_adherente'],
                    'estado' => 1
                ]);
                $historialAntiguo = HistorialSocioAdherente::where('id_socio_adherente', $socioAdherente->id)->update([
                    'id_socio_anterior' => isset($data['id_socio']) ? $socioAdherente->id_socio : null
                ]);
                $historial = HistorialSocioAdherente::create([
                    'id_socio' => $data['id_socio'],
                    'id_adherente' => $data['id_adherente'],
                    'estado' => 1
                ]);
            } else {
                $historial = HistorialSocioAdherente::where('id_socio_adherente', $socioAdherente->id)->update([
                    'fecha_reafiliacion' => $data['fecha_reafiliacion'],
                    'motivo_reafiliacion' => $data['motivo_reafiliacion']
                ]);
            }

            DB::commit();
            return response()->json(['message' => 'Adherente eliminado correctamente'], 200);
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
            $data = $request->validate([
                'id_socio_adherente' => 'required|integer',
                'id_adherente' => 'required|integer',
                'id_socio' => 'required|integer',
                'motivo_desafiliacion' => 'required|string|max:255',
                'fecha_desafiliacion' => 'required|date_format:d/m/Y',
            ]);
            DB::beginTransaction();
            $data['fecha_desafiliacion'] = Carbon::createFromFormat('d/m/Y', $data['fecha_desafiliacion'])->format('Y-m-d');
            $adherente = Adherente::find($data['id_adherente']);
            if (!$adherente) return response()->json(['message' => 'Adherente no existe'], 400);
            if ($adherente->fecha_ingreso > $data['fecha_desafiliacion']) return response()->json(['message' => 'Fecha de Desafiliacion no puede ser menor que la fecha de ingreso del adherente'], 400);
            $adherente->estado = 0;
            $adherente->save();

            $socioAdherente = SocioAdherente::find($data['id_socio_adherente']);
            if (!$socioAdherente) return response()->json(['message' => 'El Adherente no se encuentra conectado con el Socio']);
            $socioAdherente->estado = 0;
            $socioAdherente->save();

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
