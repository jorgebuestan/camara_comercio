<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User; 
use App\Models\ArchivoObligacionCamara;
use App\Models\Camara;

class ArchivoObligacionCamaraController extends Controller
{
    //
    public function index()
    {  
        $usuarios = Auth::user()->hasRole('admin') ? User::all() : null;
        return view('camara.archivos.obligaciones_camaras', compact('usuarios') );
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
