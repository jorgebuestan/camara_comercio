<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;
use App\Models\DocumentoSocio;

class DocumentoSocioController extends Controller
{
    //
    public function documentos_socio($id)  
    {   
       //$documentos_personales = DocumentoPersonal::where('id_usuario', $id)->get();
       $socio = Socio::where('id', $id)->get(); 

       $cedula = DocumentoSocio::where('id_socio', $id)->where('id_tipo_documento', '1')->where('estado', '1')->get();  
       $foto = DocumentoSocio::where('id_socio', $id)->where('id_tipo_documento', '4')->where('estado', '1')->get(); 
 
       $nombramiento = DocumentoSocio::where('id_socio', $id)->where('id_tipo_documento', '5')->where('estado', '1')->get(); 
       $ruc = DocumentoSocio::where('id_socio', $id)->where('id_tipo_documento', '6')->where('estado', '1')->get(); 
 
       $solicitud = DocumentoSocio::where('id_socio', $id)->where('id_tipo_documento', '7')->where('estado', '1')->get(); 
       $varios = DocumentoSocio::where('id_socio', $id)->where('id_tipo_documento', '8')->where('estado', '1')->get();  
  
       return view('administrador.socios.documentos_socios', 
        compact('socio', 'cedula', 'foto','nombramiento','ruc', 'solicitud', 'varios') 
       );
    }

    public function registrar_documento_socio(Request $request){
 
        $socio_ruc = Socio::where('id', $request->input('id_socio'))->value('identificacion'); 
        $ruc = $socio_ruc; 

        $file = $request->file('file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = \File::extension($filename);

            // Lista de extensiones permitidas
            $allowedExtensions = ['pdf', 'xls', 'xlsx', 'doc', 'docx', 'jpg', 'jpeg', 'png','PDF', 'XLS', 'XLSX', 'DOC', 'DOCX', 'JPG', 'JPEG', 'PNG' ];


            // Tipos de documento que solo aceptan PDF 
            $tipoDoc = $request->input('tipoDoc');
  
            if (in_array($extension, $allowedExtensions)) {
                $fechaHora = now()->format('YmdHis'); // YYYYMMDDHHMMSS
                $nombreArchivo = "{$ruc}_{$fechaHora}.{$extension}"; // Ejemplo: 123456789_20230207153000.pdf
                $rutaArchivo = "documentos/socios/{$ruc}/{$nombreArchivo}";

                // Guardar el archivo en el disco público
                $file->storeAs("documentos/socios/{$ruc}", $nombreArchivo, 'public');

                // Guardar en la base de datos
                DocumentoSocio::create([
                    'id_socio' => $request->input('id_socio'),
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

    public function ver_doc_socio($id_file){ 
        $file = DocumentoSocio::where('id',$id_file)->where('estado',1)->first(); 
        return response()->json(['response' => [
            'url' => $file->url,
            'name' => $file->nombre,
            ]
        ], 201);
    }

    public function eliminar_archivo_socio($id){
        //DocumentoSocio::where('id',$id)->delete();
        DocumentoSocio::where('id', $id)->update(['estado' => 0]);
        return response()->json(['response' => [
            'msg' => 'Archivo Eliminado correctamnete',
            ]
        ], 201);
    }

    public function get_cedulas_socio(Request $request)
    { 
        $cedulas = DocumentoSocio::where('id_socio', $request->socio_id)->where('id_tipo_documento', '1')->where('estado', '1')->get();  
        return response()->json($cedulas);
    }

    public function get_fotos_socio(Request $request)
    { 
        $fotos = DocumentoSocio::where('id_socio', $request->socio_id)->where('id_tipo_documento', '4')->where('estado', '1')->get();  
        return response()->json($fotos);
    }

    public function get_nombramientos_socio(Request $request)
    { 
        $nombramientos = DocumentoSocio::where('id_socio', $request->socio_id)->where('id_tipo_documento', '5')->where('estado', '1')->get();  
        return response()->json($nombramientos);
    }

    public function get_ruc_socio(Request $request)
    { 
        $ruc = DocumentoSocio::where('id_socio', $request->socio_id)->where('id_tipo_documento', '6')->where('estado', '1')->get();  
        return response()->json($ruc);
    }

    public function get_varios_socio(Request $request)
    { 
        $varios = DocumentoSocio::where('id_socio', $request->socio_id)->where('id_tipo_documento', '8')->where('estado', '1')->get();  
        return response()->json($varios);
    }
}
