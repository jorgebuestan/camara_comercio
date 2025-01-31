<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Establecimiento;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\ActividadEconomica;
use App\Models\Socio;
use App\Models\Entidad;
use App\Models\DatoTributario;
use App\Models\LogActivity;
use App\Models\SocioObligacion;  
use Carbon\Carbon;
use App\Models\ArchivoObligacionSocio;

class EstablecimientoSocioObligacionController extends Controller
{
    //
    public function obligaciones_establecimientos_socio()
    {
        $sociosSelect = Socio::where('estado', 1)
        ->whereIn('id_tipo_personeria', [2, 3])
        ->whereIn('id', function ($query) {
            $query->select('id_socio')
                ->from('datos_tributarios_socio'); // Nombre de la tabla correspondiente
        })
        ->pluck('razon_social', 'id');
        $entidades = Entidad::with('obligaciones.obligacion.tiempo_presentacion', 'obligaciones.obligacion.tipo_presentacion')->where('estado', 1)->get();
        $entidadesSelect = $entidades->pluck('entidad', 'id');
        return view('administrador.socios.obligaciones_establecimientos', compact('sociosSelect', 'entidadesSelect'));
    }

    public function obtener_listado_obligaciones_establecimientos_socios(Request $request)
    {
        $columns = [
            0 => 'socios_obligaciones.id',
            1 => 'establecimientos_socios.secuencial',
            2 => 'entidades.entidad',
            3 => 'obligaciones.obligacion'
        ];

        $query = DB::table('socios_obligaciones')
            ->join('socios', 'socios.id', '=', 'socios_obligaciones.id_socio')
            ->join('establecimientos_socios', 'establecimientos_socios.id', '=', 'socios_obligaciones.id_establecimiento')
            ->join('entidades', 'entidades.id', '=', 'socios_obligaciones.id_entidad')
            ->join('obligaciones', 'obligaciones.id', '=', 'socios_obligaciones.id_obligacion')
            ->select(
                'socios_obligaciones.id', 
                'establecimientos_socios.secuencial',
                'entidades.entidad',
                'obligaciones.obligacion'
            )
            ->where('socios_obligaciones.estado', 1);

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('entidades.entidad', 'LIKE', "%{$search}%") 
                ->orWhere('establecimientos_socios.secuencial', 'LIKE', "%{$search}%")
                ->orWhere('obligaciones.obligacion', 'LIKE', "%{$search}%");
            });
        }

        // **Filtrar por id_socio si está presente en el request**
        if ($idEntidad = $request->input('id_socio')) {
            $query->where('socios_obligaciones.id_socio', $idEntidad);
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

        $obligaciones = $query->get();

        $data = $obligaciones->map(function ($obligacion) {
            $boton = "";

            return [
                'establecimiento' => $obligacion->secuencial,
                'entidad' => $obligacion->entidad,
                'obligacion' => $obligacion->obligacion, 
                'btn' => '<div class="d-flex justify-content-center align-items-center gap-2">' .
                            '<button class="btn btn-outline-warning mb-3 btn-sm rounded-pill edit-modal" data-id="' . $obligacion->id . '"><i class="fa-solid fa-pencil"></i>&nbsp;Modificar</button>' .
                            '<button class="btn btn-outline-danger btn-sm rounded-pill mb-3 delete-obligacion" data-id="' . $obligacion->id . '">Eliminar&nbsp;<i class="fa-solid fa-trash"></i></button>' .
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

    public function registrar_obligacion_establecimiento_socio(Request $request)
    {
        try {
            // Validación de los datos
            $validator = Validator::make($request->all(), [
                'id_socio' => 'required|integer',
                'id_establecimiento' => 'required|integer',
                'id_entidad' => 'required|integer',
                'id_obligacion' => 'required|integer',
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' => 'sometimes|nullable|date_format:d/m/Y',
            ]);

            if ($validator->fails()) {
                return response()->json(['message' => 'Datos incorrectos', 'errors' => $validator->errors()], 400);
            }

            $data = $validator->validated();

            //return($data);
            // Comienza la transacción
            DB::beginTransaction();

            // Verifica si la obligación ya existe
            $existeObligacion = SocioObligacion::where('id_socio', $data['id_socio'])
                ->where('id_establecimiento', $data['id_establecimiento'])
                ->where('id_entidad', $data['id_entidad'])
                ->where('id_obligacion', $data['id_obligacion'])
                ->first();

            if ($existeObligacion) {
                return response()->json(['message' => 'La obligación ya existe para el Establecimiento'], 409);
            }

            // Formatear fechas
            $data['fecha_inicio'] = isset($data['fecha_inicio'])
                ? Carbon::createFromFormat('d/m/Y', $data['fecha_inicio'])->format('Y-m-d')
                : null;

            $data['fecha_presentacion'] = isset($data['fecha_presentacion'])
                ? Carbon::createFromFormat('d/m/Y', $data['fecha_presentacion'])->format('Y-m-d')
                : null;

            $data['estado'] = 1;

            // Crear la obligación
            $socioObligacion = SocioObligacion::create($data);

            // Crear el registro de archivo
            ArchivoObligacionSocio::create([
                'id_socio' => $socioObligacion->id_socio,
                'id_establecimiento' => $socioObligacion->id_establecimiento,
                'id_entidad' => $socioObligacion->id_entidad,
                'id_obligacion' => $socioObligacion->id_obligacion,
                'ruta_archivo' => '',
                'validado' => 0,
                'estado' => 1,
            ]);

            DB::commit();

            return response()->json(['message' => 'Obligación registrada con éxito'], 201);
        } catch (QueryException $e) {
            DB::rollBack();
            Log::error("Error de base de datos: " . $e->getMessage());
            return response()->json(['message' => 'Error en la base de datos', 'error' => $e->getMessage()], 500);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error("Error general: " . $th->getMessage());
            return response()->json(['message' => 'Error al registrar la obligación', 'error' => $th->getMessage()], 500);
        }
    }

    public function eliminarObligacionEstablecimientoSocio($id)
    {
        try {
            DB::beginTransaction();
            $socioObligacion = SocioObligacion::find($id);
            if (!$socioObligacion) {
                return response()->json(['message' => 'La obligación no existe'], 400);
            }
            $socioObligacion->estado = 0;
            $socioObligacion->save();

            $archivoObligacionSocio = ArchivoObligacionSocio::where('id_socio', $socioObligacion->id_socio)
                ->where('id_establecimiento', $socioObligacion->id_establecimiento)
                ->where('id_entidad', $socioObligacion->id_entidad)
                ->where('id_obligacion', $socioObligacion->id_obligacion)
                ->first();
            $archivoObligacionSocio->estado = 0;
            $archivoObligacionSocio->save();

            DB::commit();
            return response()->json(['message' => 'Obligación eliminada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollBack();
            return response()->json(['message' => 'Error al eliminar la obligación'], 500);
        }
    }

    public function detalle_obligacion_establecimiento_socio($id)
    {
        // Buscar la cámara por ID
        $socio = SocioObligacion::find($id);
        $socio = SocioObligacion::with(['socio', 'entidad', 'obligacion', 'establecimientos'])->find($id);

        if (!$socio) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }

        // Convertir el modelo Camara a un array
        $socioArray = $socio->toArray();

        

        $logSocioObligacionIns = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'socios_obligaciones')->where('action', 'insert')->get();
        $logSocioObligacionMod = LogActivity::with('user')->where('record_id', $id)->where('table_name', 'socios_obligaciones')->where('action', 'update')->get();

        $logSocioObligacionIns = $logSocioObligacionIns->map(function ($log) {
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

        $logSocioObligacionMod = $logSocioObligacionMod->map(function ($log) {
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

        $logSocioObligacion = [
            'insert' => $logSocioObligacionIns[0] ?? null,
            'update' => $logSocioObligacionMod ?? null
        ]; 

        // Combinar todo en el array de respuesta
        $socioArray = array_merge($socioArray, $logSocioObligacion);
   
        // Devolver la respuesta JSON
        return response()->json($socioArray);
    }

    public function modificar_obligacion_establecimiento_socio(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required|integer', 
                'fecha_inicio' => 'sometimes|nullable|date_format:d/m/Y',
                'fecha_presentacion' => 'sometimes|nullable|date_format:d/m/Y',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Datos incorrectos',
                    'errors' => $validator->errors()
                ], 400);
            }
            $data = $validator->validated();
            DB::beginTransaction();
            $socioObligacion = SocioObligacion::find($data['id']);
            if (!$socioObligacion) {
                return response()->json(['message' => 'La obligación no existe'], 400);
            }
            if (isset($data['fecha_inicio'])) {
                $data['fecha_inicio'] =
                    Carbon::createFromFormat('d/m/Y', $data['fecha_inicio'])->format('Y-m-d');
            }
            if (isset($data['fecha_presentacion'])) {
                $data['fecha_presentacion'] =
                    Carbon::createFromFormat('d/m/Y', $data['fecha_presentacion'])->format('Y-m-d');
            }
            $socioObligacion->update($data);
            DB::commit();
            return response()->json(['message' => 'Obligación actualizada correctamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th); // Registra el error para depuración
        
            DB::rollBack(); // Revierte cualquier cambio en caso de error
        
            // Proveer detalles adicionales solo en entornos de desarrollo
            $debugInfo = config('app.debug') ? [
                'error_detail' => $th->getMessage(),
                'error_line' => $th->getLine(),
                'error_file' => $th->getFile(),
            ] : [];
        
            return response()->json(array_merge([
                'message' => 'Error al actualizar la obligación'
            ], $debugInfo), 500);
        }
    }
}
