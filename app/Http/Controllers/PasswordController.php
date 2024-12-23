<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('auth.change-password');
    }

    /*public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8',
        ]);

        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->must_change_password = false;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Password cambiado correctamente.');
    }*/

    public function update(Request $request)
    {
        \Log::info('Autenticado?', ['is_authenticated' => auth()->check()]);
        \Log::info('Usuario autenticado:', ['user' => auth()->user()]);
    
        if (!auth()->check()) {
            \Log::info('Usuario no autenticado');
            return redirect()->route('login')->with('error', 'Por favor inicie sesión para cambiar la contraseña.');
        }
    
        $request->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);
    
        $user = auth()->user();
        $user->password = bcrypt($request->password);
        $user->must_change_password = false; // Cambiar a falso
        $user->save();
    
        return redirect()->route('dashboard')->with('success', 'Contraseña actualizada exitosamente.');
    }
}
