<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CamaraController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\FuncionesGeneralesController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\ObligacionesController;

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
    Route::get('/administrador/camara/detalle/{id}', [CamaraController::class, 'detalle_camara'])->middleware('auth')->name('admin.detalle_camara');
    Route::post('/administrador/camara/modificar_camara', [CamaraController::class, 'modificar_camara'])->middleware('auth')->name('admin.modificar_camara');

    //Maestro de Establecimientos
    Route::get('/administrador/maestro_establecimientos', [EstablecimientoController::class, 'maestro_establecimientos'])->middleware('auth')->name('admin.maestro_establecimientos');
    Route::get('/administrador/obtener_listado_establecimientos', [EstablecimientoController::class, 'obtener_listado_establecimientos'])->middleware('auth')->name('admin.obtener_listado_establecimientos');
    Route::post('/administrador/registrar_establecimiento', [EstablecimientoController::class, 'registrar_establecimiento'])->middleware('auth')->name('admin.registrar_establecimiento');
    Route::post('/administrador/establecimiento/eliminar/{id}', [EstablecimientoController::class, 'eliminar_establecimiento'])->middleware('auth')->name('admin.eliminar_establecimiento');;
    Route::get('/administrador/establecimiento/detalle/{id}', [EstablecimientoController::class, 'detalle_establecimiento'])->middleware('auth')->name('admin.detalle_establecimiento');
    Route::post('/administrador/camara/modificar_establecimiento', [EstablecimientoController::class, 'modificar_establecimiento'])->middleware('auth')->name('admin.modificar_establecimiento');

    //Maestro de Socios
    Route::get('/administrador/maestro_socios', [SocioController::class, 'maestro_socios'])->middleware('auth')->name('admin.maestro_socios');


    //Maestro de Obligaciones
    Route::get('/administrador/maestro_obligaciones', [ObligacionesController::class, 'maestro_obligaciones'])->middleware('auth')->name('admin.maestro_obligaciones');
    Route::get('/administrador/obtener_listado_obligaciones', [ObligacionesController::class, 'obtener_listado_obligaciones'])->middleware('auth')->name('admin.obtener_listado_obligaciones');
    Route::post('/administrador/registrar_obligacion', [ObligacionesController::class, 'registrar_obligacion'])->middleware('auth')->name('admin.registrar_obligacion');
    
    Route::post('/administrador/check-obligacion', [ObligacionesController::class, 'checkObligacion'])->name('admin.check_obligacion');
    
    //Maestro de Entidades
    Route::get('/administrador/maestro_entidades', [EntidadesController::class, 'maestro_entidades'])->middleware('auth')->name('admin.maestro_entidades');
    Route::get('/administrador/obtener_listado_entidades', [EntidadesController::class, 'obtener_listado_entidades'])->middleware('auth')->name('admin.obtener_listado_entidades');
    Route::post('/administrador/registrar_entidad', [EntidadesController::class, 'registrar_entidad'])->middleware('auth')->name('admin.registrar_entidad');
    Route::post('/administrador/entidad/eliminar/{id}', [EntidadesController::class, 'eliminar_entidad'])->middleware('auth')->name('admin.eliminar_entidad');;
    Route::get('/administrador/entidad/detalle/{id}', [EntidadesController::class, 'detalle_entidad'])->middleware('auth')->name('admin.detalle_entidad');
    Route::post('/administrador/camara/modificar_entidad', [EntidadesController::class, 'modificar_entidad'])->middleware('auth')->name('admin.modificar_entidad');

    Route::post('/administrador/check-entidad', [EntidadesController::class, 'checkEntidad'])->name('admin.check_entidad');
    Route::post('/administrador/check-entidad-modificar', [EntidadesController::class, 'checkEntidadMod'])->name('admin.check_entidad_modificar');
    

});

require __DIR__ . '/auth.php';
