<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Camara;
use App\Models\Socio;
use App\Models\CamaraSocio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Validator; 

class CamaraSocioController extends Controller
{
    // 
    public function socios_camara()
    {
        $camaras = [];
        $isAdmin = Auth::user()->hasRole('admin');
        if ($isAdmin) {
            //$camaras = Camara::pluck('razon_social', 'id');
            $camaras = Camara::where('estado', 1)->pluck('razon_social', 'id');
        } else {
            $camaras = Camara::where('ruc', Auth::user()->username)->pluck('razon_social', 'id');
            if (!$camaras || $camaras->isEmpty()) {
                return redirect()->route('dashboard')->with('error', 'No tiene permisos para acceder a esta sección');
            }
        }
        return view('administrador.camaras.socios_camaras', compact('camaras', 'isAdmin'));
    }

    public function obtener_listado_socios_por_camara(Request $request)
    {
        $columns = [
            0 => 'camaras_socios.id',
            1 => 'camaras_socios.fecha_afiliacion',
            2 => 'socios.identificacion',
            3 => 'socios.razon_social'
        ];

        $query = DB::table('socios')
            ->join('camaras_socios', 'camaras_socios.id_socio', '=', 'socios.id')
            ->join('tipo_personeria', 'tipo_personeria.id', '=', 'socios.id_tipo_personeria')
            ->select(
                'camaras_socios.id',
                DB::raw("DATE_FORMAT(camaras_socios.fecha_afiliacion, '%d/%m/%Y') as fecha_afiliacion"), 
                'socios.numero_consecutivo',
                'socios.identificacion',
                'socios.razon_social',
                'tipo_personeria.descripcion as tipo_personeria',
                'camaras_socios.estado',
                DB::raw("DATE_FORMAT(camaras_socios.fecha_desafiliacion, '%d/%m/%Y') as fecha_desafiliacion"),
                'camaras_socios.motivo_desafiliacion'
            ) 
            ->orderBy('socios.numero_consecutivo', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('socios.razon_social', 'LIKE', "%{$search}%")
                    ->orWhere('socios.identificacion', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        if ($idEntidad = $request->input('id_camara')) {
            $query->where('camaras_socios.id_camara', $idEntidad);
        }

        if ($idEstado = $request->input('estado')) {
            if($idEstado == 1){
                $query->wherein('camaras_socios.estado', [0,1]);
            }
            if($idEstado == 2){
                $query->where('camaras_socios.estado', 1);
            }
            if($idEstado == 3){
                $query->where('camaras_socios.estado', 0);
            }
        }

        $totalFiltered = $query->count();

        // Orden
        $orderColumnIndex = $request->input('order.0.column', 0); // Por defecto, columna 0
        $orderDir = $request->input('order.0.dir', 'asc'); // Por defecto, orden ascendente

        if (isset($columns[$orderColumnIndex])) {
            $orderColumn = $columns[$orderColumnIndex];
            $query->orderBy($orderColumn, $orderDir);
        }

        // Paginación
        $start = $request->input('start') ?? 0;
        $length = $request->input('length') ?? 10;
        $query->skip($start)->take($length);

        $socios = $query->get();

        $data = $socios->map(function ($socio) {
            $boton = "";
            $fecha_desafiliacion = "";
            $motivo_desafiliacion = "";

            if($socio->estado == 1){
                $boton = '<button class="btn btn-outline-danger btn-sm rounded-pill mb-3 delete-socio" data-id="' . $socio->id . '">Desafiliar&nbsp;<i class="fa-solid fa-trash"></i></button>';
            }else{
                $boton = '<button class="btn btn-outline-success btn-sm rounded-pill mb-3 reafiliar-socio" data-id="' . $socio->id . '">&nbsp;&nbsp;&nbsp;Afiliar&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-plus"></i></button>';
                $fecha_desafiliacion = $socio->fecha_desafiliacion;
                $motivo_desafiliacion = $socio->motivo_desafiliacion;
            } 

            return [
                'consecutivo' => $socio->numero_consecutivo,
                'fecha_afiliacion' => $socio->fecha_afiliacion,
                'identificacion' => $socio->identificacion,
                'razon_social' => $socio->razon_social,
                'tipo_personeria' => $socio->tipo_personeria, 
                'fecha_desafiliacion' => $fecha_desafiliacion, 
                'motivo_desafiliacion' => $motivo_desafiliacion, 
                'btn' => '<div class="d-flex justify-content-center align-items-center gap-2">' .
                            '<button class="btn btn-outline-warning mb-3 btn-sm rounded-pill open-modal" data-id="' . $socio->id . '"><i class="fa-solid fa-pencil"></i>&nbsp;Modificar</button>' .
                            $boton .
                         '</div>'
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('obligaciones')->where('obligaciones.estado', 1)->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }

    public function obtener_listado_socios_registros_camara(Request $request)
    {
        $columns = [
            0 => 'socios.id',
            1 => 'socios.identificacion',
            2 => 'socios.razon_social'
        ];

        $query = DB::table('socios')
            ->join('tipo_personeria', 'tipo_personeria.id', '=', 'socios.id_tipo_personeria')
            ->select(
                'socios.id',
                'socios.numero_consecutivo',
                'socios.identificacion',
                'socios.razon_social',
                'tipo_personeria.descripcion as tipo_personeria'
            ) 
            ->wherein('socios.estado', [1,2])
            ->orderBy('socios.razon_social', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('socios.razon_social', 'LIKE', "%{$search}%")
                    ->orWhere('socios.identificacion', 'LIKE', "%{$search}%");
            });
        }

        $totalFiltered = $query->count();

        // Orden
        $orderColumnIndex = $request->input('order.0.column', 0); // Por defecto, columna 0
        $orderDir = $request->input('order.0.dir', 'asc'); // Por defecto, orden ascendente

        if (isset($columns[$orderColumnIndex])) {
            $orderColumn = $columns[$orderColumnIndex];
            $query->orderBy($orderColumn, $orderDir);
        }

        // Paginación
        $start = $request->input('start') ?? 0;
        $length = $request->input('length') ?? 10;
        $query->skip($start)->take($length);

        $socios = $query->get();

        $data = $socios->map(function ($socio) {
            $boton = "";

            return [
                'consecutivo' => $socio->numero_consecutivo,
                'identificacion' => $socio->identificacion,
                'razon_social' => $socio->razon_social,
                'tipo_personeria' => $socio->tipo_personeria,
                'btn' => '<button type="button" class="btn btn-primary mb-3 seleccionar-socio" data-id="' . $socio->id . '">Seleccionar</button>'
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('socios')->where('socios.estado', 1)->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }

    public function detalle_socio($id)
    {
        // Buscar la cámara por ID
        $socio = Socio::find($id);

        // Convertir el modelo socio a un array
        $socioArray = $socio->toArray();

        // Devolver la respuesta JSON
        return response()->json($socioArray);
    }

    public function detalle_socio_camara($id)
    {
        // Buscar la cámara por ID
        $camara_socio = CamaraSocio::find($id);
        $socio = Socio::where('id', $camara_socio->id_socio)->first();

        $camara_socio->fecha_afiliacion = Carbon::parse($camara_socio->fecha_afiliacion)->format('d/m/Y');

        // Convertir el modelo socio a un array
        $camaraArray = $camara_socio->toArray();
        $camaraArray['socio'] = $socio->toArray();

        $logCamaraSocioIns = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'camaras_socios')->where('action', 'insert')->get();
        $logCamaraSocioMod = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'camaras_socios')->where('action', 'update')->get();

        $logCamaraSocioIns = $logCamaraSocioIns->map(function ($log) {
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

        $logCamaraSocioMod = $logCamaraSocioMod->map(function ($log) {
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

        $logCamaraSocio = [
            'insert' => $logCamaraSocioIns[0] ?? null,
            'update' => $logCamaraSocioMod ?? null
        ];

        $camaraArray = array_merge($camaraArray, $logCamaraSocio);

        // Devolver la respuesta JSON
        return response()->json($camaraArray);
    }

    public function registrar_socio_camara(Request $request)
    {

        try {

            DB::beginTransaction();

            $fecha_afiliacion = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_afiliacion'))->format('Y-m-d');


            // Crear registro en la base de datos
            $socioCamara = CamaraSocio::create([
                'id_camara' => strtoupper($request->input('camara_id')),
                'id_socio' => strtoupper($request->input('socio_id')),
                'fecha_afiliacion' => $fecha_afiliacion,
                'estado' => 1
            ]);

            DB::commit();

            return response()->json(['success' => 'Socio registrado correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {

            Log::error($e);
            DB::rollBack();
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'El Socio ya existe en el registro de Socios por Cámara, no se puede registrar el mismo dos veces.'], 422);
            }
            return response()->json(['error' => 'Error al registrar el Socio: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al registrar el Socio: ' . $e->getMessage()], 500);
        }
    }

    public function eliminar_socio_camara(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'socio_id' => 'required|integer',
                'motivo' => 'required|string|max:255',
                'fecha_desafiliacion' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first()], 422);
            }
            $data = $validator->validated();
            DB::beginTransaction();

            //$colaborador = Colaborador::find($id);
            $socioId = $data['socio_id'];
            $motivo = $data['motivo'];
            $fecha_desafiliacion = $data['fecha_desafiliacion'];
            $camara_socio = CamaraSocio::where('id', $socioId)->first();

            if (!$camara_socio) {
                return response()->json(['error' => 'Socio no encontrado'], 404);
            }
 
            $fecha_desafiliacion = \Carbon\Carbon::createFromFormat('d/m/Y', $data['fecha_desafiliacion'])->format('Y-m-d');


            // Cambiar el valor del campo 'activo' a 0
            $camara_socio->estado = 0;
            $camara_socio->fecha_desafiliacion = $fecha_desafiliacion;
            $camara_socio->motivo_desafiliacion = $motivo;
            $camara_socio->save();

            DB::commit();

            //return response()->json(['success' => 'Socio por Cámara desafiliado correctamente']);
            return response()->json(['message' => 'Socio por Cámara desafiliado correctamente'], 200);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            //return response()->json(['error' => 'Error al eliminar el Socio por Cámara: ' . $e->getMessage()], 500);
            return response()->json(
                [
                    'error' => $e->getMessage(),
                    'message' => 'Error al desafiliar al Socio',
                ],
                500
            );
        }
    }

    public function reafiliar_socio_camara(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'socio_id' => 'required|integer', 
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first()], 422);
            }
            $data = $validator->validated();
            DB::beginTransaction();

            //$colaborador = Colaborador::find($id);
            $socioId = $data['socio_id']; 
            $camara_socio = CamaraSocio::where('id', $socioId)->first();

            if (!$camara_socio) {
                return response()->json(['error' => 'Socio no encontrado'], 404);
            }

            // Cambiar el valor del campo 'activo' a 0
            $camara_socio->estado = 1; 
            $camara_socio->save();

            DB::commit();

            //return response()->json(['success' => 'Socio por Cámara desafiliado correctamente']);
            return response()->json(['message' => 'Socio reafiliado correctamente a la Cámara'], 200);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            //return response()->json(['error' => 'Error al eliminar el Socio por Cámara: ' . $e->getMessage()], 500);
            return response()->json(
                [
                    'error' => $e->getMessage(),
                    'message' => 'Error al reafiliar al Socio',
                ],
                500
            );
        }
    }

    public function modificar_socio_camara(Request $request)
    {
        try {

            DB::beginTransaction();

            // Buscar el registro existente por ID
            $camaraSocio = CamaraSocio::find($request->input('socio_camara_id_mod'));

            if (!$camaraSocio) {
                return response()->json(['error' => 'El Socio no existe.'], 404);
            }

            $fecha_afiliacion = $request->input('fecha_afiliacion_mod') ? DateTime::createFromFormat('d/m/Y', $request->input('fecha_afiliacion_mod'))->format('Y-m-d H:i:s') : null;

            // Actualizar los campos del registro existente
            $camaraSocio->update([
                'fecha_afiliacion' => $fecha_afiliacion
            ]);

            DB::commit();

            return response()->json([
                'response' => [
                    'msg' => "Registro modificado",
                ]
            ], 201);
        } catch (\Illuminate\Database\QueryException $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar el Socio de la Cámara: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar el Socio de la Cámara: ' . $e->getMessage()], 500);
        }
    }
}
