<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Camara;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\TipoPersoneria;
use App\Models\SolicitudSocio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SolicitudController extends Controller
{
    //
    public function index()
    {
        $regimenes = TipoRegimen::pluck('nombre', 'id');
        $paises = Pais::orderBy('nombre', 'asc')->pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->orderBy('nombre', 'asc')->pluck('nombre', 'id'); // Provincias de Ecuador

        $tiposPersoneria = TipoPersoneria::pluck('descripcion', 'id'); // Obtenemos los tipos de personeria

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
        
        return view('administrador.socios.solicitudes_socios', compact('regimenes', 'paises', 'provincias', 'cantones', 'parroquias', 'tiposPersoneria'));
    }
    
    public function obtener_listado_solicitudes(Request $request)
    {
        $columns = [
            0 => 'solicitudes_socios.id',
            1 => 'acciones'
        ];

        $query = DB::table('solicitudes_socios')
            ->leftJoin('tipo_personeria', 'tipo_personeria.id', '=', 'solicitudes_socios.id_tipo_personeria') 
            ->leftJoin('tipo_identificacion', 'tipo_identificacion.id', '=', 'solicitudes_socios.id_tipo_identificacion') 
            ->select(
                'solicitudes_socios.id',
                'tipo_personeria.descripcion as tipo_personeria',
                'tipo_identificacion.descripcion as tipo_identificacion',
                'solicitudes_socios.created_at as fecha_solicitud',
                'solicitudes_socios.cedula_ruc',
                'solicitudes_socios.razon_social',
                'solicitudes_socios.correo',
                'solicitudes_socios.telefono',
                'solicitudes_socios.direccion',
                'solicitudes_socios.ruta_archivo1',
                'solicitudes_socios.ruta_archivo2'
            )
            ->whereIn('solicitudes_socios.id_estado_formulario', [1, 2]);

        // Filtro de localidad 

        // Búsqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('tipo_personeria.descripcion', 'LIKE', "%{$search}%")
                    ->orWhere('tipo_identificacion.descripcion', 'LIKE', "%{$search}%")
                    ->orWhere('solicitudes_socios.cedula_ruc', 'LIKE', "%{$search}%")
                    ->orWhere('solicitudes_socios.razon_social', 'LIKE', "%{$search}%")
                    ->orWhere('solicitudes_socios.correo', 'LIKE', "%{$search}%")
                    ->orWhere('solicitudes_socios.telefono', 'LIKE', "%{$search}%")
                    ->orWhere('solicitudes_socios.direccion', 'LIKE', "%{$search}%");
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

        $solicitudes = $query->get();

        $data = $solicitudes->map(function ($solicitud) { 

            $boton1 = "";
            $boton2 = "";

            if ($solicitud->ruta_archivo1 ) {
                // Generar el botón con el enlace al archivo
                $boton1 = "<a href='" . asset('storage/' . $solicitud->ruta_archivo1) . "' 
                            target='_blank' 
                            class='btn btn-primary btn-sm'>
                            Ver Archivo
                          </a>";
            } else {
                // Si no está validado, mostrar un texto o mantener vacío
                $boton1 = "<span class='text-muted'>Sin archivo</span>";
            }

            if ($solicitud->ruta_archivo2 ) {
                // Generar el botón con el enlace al archivo
                $boton2 = "<a href='" . asset('storage/' . $solicitud->ruta_archivo2) . "' 
                            target='_blank' 
                            class='btn btn-primary btn-sm'>
                            Ver Archivo
                          </a>";
            } else {
                // Si no está validado, mostrar un texto o mantener vacío
                $boton2 = "<span class='text-muted'>Sin archivo</span>";
            }

            return [
                'fecha_solicitud' => $solicitud->fecha_solicitud,
                'tipo_personeria' => $solicitud->tipo_personeria,
                'tipo_identificacion' => $solicitud->tipo_identificacion,
                'cedula_ruc' => $solicitud->cedula_ruc,
                'razon_social' => $solicitud->razon_social,
                'correo' => $solicitud->correo,
                'telefono' => $solicitud->telefono,
                'direccion' => $solicitud->direccion,
                'ruta_archivo1' => $boton1,
                'ruta_archivo2' => $boton2,
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $solicitud->id . '">Modificar</button>'
            ];
        });

        $json_data = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('solicitudes_socios')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($json_data);
    }
}
