<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\TipoEntidad; 

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
        
        return view('administrador.maestro_entidades', compact('paises', 'provincias', 'cantones', 'tipo_entidad') );
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
                'representante' => $representante, 
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

    public function registrar_entidad(Request $request)
    { 

        try {
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fechaIngreso = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_ingreso'))->format('Y-m-d');

            $rutaLogo = 'default/default_logo.png'; // Ruta por defecto al logo

            // Manejo del archivo de logo si existe
            if ($request->hasFile('file')) {
                $ruc = $request->input('ruc');
                $archivoLogo = $request->file('file');
                $nombreArchivo = "{$ruc}." . $archivoLogo->getClientOriginalExtension();

                // Crear carpeta con el nombre del RUC y guardar el archivo
                $rutaLogo = "logos/{$ruc}/{$nombreArchivo}";
                $archivoLogo->storeAs("logos/{$ruc}", $nombreArchivo, 'public');
            }

            

            // Crear registro en la base de datos
            $camara = Camara::create([
                'logo' => $rutaLogo,
                'fecha_ingreso' => $fechaIngreso, // Usar fecha convertida
                'ruc' => strtoupper($request->input('ruc')),
                'razon_social' => strtoupper($request->input('razon_social')),
                'cedula_representante_legal' => strtoupper($request->input('cedula_representante_legal')),
                'nombres_representante_legal' => strtoupper($request->input('nombres_representante_legal')),
                'apellidos_representante_legal' => strtoupper($request->input('apellidos_representante_legal')),
                'telefono_representante_legal' => strtoupper($request->input('telefono_representante_legal')),
                'correo_representante_legal' => strtoupper($request->input('correo_representante_legal')),
                'cargo_representante_legal' => strtoupper($request->input('cargo_representante_legal')),
                'direccion_representante_legal' => strtoupper($request->input('direccion_representante_legal')),
                'estado' => 1
            ]);

            $fechaRegistro = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_registro'))->format('Y-m-d');
            $fechaConstitucion = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_constitucion'))->format('Y-m-d');


            //$actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', []);
            $actividadesEconomicasSeleccionadas = $request->input('actividad_economica_seleccionados', ''); 
            // Convertir la cadena en un array (si no está vacío)
            $actividadesEconomicasSeleccionadasArray = $actividadesEconomicasSeleccionadas ? explode(',', $actividadesEconomicasSeleccionadas) : [];

            
            DatoTributario::create([
                'id_camara' => $camara->id,
                'tipo_regimen' => strtoupper($request->input('tipo_regimen')), 
                'fecha_registro_sri' => $fechaRegistro,
                'fecha_constitucion' => $fechaConstitucion,
                'agente_retencion' => strtoupper($request->input('agente_retencion')),
                'contribuyente_especial' => strtoupper($request->input('contribuyente_especial')),
                'id_pais' => $request->input('pais'),
                'id_provincia' => $request->input('provincia'),
                'id_canton' => $request->input('canton'),
                'id_parroquia' => $request->input('parroquia'),
                'calle' => strtoupper($request->input('calle')),
                'manzana' => strtoupper($request->input('manzana')),
                'numero' => strtoupper($request->input('numero')),
                'interseccion' => strtoupper($request->input('interseccion')),
                'referencia' => strtoupper($request->input('referencia')),
                'actividades_economicas' =>  json_encode($actividadesEconomicasSeleccionadasArray)
            ]);

            return response()->json(['success' => 'Cámara registrada correctamente'], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) { // Código SQL para violación de restricción única
                return response()->json(['error' => 'El RUC ingresado ya existe en el sistema.'], 422);
            }
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar la cámara: ' . $e->getMessage()], 500);
        }
    }

}
