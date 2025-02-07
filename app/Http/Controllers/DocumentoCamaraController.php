<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camara;
use App\Models\DocumentoCamara;

class DocumentoCamaraController extends Controller
{
    //
    public function documentos_camara($id)  
    {   
       //$documentos_personales = DocumentoPersonal::where('id_usuario', $id)->get();
       $camara = Camara::where('id', $id)->get(); 

       $escrituras = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '2')->get();  
       $estatutos = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '3')->get(); 
 
       $nombramiento = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '5')->get(); 
       $ruc = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '6')->get(); 
 
       $varios = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '8')->get();  
  
       return view('administrador.camaras.documentos_camaras', 
        compact('camara', 'escrituras', 'estatutos','nombramiento','ruc', 'varios') 
       );
    }
}
