<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CamaraController;  
use App\Http\Controllers\FuncionesGeneralesController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [UserController::class, 'index'])
        ->middleware('permission:ver usuarios')
        ->name('usuarios.index');

    Route::get('/usuarios/crear', [UserController::class, 'create'])
        ->middleware('permission:crear usuarios')
        ->name('usuarios.create');

    Route::post('/usuarios', [UserController::class, 'store'])
        ->middleware('permission:crear usuarios')
        ->name('usuarios.store');

    //Funciones Generales
    Route::get('/get-provincias', [FuncionesGeneralesController::class, 'get_provincias'])->middleware('auth')->name('funciones_generales.get_provincias');
    Route::get('/get-cantones', [FuncionesGeneralesController::class, 'get_cantones'])->middleware('auth')->name('funciones_generales.get_cantones');
    Route::get('/get-parroquias', [FuncionesGeneralesController::class, 'get_parroquias'])->middleware('auth')->name('funciones_generales.get_parroquias');
    
    //Funciones Administrador

    //Maestro de Camaras
    Route::get('/administrador/maestro_camaras', [CamaraController::class, 'maestro_camaras'])->middleware('auth')->name('admin.maestro_camaras');
    Route::get('/administrador/obtener_listado_camaras', [CamaraController::class, 'obtener_listado_camaras'])->middleware('auth')->name('admin.obtener_listado_camaras');
    Route::post('/administrador/registrar_camara', [CamaraController::class, 'registrar_camara'])->middleware('auth')->name('admin.registrar_camara');
    Route::post('/administrador/camara/eliminar/{id}', [CamaraController::class, 'eliminar_camara'])->middleware('auth')->name('admin.eliminar_camara');;
    Route::get('/administrador/camara/detalle/{id}', [CamaraController::class, 'detalle_camara'])->middleware('auth')->name('tyc.detalle_camara');

});

require __DIR__.'/auth.php';
