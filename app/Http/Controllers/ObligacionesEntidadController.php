<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\EntidadObligacion;
use App\Models\Entidad;
use App\Models\TiempoPresentacion;
use App\Models\TipoPresentacion;
use App\Models\Obligacion;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Validator;

class ObligacionesEntidadController extends Controller
{
    //
    public function entidades_obligaciones()
    {
        $tiempo_presentacion = TiempoPresentacion::pluck('descripcion', 'id');
        $tipo_presentacion = TipoPresentacion::pluck('descripcion', 'id');
        $entidades = Entidad::pluck('entidad', 'id');

        return view('administrador.entidades.entidades_obligaciones', compact('entidades', 'tiempo_presentacion', 'tipo_presentacion'));
    }

    public function obtener_listado_obligaciones_por_entidad(Request $request)
    {
        $columns = [
            0 => 'obligaciones.obligacion',
            1 => 'tiempo_presentacion.descripcion',
            2 => 'tipo_presentacion.descripcion',
            3 => 'entidades_obligaciones.id'
        ];

        $query = DB::table('obligaciones')
            ->join('tiempo_presentacion', 'tiempo_presentacion.id', '=', 'obligaciones.id_tiempo_presentacion')
            ->join('entidades_obligaciones', 'entidades_obligaciones.id_obligacion', '=', 'obligaciones.id')
            ->leftJoin('tipo_presentacion', 'tipo_presentacion.id', '=', 'obligaciones.id_tipo_presentacion')
            ->select(
                'obligaciones.id',
                'obligaciones.obligacion',
                'tiempo_presentacion.descripcion as tiempo_presentacion',
                'tipo_presentacion.descripcion as tipo_presentacion',
                'entidades_obligaciones.id as register'
            )
            ->where('entidades_obligaciones.estado', 1);
        
        // **Filtrar por id_camara si está presente en el request**
        if ($idEntidad = $request->input('id_entidad')) {
            $query->where('entidades_obligaciones.id_entidad', $idEntidad);
        }else{
            $query->where('entidades_obligaciones.id_entidad', -1);
        }

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('obligaciones.obligacion', 'LIKE', "%{$search}%")
                    ->orWhere('tiempo_presentacion.descripcion', 'LIKE', "%{$search}%")
                    ->orWhere('tipo_presentacion.descripcion', 'LIKE', "%{$search}%");
            });
        }

        $totalFiltered = $query->count();

        // Orden
        $orderColumnIndex = $request->input('order.0.column', 0); // Por defecto, columna 0
        $orderDir = $request->input('order.0.dir', 'asc'); // Por defecto, orden ascendente

        if (isset($columns[$orderColumnIndex])) {
            $query->orderBy($columns[$orderColumnIndex], $orderDir);
        } else {
            $query->orderBy('obligaciones.obligacion', 'asc');
        }

        // Paginación
        $start = $request->input('start', 0);
        $length = $request->input('length', 10);
        $query->skip($start)->take($length);

        $obligaciones = $query->get();

         // Obtener el valor del módulo del request
        $modulo = $request->input('modulo', 1); // Por defecto, módulo 1

        //$data = $obligaciones->map(function ($obligacion) {
        $data = $obligaciones->map(function ($obligacion) use ($modulo) { 

            $btn = '';

            // Botón dependiendo del valor de módulo
            if ($modulo == 1) {
                $btn = '<div class="flex items-center justify-center w-full">
                            <button class="btn btn-outline-danger btn-sm rounded-pill mb-3 delete-obligacion" data-id="' . $obligacion->register . '">
                                Eliminar&nbsp;<i class="fa-solid fa-trash"></i>
                            </button>
                        </div>';
            } elseif ($modulo == 2) {
                $btn = '<button type="button" class="btn btn-primary mb-3 seleccionar-obligacion" data-id="' . $obligacion->id . '">Seleccionar</button>';
            }
            
            return [
                'id' => $obligacion->id,
                'obligacion' => $obligacion->obligacion,
                'tiempo_presentacion' => $obligacion->tiempo_presentacion,
                'tipo_presentacion' => $obligacion->tipo_presentacion ?? 'N/A',
                'btn' => $btn 
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

    public function registrar_obligacion_entidad(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'obligaciones' => 'required|array|min:1',
                'obligaciones.*' => 'required|integer|exists:obligaciones,id',
                'entidad_id' => 'required|integer|exists:entidades,id',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422);
            }
            $data = $validator->validated();
            DB::beginTransaction();
            $obligacionesRepetidas = array_diff_assoc($data['obligaciones'], array_unique($data['obligaciones']));
            if (!empty($obligacionesRepetidas)) {
                return response()->json(['error' => 'Existen IDs de obligaciones repetidos en la solicitud'], 422);
            }
            $obligacionesExisten = EntidadObligacion::where('id_entidad', $data['entidad_id'])->whereIn('id_obligacion', $data['obligaciones'])->get();
            if ($obligacionesExisten->count() > 0) {
                $obligacionesExisten->each(function ($obligacion) {
                    $obligacion->estado = 1;
                    $obligacion->save();
                });
            }
            $nuevasObligaciones = array_diff($data['obligaciones'], $obligacionesExisten->pluck('id_obligacion')->toArray());
            foreach ($nuevasObligaciones as $obligacionId) {
                EntidadObligacion::create([
                    'id_obligacion' => $obligacionId,
                    'id_entidad' => $data['entidad_id'],
                    'estado' => 1
                ]);
            }
            DB::commit();
            return response()->json(['success' => 'Obligación registrada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(['error' => 'Error al registrar la Obligación: ' . $th->getMessage()], 500);
        }
    }

    public function eliminar_entidad_obligacion($id)
    {
        try {
            DB::beginTransaction();
            //$colaborador = Colaborador::find($id);
            $entidad = EntidadObligacion::where('id', $id)->first();


            if (!$entidad) {
                return response()->json(['error' => 'Obligación no encontrada'], 404);
            }

            // Cambiar el valor del campo 'activo' a 0
            $entidad->estado = 0;
            $entidad->save();

            DB::commit();

            return response()->json(['success' => 'Obligación por Entidad eliminada correctamente']);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al eliminar la Obligacion de la Entidad: ' . $e->getMessage()], 500);
        }
    }

    public function detalle_entidad_obligacion($id)
    {
        // Buscar la cámara por ID
        $entidadObligacion = EntidadObligacion::find($id);

        if ($entidadObligacion->fecha_inicio) {
            $entidadObligacion->fecha_inicio = Carbon::parse($entidadObligacion->fecha_inicio)->format('d/m/Y');
        }
        if ($entidadObligacion->fecha_presentacion) {
            $entidadObligacion->fecha_presentacion = Carbon::parse($entidadObligacion->fecha_presentacion)->format('d/m/Y');
        }

        if (!$entidadObligacion) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        // Buscar el DatoTributario relacionado
        $entidad = Entidad::where('id', $entidadObligacion->id_entidad)->first();
        $obligacion = Obligacion::where('id', $entidadObligacion->id_obligacion)->first();

        // Convertir el modelo Camara a un array
        $entidadObligacionArray = $entidadObligacion->toArray();

        // Si existe un DatoTributario, agregarlo al array de respuesta
        if ($entidad) {
            $entidadObligacionArray['entidad'] = $entidad->toArray();
        }

        if ($obligacion) {
            $entidadObligacionArray['obligacion'] = $obligacion->toArray();
        }

        $logEntidadObligacionIns = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'entidades_obligaciones')->where('action', 'insert')->get();
        $logEntidadObligacionMod = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'entidades_obligaciones')->where('action', 'update')->get();

        $logEntidadObligacionIns = $logEntidadObligacionIns->map(function ($log) {
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

        $logEntidadObligacionMod = $logEntidadObligacionMod->map(function ($log) {
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

        $logEntidadObligacion = [
            'insert' => $logEntidadObligacionIns[0] ?? null,
            'update' => $logEntidadObligacionMod ?? null
        ];

        // Convertir el modelo EntidadObligacion a un array
        $entidadObligacionArray = array_merge($entidadObligacionArray, $logEntidadObligacion);

        // Devolver la respuesta JSON
        return response()->json($entidadObligacionArray);
    }

    public function modificar_entidad_obligacion(Request $request)
    {
        try {

            DB::beginTransaction();
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)

            // Buscar el registro existente por ID
            $entidad = EntidadObligacion::find($request->input('entidad_obligacion_id_mod'));

            if (!$entidad) {
                return response()->json(['error' => 'La entidad no existe.'], 404);
            }

            $tiempo_presentacion = $request->input('tiempo_presentacion_mod');

            $fechaPresentacion = $request->input('fecha_presentacion_mod') ? DateTime::createFromFormat('d/m/Y', $request->input('fecha_presentacion_mod'))->format('Y-m-d H:i:s') : null;
            $fechaInicio = $request->input('fecha_inicio_mod') ? DateTime::createFromFormat('d/m/Y', $request->input('fecha_inicio_mod'))->format('Y-m-d H:i:s') : null;

            // Actualizar los campos del registro existente
            $entidad->update([
                'fecha_inicio' => $fechaInicio,
                'fecha_presentacion' => $fechaPresentacion
            ]);

            DB::commit();
            //return response()->json(['success' => 'Obligación modificada correctamente'], 200);
            return response()->json([
                'response' => [
                    'msg' => "Registro modificado",
                ]
            ], 201);
        } catch (\Illuminate\Database\QueryException $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar la Obligación: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(['error' => 'Error al modificar la Obligación: ' . $e->getMessage()], 500);
        }
    }
}
