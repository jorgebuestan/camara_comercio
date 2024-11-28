<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Camara;
use App\Models\DatoTributario;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;

class CamaraController extends Controller
{
    //
    public function maestro_camaras()
    {  
        $regimen = TipoRegimen::pluck('nombre', 'id'); 
        $paises = Pais::pluck('nombre', 'id');  
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        
        $provinciaDefault = Provincia::find(1); // Obtenemos la provincia con ID = 1
        if ($provinciaDefault) {
            $provincias->put($provinciaDefault->id, $provinciaDefault->nombre); // Añadimos al listado
        }

        $cantonDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
        if ($cantonDefault) {
            $cantones->put($cantonDefault->id, $cantonDefault->nombre); // Añadimos al listado
        }

        $parroquiaDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
        if ($parroquiaDefault) {
            $parroquias->put($parroquiaDefault->id, $parroquiaDefault->nombre); // Añadimos al listado
        }
        
        return view('administrador.maestro_camaras', compact('regimen', 'paises', 'provincias', 'cantones', 'parroquias') );
    }

    public function obtener_listado_camaras(Request $request)
    {
        $columns = [
            0 => 'camaras.id', 
            1 => 'acciones'
        ];

        $query = DB::table('camaras')  
            ->select(
                'camaras.id',
                'camaras.fecha_ingreso',
                'camaras.ruc',
                'camaras.razon_social',
                'camaras.cedula_representante_legal',
                'camaras.nombres_representante_legal',
                'camaras.apellidos_representante_legal'
            )
            ->where('camaras.estado', 1)
            ->orderBy('camaras.razon_social', 'asc');

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function($query) use ($search) {
                $query->where('camaras.ruc', 'LIKE', "%{$search}%") 
                    ->orWhere('camaras.razon_social', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.cedula_representante_legal', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.nombres_representante_legal', 'LIKE', "%{$search}%")
                    ->orWhere('camaras.apellidos_representante_legal', 'LIKE', "%{$search}%"); 
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

        $camaras = $query->get();

        $data = $camaras->map(function ($camara) {
            $boton = "";  
            
            $representante_legal = $camara->nombres_representante_legal . " ". $camara->apellidos_representante_legal;
            
            return [
                'fecha_ingreso' => $camara->fecha_ingreso, 
                'ruc' => $camara->ruc, 
                'razon_social' => $camara->razon_social, 
                'cedula_representante_legal' => $camara->cedula_representante_legal, 
                'representante_legal' => $representante_legal, 
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $camara->id . '">Modificar</button>' .
                '&nbsp;&nbsp;&nbsp;<button class="btn btn-warning mb-3 delete-camara" data-id="' . $camara->id . '">Eliminar</button>'.
                '&nbsp;&nbsp;&nbsp;' 
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('camaras')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];
        
        return response()->json($json_data);
    }

    
        // Validación de datos
        /*$validated = $request->validate([
            'fecha_ingreso' => 'required|string', // Validar como string inicialmente
            'ruc' => 'required|string|unique:camaras,ruc|max:20',
            'razon_social' => 'required|string|max:255',
            'cedula_representante_legal' => 'required|string|max:20',
            'nombres_representante_legal' => 'required|string|max:255',
            'apellidos_representante_legal' => 'required|string|max:255',
            'telefono_representante_legal' => 'nullable|string|max:20',
            'correo_representante_legal' => 'nullable|email|max:255',
            'cargo_representante_legal' => 'nullable|string|max:255',
            'direccion_representante_legal' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Acepta imágenes de hasta 2MB
        ]);*/
    public function registrar_camara(Request $request)
    { 

        try {
            // Convertir fecha_ingreso al formato MySQL (YYYY-MM-DD)
            $fechaIngreso = \Carbon\Carbon::createFromFormat('m/d/Y', $request->input('fecha_ingreso'))->format('Y-m-d');

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
                'ruc' => $request->input('ruc'),
                'razon_social' => $request->input('razon_social'),
                'cedula_representante_legal' => $request->input('cedula_representante_legal'),
                'nombres_representante_legal' => $request->input('nombres_representante_legal'),
                'apellidos_representante_legal' => $request->input('apellidos_representante_legal'),
                'telefono_representante_legal' => $request->input('telefono_representante_legal'),
                'correo_representante_legal' => $request->input('correo_representante_legal'),
                'cargo_representante_legal' => $request->input('cargo_representante_legal'),
                'direccion_representante_legal' => $request->input('direccion_representante_legal'),
                'estado' => 1
            ]);

            $fechaRegistro = \Carbon\Carbon::createFromFormat('m/d/Y', $request->input('fecha_registro'))->format('Y-m-d');
            $fechaConstitucion = \Carbon\Carbon::createFromFormat('m/d/Y', $request->input('fecha_constitucion'))->format('Y-m-d');


            DatoTributario::create([
                'id_camara' => $camara->id,
                'tipo_regimen' => $request->input('tipo_regimen'), // Usar fecha convertida
                'fecha_registro_sri' => $fechaRegistro,
                'fecha_constitucion' => $fechaConstitucion,
                'agente_retencion' => $request->input('agente_retencion'),
                'contribuyente_especial' => $request->input('contribuyente_especial'),
                'id_pais' => $request->input('pais'),
                'id_provincia' => $request->input('provincia'),
                'id_canton' => $request->input('canton'),
                'id_parroquia' => $request->input('parroquia'),
                'calle' => $request->input('calle'),
                'manzana' => $request->input('manzana'),
                'numero' => $request->input('numero'),
                'interseccion' => $request->input('interseccion'),
                'referencia' => $request->input('referencia')
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

    public function eliminar_camara($id)
    {
        //$colaborador = Colaborador::find($id);
        $camara = Camara::where('id', $id)->first();


        if (!$camara) {
            return response()->json(['error' => 'Camara no encontrada'], 404);
        }
    
        // Cambiar el valor del campo 'activo' a 0
        $camara->estado = 0;
        $camara->save();
    
        return response()->json(['success' => 'Cámara eliminada correctamente']);
    }

    public function detalle_camara($id)
    {
        // Buscar la cámara por ID
        $camara = Camara::find($id);
    
        if (!$camara) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }
    
        // Convertir el modelo Camara a un array
        $camaraArray = $camara->toArray();
    
        // Buscar el DatoTributario relacionado
        $datoTributario = DatoTributario::where('id_camara', $id)->first();
    
        // Si existe un DatoTributario, agregarlo al array de respuesta
        if ($datoTributario) {
            $camaraArray['dato_tributario'] = $datoTributario->toArray();
        }
    
        // Devolver la respuesta JSON
        return response()->json($camaraArray);
    }
}
