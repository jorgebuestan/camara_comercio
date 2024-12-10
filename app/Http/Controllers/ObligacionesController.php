<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\TiempoPresentacion;
use App\Models\TipoPresentacion;
use App\Models\Obligacion;

class ObligacionesController extends Controller
{
    //
    public function maestro_obligaciones()
    {   
        $tiempo_presentacion = TiempoPresentacion::pluck('descripcion', 'id');  
        $tipo_presentacion = TipoPresentacion::pluck('descripcion', 'id');    
        
        return view('administrador.maestro_obligaciones', compact('tiempo_presentacion', 'tipo_presentacion') );
    }

    public function obtener_listado_obligaciones(Request $request)
    {
        $columns = [
            0 => 'obligaciones.obligacion', 
            1 => 'obligaciones.obligacion', 
            2 => 'tiempo_presentacion.descripcion', 
            3 => 'tipo_presentacion.descripcion' 
        ];

        $query = DB::table('obligaciones')  
            ->join('tiempo_presentacion', 'tiempo_presentacion.id', '=', 'obligaciones.id_tiempo_presentacion')
            ->leftJoin('tipo_presentacion', 'tipo_presentacion.id', '=', 'obligaciones.id_tipo_presentacion')
            ->select(
                'obligaciones.id',
                'obligaciones.obligacion',
                'tiempo_presentacion.descripcion as tiempo_presentacion',
                'tipo_presentacion.descripcion as tipo_presentacion' 
            )
            ->where('obligaciones.estado', 1)
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
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $obligacion->id . '">Modificar</button>' .
                '&nbsp;&nbsp;&nbsp;<button class="btn btn-warning mb-3 delete-obligacion" data-id="' . $obligacion->id . '">Eliminar</button>'.
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

    public function checkObligacion(Request $request)
    {
        // Validar si el campo obligacion está vacío o nulo
        $obligacion = $request->input('obligacion');
        if (!$obligacion) {
            return response()->json([
                'similar' => [],
            ]);
        }

        // Consulta para encontrar registros similares
        $query = DB::table('obligaciones')
            ->select('obligacion_busqueda')
            ->whereRaw("MATCH(obligacion_busqueda) AGAINST(? IN BOOLEAN MODE)", [strtoupper($obligacion)]);

        // Excluir el ID actual si se proporciona
        if ($request->filled('obligacion_id')) {
            $query->where('id', '!=', $request->input('obligacion_id'));
        }

        $similares = $query->pluck('obligacion_busqueda');

        // Responder con los registros similares
        return response()->json([
            'similar' => $similares,
        ]);
    } 


    public function registrar_obligacion(Request $request)
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
            $camara = Obligacion::create([ 
                'obligacion' => strtoupper($request->input('obligacion')),
                'obligacion_busqueda' => strtoupper($request->input('obligacion')),
                'id_tiempo_presentacion' => strtoupper($request->input('tiempo_presentacion')),
                'id_tipo_presentacion' => $id_tipo_presentacion,
                'fecha_inicio' => $fecha_inicio,
                'fecha_presentacion' => $fecha_presentacion,
                'estado' => 1
            ]); 

            return response()->json(['success' => 'Obligación registrada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'La Obligación ya existe en el Sistema.'], 422);
            }
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        }
    }

    public function eliminar_obligacion($id)
    {
        //$colaborador = Colaborador::find($id);
        $obligacion = Obligacion::where('id', $id)->first();


        if (!$obligacion) {
            return response()->json(['error' => 'Obligacion no encontrada'], 404);
        }
    
        // Cambiar el valor del campo 'activo' a 0
        $obligacion->estado = 0;
        $obligacion->save();
    
        return response()->json(['success' => 'Obligacion eliminada correctamente']);
    }

    public function detalle_obligacion($id)
    {
        // Buscar la cámara por ID
        $obligacion = Obligacion::find($id);
    
        if (!$obligacion) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }
    
        // Convertir el modelo Camara a un array
        $obligacionArray = $obligacion->toArray(); 
    
        // Devolver la respuesta JSON
        return response()->json($obligacionArray);
    }

    public function modificar_obligacion(Request $request)
    {  
        try {
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
             
            // Buscar el registro existente por ID
            $obligacion = Obligacion::find($request->input('obligacion_id'));
        
            if (!$obligacion) {
                return response()->json(['error' => 'La Obligacion no existe.'], 404);
            }

            $id_tipo_presentacion = 0; 
            if($request->input('tiempo_presentacion_mod')){
                $id_tipo_presentacion = $request->input('tipo_presentacion_mod');
            } 

            $fecha_inicio = $request->input('fecha_inicio_mod'); 
            if ($fecha_inicio) {
                $fecha_inicio = \Carbon\Carbon::createFromFormat('d/m/Y', $fecha_inicio)->format('Y-m-d');
            } else {
                $fecha_inicio = null;
            }

            $fecha_presentacion = $request->input('fecha_presentacion_mod'); 
            if ($fecha_presentacion) {
                $fecha_presentacion = \Carbon\Carbon::createFromFormat('d/m/Y', $fecha_presentacion)->format('Y-m-d');
            } else {
                $fecha_presentacion = null;
            }
 
        
            // Actualizar los campos del registro existente
            $obligacion->update([
                'obligacion' => strtoupper($request->input('obligacion_mod')),
                'obligacion_busqueda' => strtoupper($request->input('obligacion_mod')),
                'id_tiempo_presentacion' => strtoupper($request->input('tiempo_presentacion_mod')),
                'id_tipo_presentacion' => $id_tipo_presentacion,
                'fecha_inicio' => $fecha_inicio,
                'fecha_presentacion' => $fecha_presentacion,
                'estado' => 1
            ]); 
        
            
            //return response()->json(['success' => 'Cámara actualizada correctamente'], 200);
            /*return response()->json(['response' => [
                'msg' => "Registro modificado",
                ]
            ], 201);*/
            return response()->json(['success' => 'Obligación modificada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) { 
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'La Obligación que intenta modificar ya existe en el Sistema.'], 422);
            }
            return response()->json(['error' => 'Error al modificar la Obligación: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al modificar la Obligación: ' . $e->getMessage()], 500);
        }
    }
}
