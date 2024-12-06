<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\TiempoPresentacion;
use App\Models\TipoPresentacion;

class ObligacionesController extends Controller
{
    //
    public function maestro_obligaciones()
    {   
        $paises = Pais::pluck('nombre', 'id');  
        $provincias = Provincia::where('id_pais', 57)->pluck('nombre', 'id'); // Provincias de Ecuador
        $cantones = Canton::where('id_pais', 57)->where('id_provincia', 2)->pluck('nombre', 'id'); // Provincias de Ecuador
        $tiempo_presentacion = TiempoPresentacion::pluck('descripcion', 'id');  
        $tipo_presentacion = TipoPresentacion::pluck('descripcion', 'id');   

        $provinciaDefault = Provincia::find(1); // Obtenemos la provincia con ID = 1
        if ($provinciaDefault) {
            $provincias->put($provinciaDefault->id, $provinciaDefault->nombre); // Añadimos al listado
        }

        $cantonDefault = Canton::find(1); // Obtenemos la provincia con ID = 1
        if ($cantonDefault) {
            $cantones->put($cantonDefault->id, $cantonDefault->nombre); // Añadimos al listado
        }
        
        return view('administrador.maestro_obligaciones', compact('paises', 'provincias', 'cantones', 'tiempo_presentacion', 'tipo_presentacion') );
    }
}
