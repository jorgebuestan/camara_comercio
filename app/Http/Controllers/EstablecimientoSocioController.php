<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\EstablecimientoSocio;
use App\Models\TipoRegimen;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\ActividadEconomica;
use App\Models\Socio;
use App\Models\Camara;

class EstablecimientoSocioController extends Controller
{
    //
    public function establecimientos_socio()
    {
        $regimen = TipoRegimen::pluck('nombre', 'id');
        $paises = Pais::pluck('nombre', 'id');
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $parroquias = Parroquia::where('id_pais', 57)->where('id_provincia', 2)->where('id_canton', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $actividadesEconomicas = ActividadEconomica::pluck('descripcion', 'id');
        $sociosSelect = Socio::pluck('razon_social', 'id');
        $camaras = Camara::with('datos_tributarios')->where('estado', 1)->get();
        Log::info($camaras);

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

        return view('administrador.socios.establecimientos_socio', compact('regimen', 'paises', 'provincias', 'cantones', 'parroquias', 'actividadesEconomicas', 'sociosSelect', 'camaras'));
    }
}
