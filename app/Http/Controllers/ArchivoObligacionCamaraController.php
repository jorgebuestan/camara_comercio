<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ArchivoObligacionCamaraController extends Controller
{
    //
    public function index()
    {  
        $usuarios = Auth::user()->hasRole('admin') ? User::all() : null;
        return view('camara.archivos.obligaciones_camaras', compact('usuarios') );
    }

    public function store(Request $request)
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
        Archivo::create([
            'user_id' => $usuarioDestino->id, // Usuario al que pertenece el archivo
            'subido_por' => $user->id, // Usuario que subió el archivo (admin o usuario actual)
            'nombre_archivo' => $nombreArchivo,
            'ruta' => $rutaArchivo,
        ]);

        // Redirigir con un mensaje de éxito
        return back()->with('success', 'Archivo subido correctamente a la carpeta del usuario: ' . $usuarioDestino->name);
    }
}
