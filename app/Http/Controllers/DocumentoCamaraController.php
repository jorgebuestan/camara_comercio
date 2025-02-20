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

       $escrituras = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '2')->where('estado', '1')->get();  
       $estatutos = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '3')->where('estado', '1')->get(); 
 
       $nombramiento = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '5')->where('estado', '1')->get(); 
       $ruc = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '6')->where('estado', '1')->get(); 
 
       $varios = DocumentoCamara::where('id_camara', $id)->where('id_tipo_documento', '8')->where('estado', '1')->get();  
  
       return view('administrador.camaras.documentos_camaras', 
        compact('camara', 'escrituras', 'estatutos','nombramiento','ruc', 'varios') 
       );
    }

    public function registrar_documento_camara(Request $request){
 
        $camara_ruc = Camara::where('id', $request->input('id_camara'))->value('ruc'); 
        $ruc = $camara_ruc; 

        $file = $request->file('file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = \File::extension($filename);

            // Lista de extensiones permitidas
            //$allowedExtensions = ['pdf', 'xls', 'xlsx', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
            $allowedExtensions = ['pdf', 'xls', 'xlsx', 'doc', 'docx', 'jpg', 'jpeg', 'png','PDF', 'XLS', 'XLSX', 'DOC', 'DOCX', 'JPG', 'JPEG', 'PNG' ];



            // Tipos de documento que solo aceptan PDF 
            $tipoDoc = $request->input('tipoDoc');
  
            if (in_array($extension, $allowedExtensions)) {
                $fechaHora = now()->format('YmdHis'); // YYYYMMDDHHMMSS
                $nombreArchivo = "{$ruc}_{$fechaHora}.{$extension}"; // Ejemplo: 123456789_20230207153000.pdf
                $rutaArchivo = "documentos/camaras/{$ruc}/{$nombreArchivo}";

                // Guardar el archivo en el disco público
                $file->storeAs("documentos/camaras/{$ruc}", $nombreArchivo, 'public');

                // Guardar en la base de datos
                DocumentoCamara::create([
                    'id_camara' => $request->input('id_camara'),
                    'id_tipo_documento' => $request->input('tipoDoc'),
                    'url' => $rutaArchivo,
                    'nombre' => $filename,
                    'titulo' => $request->input('nombreArchivo'),
                    'estado' => 1
                ]);

                // Generar el mensaje según el tipo de documento
                $tipoDoc = $request->input('tipoDoc');
                $mensajes = [
                    "2" => "Se agregó un nuevo documento de Escritura de Cámara al registro de documentos",
                    "3" => "Se agregó un nuevo documento de Estatuto de Cámara al registro de documentos",
                    "5" => "Se agregó un nuevo documento de Nombramiento de Cámara al registro de documentos",
                    "6" => "Se agregó un nuevo documento de Ruc de Cámara al registro de documentos",
                    "8" => "Se agregó un nuevo documento Varios al registro de documentos"
                ];

                $mensaje = $mensajes[$tipoDoc] ?? "Registro Completado";

                return response()->json(['response' => ['msg' => $mensaje]], 201);
            } else {
                return response()->json([
                    'response' => [
                        'msg' => 'El archivo no tiene una extensión permitida para su registro(pdf, xls, xlsx, doc, docx)',
                    ]
                ], 400);
            }
        } else {
            return response()->json(['response' => ['msg' => 'No se subió ningún archivo.']], 400);
        }
    }

    public function ver_doc_camara($id_file){ 
        $file = DocumentoCamara::where('id',$id_file)->where('estado',1)->first(); 
        return response()->json(['response' => [
            'url' => $file->url,
            'name' => $file->nombre,
            ]
        ], 201);
    }

    public function eliminar_archivo_camara($id){
        //DocumentoCamara::where('id',$id)->delete();
        DocumentoCamara::where('id', $id)->update(['estado' => 0]);
        return response()->json(['response' => [
            'msg' => 'Archivo Eliminado correctamnete',
            ]
        ], 201);
    }

    public function get_escrituras_camara(Request $request)
    { 
        $escrituras = DocumentoCamara::where('id_camara', $request->camara_id)->where('id_tipo_documento', '2')->where('estado', '1')->get();  
        return response()->json($escrituras);
    }

    public function get_estatutos_camara(Request $request)
    { 
        $estatutos = DocumentoCamara::where('id_camara', $request->camara_id)->where('id_tipo_documento', '3')->where('estado', '1')->get(); 
        return response()->json($estatutos);
    }

    public function get_nombramientos_camara(Request $request)
    { 
        $nombramientos = DocumentoCamara::where('id_camara', $request->camara_id)->where('id_tipo_documento', '5')->where('estado', '1')->get(); 
        return response()->json($nombramientos);
    }

    public function get_ruc_camara(Request $request)
    { 
        $ruc = DocumentoCamara::where('id_camara', $request->camara_id)->where('id_tipo_documento', '6')->where('estado', '1')->get(); 
        return response()->json($ruc);
    }

    public function get_varios_camara(Request $request)
    {   
        $varios = DocumentoCamara::where('id_camara', $request->camara_id)->where('id_tipo_documento', '8')->where('estado', '1')->get();
        return response()->json($varios);
    }
}
