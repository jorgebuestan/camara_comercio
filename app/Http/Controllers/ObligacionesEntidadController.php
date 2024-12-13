<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EntidadObligacion; 
use App\Models\Entidad; 
use App\Models\TiempoPresentacion;
use App\Models\TipoPresentacion;
use App\Models\Obligacion; 

class ObligacionesEntidadController extends Controller
{
    //
    public function entidades_obligaciones()
    {   
        $tiempo_presentacion = TiempoPresentacion::pluck('descripcion', 'id');  
        $tipo_presentacion = TipoPresentacion::pluck('descripcion', 'id');    
        $entidades = Entidad::pluck('entidad', 'id');   

        return view('administrador.entidades.entidades_obligaciones', compact('entidades', 'tiempo_presentacion', 'tipo_presentacion') );
    }
    
    public function obtener_listado_obligaciones_por_entidad(Request $request)
    {
        $columns = [
            0 => 'obligaciones.id', 
            1 => 'obligaciones.obligacion', 
            2 => 'tiempo_presentacion.descripcion', 
            3 => 'tipo_presentacion.descripcion' 
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
            ->where('entidades_obligaciones.estado', 1)
            ->orderBy('obligaciones.obligacion', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function($query) use ($search) {
                $query->where('obligaciones.obligacion', 'LIKE', "%{$search}%")  
                    ->orWhere('tiempo_presentacion.descripcion', 'LIKE', "%{$search}%") 
                    ->orWhere('tipo_presentacion.descripcion', 'LIKE', "%{$search}%"); 
            });
        }

        // **Filtrar por id_camara si está presente en el request**
        if ($idEntidad = $request->input('id_entidad')) {
            $query->where('entidades_obligaciones.id_entidad', $idEntidad);
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
                'obligacion' => $obligacion->obligacion, 
                'tiempo_presentacion' => $obligacion->tiempo_presentacion, 
                'tipo_presentacion' => $obligacion->tipo_presentacion,  
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $obligacion->register . '">Modificar</button>' .
                '&nbsp;&nbsp;&nbsp;<button class="btn btn-warning mb-3 delete-obligacion" data-id="' . $obligacion->register . '">Eliminar</button>'.
                '&nbsp;&nbsp;&nbsp;' 
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
            
            $id_tipo_presentacion = 0; 
            if($request->input('tiempo_presentacion')){
                $id_tipo_presentacion = $request->input('tipo_presentacion');
            } 

            $fecha_inicio = $request->input('fecha_inicio'); 
            if ($fecha_inicio) {
                $fecha_inicio = \Carbon\Carbon::createFromFormat('d/m/Y', $fecha_inicio)->format('Y-m-d');
            } else {
                $fecha_inicio = null;
            }

            $fecha_presentacion = $request->input('fecha_presentacion'); 
            if ($fecha_presentacion) {
                $fecha_presentacion = \Carbon\Carbon::createFromFormat('d/m/Y', $fecha_presentacion)->format('Y-m-d');
            } else {
                $fecha_presentacion = null;
            }
             
             
            // Crear registro en la base de datos
            $obligacion = EntidadObligacion::create([ 
                'id_obligacion' => strtoupper($request->input('obligacion_id')),
                'id_entidad' => strtoupper($request->input('entidad_id')), 
                'fecha_inicio' => $fecha_inicio,
                'fecha_presentacion' => $fecha_presentacion,
                'estado' => 1
            ]); 

            return response()->json(['success' => 'Obligación registrada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'La Obligación ya existe en el grupo de obligaciones por Entidad, no se puede registrar la misma dos veces.'], 422);
            }
            return response()->json(['error' => 'Error al registrar la Obligación: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar la Obligación: ' . $e->getMessage()], 500);
        }
    }

    public function eliminar_entidad_obligacion($id)
    {
        //$colaborador = Colaborador::find($id);
        $entidad = EntidadObligacion::where('id', $id)->first();


        if (!$entidad) {
            return response()->json(['error' => 'Obligación no encontrada'], 404);
        }
    
        // Cambiar el valor del campo 'activo' a 0
        $entidad->estado = 0;
        $entidad->save();
    
        return response()->json(['success' => 'Obligación por Entidad eliminada correctamente']);
    }

    public function detalle_entidad_obligacion($id)
    {
        // Buscar la cámara por ID
        $entidadObligacion = EntidadObligacion::find($id);

        if($entidadObligacion->fecha_inicio){
            $entidadObligacion->fecha_inicio = Carbon::parse($entidadObligacion->fecha_inicio)->format('d/m/Y');
        }
        if($entidadObligacion->fecha_presentacion){
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
    
        // Devolver la respuesta JSON
        return response()->json($entidadObligacionArray);
    } 

    public function modificar_entidad_obligacion(Request $request)
    {  
        try {
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
             
            // Buscar el registro existente por ID
            $entidad = EntidadObligacion::find($request->input('entidad_obligacion_id_mod'));
        
            if (!$entidad) {
                return response()->json(['error' => 'La entidad no existe.'], 404);
            }

            $tiempo_presentacion = $request->input('tiempo_presentacion_mod');

            $fechaPresentacion = $request->input('fecha_presentacion_mod') ? DateTime::createFromFormat('d/m/Y', $request->input('fecha_presentacion_mod') )->format('Y-m-d H:i:s') : null;
            $fechaInicio = $request->input('fecha_inicio_mod') ? DateTime::createFromFormat('d/m/Y', $request->input('fecha_inicio_mod') )->format('Y-m-d H:i:s') : null;
              
            // Actualizar los campos del registro existente
            $entidad->update([
                'fecha_inicio' => $fechaInicio,
                'fecha_presentacion' => $fechaPresentacion
            ]);  

            //return response()->json(['success' => 'Obligación modificada correctamente'], 200);
            return response()->json(['response' => [
                'msg' => "Registro modificado",
                ]
            ], 201);
        } catch (\Illuminate\Database\QueryException $e) {  
            return response()->json(['error' => 'Error al modificar la Obligación: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al modificar la Obligación: ' . $e->getMessage()], 500);
        }
    } 
}
