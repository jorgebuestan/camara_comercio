<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    /*public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }*/
    //jbuestan: Cambio para autenticacion tanto de Correo como de Username, que sera el RUC
    public function store(Request $request): RedirectResponse
    {
        // Valida que el campo 'login' pueda ser un email o un username
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        // Determinar si el login es un email o un username
        $fieldType = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Verificar que el usuario existe y tiene estado activo
        $user = \App\Models\User::where($fieldType, $credentials['login'])->first();

        if (!$user || $user->estado != 1) {
            throw ValidationException::withMessages([
                'login' => __('El usuario no está activo o no existe.'),
            ]);
        }

        // Intentar autenticarse con el campo adecuado
        if (!Auth::attempt([$fieldType => $credentials['login'], 'password' => $credentials['password']], $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'login' => __('Las credenciales proporcionadas son incorrectas.'),
            ]);
        }

        // Regenerar sesión
        $request->session()->regenerate();

        return redirect()->intended('/dashboard'); // Redirige al home o ruta protegida
    }
    
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
