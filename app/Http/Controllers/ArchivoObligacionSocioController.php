<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoObligacionSocioController extends Controller
{
    //
    public function index()
    {  
         
        return view('camara.archivos.obligaciones_socios' );
    }
}
