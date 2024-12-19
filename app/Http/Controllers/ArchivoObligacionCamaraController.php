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

class ArchivoObligacionCamaraController extends Controller
{
    //
    /*public function index()
    {   
        //$usuarios = Auth::user()->hasRole('admin') ? User::all() : null;
        $camaras = Camara::pluck('razon_social', 'id');
        return view('camara.archivos.obligaciones_camaras', compact('camaras') );
    }*/

    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $camaras = Camara::pluck('razon_social', 'id');
            $obligaciones = []; // Vacío inicialmente porque el admin seleccionará la cámara
        } else {
            $usuario = Auth::user(); // Obtiene el objeto completo del usuario autenticado
            $camara = Camara::where('ruc', $usuario->username)->first(); 

            $camaras = []; // El select de cámaras no se mostrará
            $obligaciones = CamaraObligacion::select(
                                'camaras_obligaciones.id',
                                DB::raw("CONCAT(entidades.entidad, ' - ', obligaciones.obligacion) AS nombre")
                            )
                            ->join('obligaciones', 'obligaciones.id', '=', 'camaras_obligaciones.id_obligacion')
                            ->join('entidades', 'entidades.id', '=', 'camaras_obligaciones.id_entidad')
                            ->where('camaras_obligaciones.id_camara', $camara->id)
                            ->pluck('nombre', 'id');
        }

        return view('camara.archivos.obligaciones_camaras', compact('camaras', 'obligaciones'));
    }

    public function get_obligaciones_camara(Request $request)
    {  
        $id_camara = request('id_camara'); 
        // Obtener las obligaciones con el concat deseado 
        $obligaciones = CamaraObligacion::select(
                            'camaras_obligaciones.id',
                            DB::raw("CONCAT(entidades.entidad, ' - ', obligaciones.obligacion) AS nombre")
                        )
                        ->join('obligaciones', 'obligaciones.id', '=', 'camaras_obligaciones.id_obligacion')
                        ->join('entidades', 'entidades.id', '=', 'camaras_obligaciones.id_entidad')
                        ->where('camaras_obligaciones.id_camara', $id_camara)
                        ->pluck('nombre', 'id');
  
        // Formato de respuesta esperado
        return response()->json([
            'obligaciones' => $obligaciones->map(function ($nombre, $id) {
                return ['id' => $id, 'nombre' => $nombre];
            })->values(),
        ]);
    }

    public function guardar_archivo_camara(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Validaciones
        $request->validate([
            'archivo' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'usuario_id' => $user->hasRole('admin') ? 'required|exists:users,id' : 'nullable',
        ]);

        // Determinar el usuario destino
        if ($user->hasRole('admin')) {
            // Si el usuario es admin, se usa el usuario del select
            $usuarioDestino = User::findOrFail($request->usuario_id);
        } else {
            // Si no es admin, se usa el usuario autenticado
            $usuarioDestino = $user;
        }

        $camaraDestino = Camara::where('username', $usuarioDestino->username)->first();

        // Obtener el archivo subido
        $archivo = $request->file('archivo');

        // Guardar el archivo en la carpeta específica del usuario destino
        $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();
        $rutaArchivo = $archivo->storeAs(
            'archivos/' . $usuarioDestino->id, // Carpeta del usuario destino
            $nombreArchivo,
            'public' // Disco configurado en config/filesystems.php
        );

        // **Guardar información adicional en la base de datos**
        // Por ejemplo, almacenar nombre, usuario destino y ruta en una tabla 'archivos'
        ArchivoObligacionCamara::create([
            'user_id' => $usuarioDestino->id, // Usuario al que pertenece el archivo
            'subido_por' => $user->id, // Usuario que subió el archivo (admin o usuario actual)
            'nombre_archivo' => $nombreArchivo,
            'ruta' => $rutaArchivo,
        ]);

        /*
        'id_camara',
        'id_entidad',
        'id_obligacion',
        'ruta_archivo',
        'validado',
        'subido_por',
        'estado' 
        */

        // Redirigir con un mensaje de éxito
        return back()->with('success', 'Archivo subido correctamente a la carpeta del usuario: ' . $usuarioDestino->name);
    }
}
