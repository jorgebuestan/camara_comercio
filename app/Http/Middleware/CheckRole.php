<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /*public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }*/
    public function handle($request, Closure $next, $roles)
    {
        //$rolesArray = explode(',', $roles);
        if (!Auth::check()) {
            Log::info('Usuario no autenticado');
            return redirect('/');
        }

        Log::info('Roles esperadosnnnnnnnn: ' . $roles);
        $rolesArray = array_map('trim', explode('|', $roles)); // Separar y limpiar los roles
        Log::info('Roles esperados separados: ', $rolesArray);


        $user_id = Auth::id(); // Obtener el ID del usuario autenticado

        $user = Auth::user(); // Obtener el usuario autenticado
        $roles = $user->getRoleNames(); // Esto devuelve una colección de nombres de roles

        Log::info('Roles del usuario: ' . $roles);

        $userRoles = Auth::user()->roles->pluck('name')->toArray();
        Log::info('Roles del usuario: ', $userRoles);

        if (!array_intersect($rolesArray, $userRoles)) {
            Log::info('Usuario no tiene ninguno de los roles necesarios');
            return redirect()->route('dashboard')->with('error', 'El usuario no tiene autorización para este módulo');
        }

        return $next($request);
    }
}
