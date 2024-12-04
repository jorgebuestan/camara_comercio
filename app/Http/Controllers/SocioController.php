<?php

namespace App\Http\Controllers;

use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\Socio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocioController extends Controller
{
    //
    public function maestro_socios()
    {
        $regimenes = TipoRegimen::pluck('nombre', 'id');
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

        return view('administrador.maestro_socios', compact('regimenes', 'paises', 'provincias', 'cantones', 'parroquias'));
    }

    public function obtener_listado_socios(Request $request)
    {
        $columns = [
            0 => 'socios.id',
            1 => 'acciones',
        ];

        $query = Socio::select('fecha_ingreso', 'tipo_persona', 'tipo_personeria', 'razon_social', 'identificacion', 'tipo_identificacion')->where('estado', 1)->orderBy('razon_social')->get();

        //Busqueda
        if ($search = $request->input('search.value')) {
            $query->where(function ($query) use ($search) {
                $query->where('razon_social', 'LIKE', "%{$search}%");
                //faltan mas
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
                ...$socio,
                'btn' => '<button class="btn btn-primary mb-3 open-modal" data-id="' . $socio->id . '">Modificar</button>' .
                    '&nbsp;&nbsp;&nbsp;<button class="btn btn-warning mb-3 delete-camara" data-id="' . $socio->id . '">Eliminar</button>' .
                    '&nbsp;&nbsp;&nbsp;'
            ];
        });

        $response = [
            "draw" => intval($request->input('draw')),
            "recordsTotal" => DB::table('socios')->count(),
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ];

        return response()->json($response);
    }
}
