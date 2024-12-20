<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User; 
use App\Models\ArchivoObligacionCamara;
use App\Models\Camara;
use App\Models\CamaraObligacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ArchivoObligacionSocioController extends Controller
{
    //
    public function index()
    {   
        $id_camara = "";
        if (Auth::user()->hasRole('admin')) {
            $camaras = Camara::pluck('razon_social', 'id');
            $socios = [];
            $obligaciones = []; // Vacío inicialmente porque el admin seleccionará la cámara
        } else {
            $usuario = Auth::user(); // Obtiene el objeto completo del usuario autenticado
            $camara = Camara::where('ruc', $usuario->username)->first(); 
            $id_camara = $camara->id;

            $socios = [];
            $camaras = []; // El select de cámaras no se mostrará
            $obligaciones = [];
        } 
        return view('camara.archivos.obligaciones_socios', compact('camaras', 'socios', 'obligaciones', 'id_camara'));
    }
}
