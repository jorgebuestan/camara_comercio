<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\TipoEntidad; 
use App\Models\Entidad; 
use App\Models\TiempoPresentacion;
use App\Models\TipoPresentacion;
use App\Models\Obligacion;

class EntidadesController extends Controller
{
    //
    public function maestro_entidades()
    {   
        $paises = Pais::pluck('nombre', 'id');  
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $tipo_entidad = TipoEntidad::pluck('descripcion', 'id');   

        $provinciaDefault = Provincia::find(1); // Obtenemos la provincia con ID = 1
        if ($provinciaDefault) {
            $provincias->put($provinciaDefault->id, $provinciaDefault->nombre); // Añadimos al listado
        }

        $cantonDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
        if ($cantonDefault) {
            $cantones->put($cantonDefault->id, $cantonDefault->nombre); // Añadimos al listado
        }
        
        return view('administrador.entidades.maestro_entidades', compact('paises', 'provincias', 'cantones', 'tipo_entidad') );
    }

    public function obtener_listado_entidades(Request $request)
    {
        $columns = [
            0 => 'entidades.id', 
            1 => 'entidades.entidad', 
            2 => 'tipo_entidad', 
            3 => 'entidades.direccion', 
            4 => 'entidades.representante'
        ];

        $query = DB::table('entidades')  
            ->join('tipo_entidad', 'tipo_entidad.id', '=', 'entidades.id_tipo_entidad')
            ->select(
                'entidades.id',
                'entidades.entidad',
                'tipo_entidad.descripcion as tipo_entidad',
                'entidades.alcance', 
                'entidades.direccion', 
                'entidades.representante' , 
                'entidades.created_at'
            )
            ->where('entidades.estado', 1)
            ->orderBy('entidades.entidad', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function($query) use ($search) {
                $query->where('entidades.entidad', 'LIKE', "%{$search}%")  
                    ->orWhere('entidades.representante', 'LIKE', "%{$search}%") 
                    ->orWhere('entidades.direccion', 'LIKE', "%{$search}%"); 
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

        $entidades = $query->get();

        $data = $entidades->map(function ($entidad) {
            $boton = "";  
             
            return [
                'fecha_ingreso' => $entidad->created_at, 
                'entidad' => $entidad->entidad, 
                'tipo_entidad' => $entidad->tipo_entidad, 
                'direccion' => $entidad->direccion, 
                'representante' => $entidad->representante, 
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $entidad->id . '">Modificar</button>' .
                '&nbsp;&nbsp;&nbsp;<button class="btn btn-warning mb-3 delete-entidad" data-id="' . $entidad->id . '">Eliminar</button>'.
                '&nbsp;&nbsp;&nbsp;' 
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('entidades')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];
        
        return response()->json($json_data);
    }

    /*public function checkEntidad(Request $request)
    {
        $entidad = $request->input('entidad');

        // Buscar entidades similares 

        $stopWords = ['CAMARA', 'COMERCIO', 'DE']; // Palabras genéricas a excluir
        $cleanEntidad = str_replace($stopWords, '', strtoupper($entidad));

        $similares = DB::table('entidades')
            ->select('entidad_busqueda')
            ->whereRaw("MATCH(entidad_busqueda) AGAINST(? IN BOOLEAN MODE)", [$cleanEntidad])
            ->pluck('entidad_busqueda');

        return response()->json([
            'similar' => $similares,
        ]);
    }*/
    public function checkEntidad(Request $request)
    {
        $entidad = strtoupper($request->input('entidad'));

        // Lista de palabras genéricas que no queremos comparar
        $stopWords = ['CAMARA', 'COMERCIO', 'DE'];
        $entidadFiltrada = preg_replace('/\b(' . implode('|', $stopWords) . ')\b/', '', $entidad);

        // Obtener todas las entidades para comparar
        $entidadesExistentes = DB::table('entidades')->pluck('entidad');

        // Lista para almacenar entidades similares
        $entidadesSimilares = [];

        // Calcular similitudes usando similar_text
        foreach ($entidadesExistentes as $existente) {
            $existenteFiltrado = preg_replace('/\b(' . implode('|', $stopWords) . ')\b/', '', strtoupper($existente));
            similar_text($entidadFiltrada, $existenteFiltrado, $porcentajeSimilitud);

            if ($porcentajeSimilitud >= 70) { // Umbral de similitud
                $entidadesSimilares[] = $existente;
            }
        }

        return response()->json([
            'similar' => $entidadesSimilares,
        ]);
    }

    public function checkEntidadMod(Request $request)
    {
        $entidad = strtoupper($request->input('entidad'));

        // Lista de palabras genéricas que no queremos comparar
        $stopWords = ['CAMARA', 'COMERCIO', 'DE'];
        $entidadFiltrada = preg_replace('/\b(' . implode('|', $stopWords) . ')\b/', '', $entidad);

        // Obtener todas las entidades para comparar
        $entidadesExistentes = DB::table('entidades')->where('id', '!=', $request->input('entidad_id'))->pluck('entidad');

        // Lista para almacenar entidades similares
        $entidadesSimilares = [];

        // Calcular similitudes usando similar_text
        foreach ($entidadesExistentes as $existente) {
            $existenteFiltrado = preg_replace('/\b(' . implode('|', $stopWords) . ')\b/', '', strtoupper($existente));
            similar_text($entidadFiltrada, $existenteFiltrado, $porcentajeSimilitud);

            if ($porcentajeSimilitud >= 70) { // Umbral de similitud
                $entidadesSimilares[] = $existente;
            }
        }

        return response()->json([
            'similar' => $entidadesSimilares,
        ]);
    }

    public function registrar_entidad(Request $request)
    { 

        try {
            
            $pais = 0;
            $provincia = 0;
            $canton = 0;
            if($request->input('pais')){
                $pais = $request->input('pais');
            }
            if($request->input('provincia')){
                $provincia = $request->input('provincia');
            }
            if($request->input('canton')){
                $canton = $request->input('canton');
            }
            // Crear registro en la base de datos
            $camara = Entidad::create([ 
                'ruc' => strtoupper($request->input('ruc')),
                'entidad' => strtoupper($request->input('entidad')),
                'entidad_busqueda' => strtoupper($request->input('entidad')),
                'id_tipo_entidad' => strtoupper($request->input('tipo_entidad')),
                'alcance' => strtoupper($request->input('alcance')),
                'direccion' => strtoupper($request->input('direccion')),
                'telefono' => strtoupper($request->input('telefono')),
                'representante' => strtoupper($request->input('representante')),
                'telefono_representante' => strtoupper($request->input('telefono_representante')),
                'id_pais' => strtoupper($pais),
                'id_provincia' => strtoupper($provincia),
                'id_canton' => strtoupper($canton),
                'estado' => 1
            ]); 

            return response()->json(['success' => 'Entidad registrada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'El RUC o nombre de Entidad ingresado ya existe en el Sistema.'], 422);
            }
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        }
    }

    public function eliminar_entidad($id)
    {
        //$colaborador = Colaborador::find($id);
        $entidad = Entidad::where('id', $id)->first();


        if (!$entidad) {
            return response()->json(['error' => 'Entidad no encontrada'], 404);
        }
    
        // Cambiar el valor del campo 'activo' a 0
        $entidad->estado = 0;
        $entidad->save();
    
        return response()->json(['success' => 'Entidad eliminada correctamente']);
    }

    public function detalle_entidad($id)
    {
        // Buscar la cámara por ID
        $entidad = Entidad::find($id);
    
        if (!$entidad) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }
    
        // Convertir el modelo Camara a un array
        $entidadArray = $entidad->toArray(); 
    
        // Devolver la respuesta JSON
        return response()->json($entidadArray);
    }

    public function modificar_entidad(Request $request)
    {  
        try {
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
             
            // Buscar el registro existente por ID
            $entidad = Entidad::find($request->input('entidad_id'));
        
            if (!$entidad) {
                return response()->json(['error' => 'La entidad no existe.'], 404);
            }

            $pais = 0;
            $provincia = 0;
            $canton = 0;
            if($request->input('pais_mod')){
                $pais = $request->input('pais_mod');
            }
            if($request->input('provincia_mod')){
                $provincia = $request->input('provincia_mod');
            }
            if($request->input('canton_mod')){
                $canton = $request->input('canton_mod');
            }
        
            // Actualizar los campos del registro existente
            $entidad->update([
                'ruc' => strtoupper($request->input('ruc_mod')),
                'entidad' => strtoupper($request->input('entidad_mod')),
                'entidad_busqueda' => strtoupper($request->input('entidad_mod')),
                'id_tipo_entidad' => strtoupper($request->input('tipo_entidad_mod')),
                'alcance' => strtoupper($request->input('alcance_mod')),
                'direccion' => strtoupper($request->input('direccion_mod')),
                'telefono' => strtoupper($request->input('telefono_mod')),
                'representante' => strtoupper($request->input('representante_mod')),
                'telefono_representante' => strtoupper($request->input('telefono_representante_mod')),
                'id_pais' => strtoupper($pais),
                'id_provincia' => strtoupper($provincia),
                'id_canton' => strtoupper($canton),
                'estado' => 1
            ]); 
        
            
            //return response()->json(['success' => 'Cámara actualizada correctamente'], 200);
            /*return response()->json(['response' => [
                'msg' => "Registro modificado",
                ]
            ], 201);*/
            return response()->json(['success' => 'Entidad modificada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) { 
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'El RUC o nombre de Entidad que intenta modificar ya existe en el Sistema.'], 422);
            }
            return response()->json(['error' => 'Error al modificar la Entidad: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al modificar la Entidad: ' . $e->getMessage()], 500);
        }
    }

    public function entidades_obligaciones()
    {   
        $tiempo_presentacion = TiempoPresentacion::pluck('descripcion', 'id');  
        $tipo_presentacion = TipoPresentacion::pluck('descripcion', 'id');    
        $entidades = Entidad::pluck('entidad', 'id');   

        return view('administrador.entidades.entidades_obligaciones', compact('entidades', 'tiempo_presentacion', 'tipo_presentacion') );
    }

}
