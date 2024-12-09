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
            "recordsTotal" => DB::table('obligaciones')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];
        
        return response()->json($json_data);
    }

    public function checkObligacion(Request $request)
    {
        $entidad = $request->input('obligacion');

        // Buscar entidades similares 

        $stopWords = ['CAMARA', 'COMERCIO', 'DE']; // Palabras genéricas a excluir
        $cleanEntidad = str_replace($stopWords, '', strtoupper($entidad));

        $similares = DB::table('obligaciones')
            ->select('obligacion_busqueda')
            ->whereRaw("MATCH(obligacion_busqueda) AGAINST(? IN BOOLEAN MODE)", [$cleanEntidad])
            ->pluck('obligacion_busqueda');

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
             
            // Crear registro en la base de datos
            $camara = Obligacion::create([ 
                'obligacion' => strtoupper($request->input('obligacion')),
                'obligacion_busqueda' => strtoupper($request->input('obligacion')),
                'id_tiempo_presentacion' => strtoupper($request->input('tiempo_presentacion')),
                'id_tipo_presentacion' => $id_tipo_presentacion,
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
}
