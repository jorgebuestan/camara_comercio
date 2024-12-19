<?php

use App\Http\Controllers\AdherenteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CamaraController;
use App\Http\Controllers\CamaraObligacionController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\EstablecimientoSocioController;
use App\Http\Controllers\FuncionesGeneralesController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\ObligacionesController;
use App\Http\Controllers\ObligacionesEntidadController;
use App\Http\Controllers\SocioObligacionController; 
use App\Http\Controllers\CamaraSocioController; 
use App\Http\Controllers\ReportesController; 
use App\Http\Controllers\ArchivoObligacionCamaraController; 
use App\Http\Controllers\ArchivoObligacionSocioController; 



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

    Route::get('/get-obligaciones-camaras', [FuncionesGeneralesController::class, 'get_obligaciones_camara'])->middleware('auth')->name('funciones_generales.get_obligaciones_camara');

    //Funciones Administrador

    //Maestro de Camaras
    Route::get('/administrador/maestro_camaras', [CamaraController::class, 'maestro_camaras'])->middleware('auth')->name('admin.maestro_camaras');
    Route::get('/administrador/obtener_listado_camaras', [CamaraController::class, 'obtener_listado_camaras'])->middleware('auth')->name('admin.obtener_listado_camaras');
    Route::post('/administrador/registrar_camara', [CamaraController::class, 'registrar_camara'])->middleware('auth')->name('admin.registrar_camara');
    Route::post('/administrador/camara/eliminar/{id}', [CamaraController::class, 'eliminar_camara'])->middleware('auth')->name('admin.eliminar_camara');;
    Route::get('/administrador/camara/detalle/{id}', [CamaraController::class, 'detalle_camara'])->middleware('auth')->name('admin.detalle_camara');
    Route::post('/administrador/camara/modificar_camara', [CamaraController::class, 'modificar_camara'])->middleware('auth')->name('admin.modificar_camara');

    //Maestro de Establecimientos de Camara
    Route::get('/administrador/establecimientos_camara', [EstablecimientoController::class, 'establecimientos_camara'])->middleware('auth')->name('admin.establecimientos_camara');
    Route::get('/administrador/obtener_listado_establecimientos_camara', [EstablecimientoController::class, 'obtener_listado_establecimientos_camara'])->middleware('auth')->name('admin.obtener_listado_establecimientos_camara');
    Route::post('/administrador/registrar_establecimiento', [EstablecimientoController::class, 'registrar_establecimiento'])->middleware('auth')->name('admin.registrar_establecimiento');
    Route::post('/administrador/establecimiento/eliminar/{id}', [EstablecimientoController::class, 'eliminar_establecimiento'])->middleware('auth')->name('admin.eliminar_establecimiento');;
    Route::get('/administrador/establecimiento/detalle/{id}', [EstablecimientoController::class, 'detalle_establecimiento'])->middleware('auth')->name('admin.detalle_establecimiento');
    Route::post('/administrador/camara/modificar_establecimiento', [EstablecimientoController::class, 'modificar_establecimiento'])->middleware('auth')->name('admin.modificar_establecimiento');

    //Maestro de Obligaciones de Camara
    Route::get('/administrador/camara/obligaciones_camara', [CamaraObligacionController::class, 'obligaciones_camara'])->middleware('auth')->name('admin.obligaciones_camara');
    Route::get('/administrador/obligacion_camara/index', [CamaraObligacionController::class, 'index'])->middleware('auth')->name('admin.obtener_listado_obligaciones_camara');
    Route::post('/administrador/obligacion_camara/registrar_obligacion_camara', [CamaraObligacionController::class, 'store'])->middleware('auth')->name('admin.registrar_obligacion_camara');
    Route::post('/administrador/obligacion_camara/modificar', [CamaraObligacionController::class, 'update'])->middleware('auth')->name('admin.modificar_obligacion_camara');
    Route::post('/administrador/obligacion_camara/eliminar/{id}', [CamaraObligacionController::class, 'eliminarObligacionCamara'])->middleware('auth')->name('admin.eliminar_obligacion_camara');;

    //Maestro de Socios
    Route::get('/administrador/maestro_socios', [SocioController::class, 'maestro_socios'])->middleware('auth')->name('admin.maestro_socios');
    Route::get('/administrador/obtener_listado_socios', [SocioController::class, 'obtener_listado_socios'])->middleware('auth')->name('admin.obtener_listado_socios');
    Route::post('/administrador/registrar_socio', [SocioController::class, 'registrar_socio'])->middleware('auth')->name('admin.registrar_socio');
    Route::post('/administrador/actualizar_socio', [SocioController::class, 'modificar_socio'])->middleware('auth')->name('admin.actualizar_socio');
    Route::post('/administrador/eliminar_socio', [SocioController::class, 'eliminar_socio'])->middleware('auth')->name('admin.eliminar_socio');

    //Maestro de Establecimientos de Socios
    Route::get('/administrador/establecimientos_socio', [EstablecimientoSocioController::class, 'establecimientos_socio'])->middleware('auth')->name('admin.establecimientos_socio');
    Route::get('/administrador/obtener_listado_establecimientos_socio', [EstablecimientoSocioController::class, 'obtener_listado_establecimientos_socio'])->middleware('auth')->name('admin.obtener_listado_establecimientos_socio');
    Route::post('/administrador/registrar_establecimiento_socio', [EstablecimientoSocioController::class, 'registrar_establecimiento_socio'])->middleware('auth')->name('admin.registrar_establecimiento_socio');
    Route::post('/administrador/establecimiento_socio/eliminar/{id}', [EstablecimientoSocioController::class, 'eliminar_establecimiento_socio'])->middleware('auth')->name('admin.eliminar_establecimiento_socio');;
    Route::get('/administrador/establecimiento_socio/detalle/{id}', [EstablecimientoSocioController::class, 'detalle_establecimiento_socio'])->middleware('auth')->name('admin.detalle_establecimiento_socio');
    Route::post('/administrador/establecimiento/modificar_establecimiento_socio', [EstablecimientoSocioController::class, 'modificar_establecimiento_socio'])->middleware('auth')->name('admin.modificar_establecimiento_socio');

    //Maestro de Obligaciones de Socios
    Route::get('/administrador/obligaciones_socio', [SocioObligacionController::class, 'obligaciones_socio'])->middleware('auth')->name('admin.obligaciones_socio');
    Route::get('/administrador/obligaciones_socio/index', [SocioObligacionController::class, 'index'])->middleware('auth')->name('admin.obtener_listado_obligaciones_socio');
    Route::post('/administrador/obligacion_socio/registrar_obligacion_socio', [SocioObligacionController::class, 'store'])->middleware('auth')->name('admin.registrar_obligacion_socio');
    Route::post('/administrador/obligacion_socio/modificar', [SocioObligacionController::class, 'update'])->middleware('auth')->name('admin.modificar_obligacion_socio');
    Route::post('/administrador/obligacion_socio/eliminar/{id}', [SocioObligacionController::class, 'eliminarObligacionSocio'])->middleware('auth')->name('admin.eliminar_obligacion_socio');;

    //Maestro de Adherentes de Socios
    Route::get('/administrador/adherentes_socio', [AdherenteController::class, 'adherentes_socio'])->middleware('auth')->name('admin.adherentes_socio');
    Route::get('/administrador/adherentes_socio/index', [AdherenteController::class, 'index'])->middleware('auth')->name('admin.obtener_listado_adherentes_socio');
    Route::post('/administrador/adherente_socio/registrar_adherente_socio', [AdherenteController::class, 'store'])->middleware('auth')->name('admin.registrar_adherente_socio');
    Route::post('/administrador/adherente_socio/modificar', [AdherenteController::class, 'update'])->middleware('auth')->name('admin.modificar_adherente_socio');
    Route::post('/administrador/adherente_socio/reafiliar_adherente', [AdherenteController::class, 'reafiliarAdherente'])->middleware('auth')->name('admin.reafiliar_adherente_socio');
    Route::post('/administrador/adherente_socio/eliminar/{id}', [AdherenteController::class, 'eliminarAdherente'])->middleware('auth')->name('admin.eliminar_adherente_socio');;

    //Maestro de Obligaciones
    Route::get('/administrador/maestro_obligaciones', [ObligacionesController::class, 'maestro_obligaciones'])->middleware('auth')->name('admin.maestro_obligaciones');
    Route::get('/administrador/obtener_listado_obligaciones', [ObligacionesController::class, 'obtener_listado_obligaciones'])->middleware('auth')->name('admin.obtener_listado_obligaciones');
    Route::post('/administrador/registrar_obligacion', [ObligacionesController::class, 'registrar_obligacion'])->middleware('auth')->name('admin.registrar_obligacion');
    Route::post('/administrador/obligacion/eliminar/{id}', [ObligacionesController::class, 'eliminar_obligacion'])->middleware('auth')->name('admin.eliminar_obligacion');;
    Route::get('/administrador/obligacion/detalle/{id}', [ObligacionesController::class, 'detalle_obligacion'])->middleware('auth')->name('admin.detalle_obligacion');
    Route::post('/administrador/obligacion/modificar_obligacion', [ObligacionesController::class, 'modificar_obligacion'])->middleware('auth')->name('admin.modificar_obligacion');

    Route::post('/administrador/check-obligacion', [ObligacionesController::class, 'checkObligacion'])->name('admin.check_obligacion');


    //Maestro de Entidades
    Route::get('/administrador/maestro_entidades', [EntidadesController::class, 'maestro_entidades'])->middleware('auth')->name('admin.maestro_entidades');
    Route::get('/administrador/obtener_listado_entidades', [EntidadesController::class, 'obtener_listado_entidades'])->middleware('auth')->name('admin.obtener_listado_entidades');
    Route::post('/administrador/registrar_entidad', [EntidadesController::class, 'registrar_entidad'])->middleware('auth')->name('admin.registrar_entidad');
    Route::post('/administrador/entidad/eliminar/{id}', [EntidadesController::class, 'eliminar_entidad'])->middleware('auth')->name('admin.eliminar_entidad');;
    Route::get('/administrador/entidad/detalle/{id}', [EntidadesController::class, 'detalle_entidad'])->middleware('auth')->name('admin.detalle_entidad');
    Route::post('/administrador/entidad/modificar_entidad', [EntidadesController::class, 'modificar_entidad'])->middleware('auth')->name('admin.modificar_entidad');

    Route::post('/administrador/check-entidad', [EntidadesController::class, 'checkEntidad'])->name('admin.check_entidad');
    Route::post('/administrador/check-entidad-modificar', [EntidadesController::class, 'checkEntidadMod'])->name('admin.check_entidad_modificar');

    //Manejo de Obligaciones por Entidad 
    Route::get('/administrador/entidades_obligaciones', [ObligacionesEntidadController::class, 'entidades_obligaciones'])->middleware('auth')->name('admin.entidades_obligaciones');
    Route::get('/administrador/obtener_listado_obligaciones_por_entidad', [ObligacionesEntidadController::class, 'obtener_listado_obligaciones_por_entidad'])->middleware('auth')->name('admin.obtener_listado_obligaciones_por_entidad');
    Route::post('/administrador/registrar_obligacion_entidad', [ObligacionesEntidadController::class, 'registrar_obligacion_entidad'])->middleware('auth')->name('admin.registrar_obligacion_entidad');
    Route::post('/administrador/entidades_obligaciones/eliminar/{id}', [ObligacionesEntidadController::class, 'eliminar_entidad_obligacion'])->middleware('auth')->name('admin.eliminar_entidad_obligacion');;
    Route::get('/administrador/entidad_obligacion/detalle/{id}', [ObligacionesEntidadController::class, 'detalle_entidad_obligacion'])->middleware('auth')->name('admin.detalle_entidad_obligacion');
    Route::post('/administrador/entidad_obligacion/modificar_entidad_obligacion', [ObligacionesEntidadController::class, 'modificar_entidad_obligacion'])->middleware('auth')->name('admin.modificar_entidad_obligacion');

    //Maestro de Socios por Camara
    Route::get('/administrador/camara/socios_camara', [CamaraSocioController::class, 'socios_camara'])->middleware('auth')->name('admin.socios_camara');
    Route::get('/administrador/obtener_listado_socios_por_camara', [CamaraSocioController::class, 'obtener_listado_socios_por_camara'])->middleware('auth')->name('admin.obtener_listado_socios_por_camara');
    Route::get('administrador/obtener_listado_socios_registros_camara', [CamaraSocioController::class, 'obtener_listado_socios_registros_camara'])->middleware('auth')->name('admin.obtener_listado_socios_registros_camara');
    Route::get('/administrador/socio/detalle/{id}', [CamaraSocioController::class, 'detalle_socio'])->middleware('auth')->name('admin.detalle_socio');
    Route::get('/administrador/socio_camara/detalle/{id}', [CamaraSocioController::class, 'detalle_socio_camara'])->middleware('auth')->name('admin.detalle_socio_camara');
    Route::post('/administrador/registrar_socio_camara', [CamaraSocioController::class, 'registrar_socio_camara'])->middleware('auth')->name('admin.registrar_socio_camara');
    Route::post('/administrador/socio_camara/eliminar/{id}', [CamaraSocioController::class, 'eliminar_socio_camara'])->middleware('auth')->name('admin.eliminar_socio_camara');;
    Route::post('/administrador/socio_camara/modificar_socio_camara', [CamaraSocioController::class, 'modificar_socio_camara'])->middleware('auth')->name('admin.modificar_socio_camara');

    //Reportes
    Route::get('/administrador/reportes/reporte_socios_camara', [ReportesController::class, 'reporte_socios_camara'])->middleware('auth')->name('admin.reporte_socios_camara');
    Route::get('/administrador/obtener_listado_socios_camaras', [ReportesController::class, 'obtener_listado_socios_camaras'])->middleware('auth')->name('admin.obtener_listado_socios_camaras');
    Route::get('/administrador/reportes/exportar_excel_socios_por_camara', [ReportesController::class, 'exportar_excel_socios_por_camara'])->middleware('auth')->name('admin.exportar_excel_socios_por_camara');
    Route::get('/administrador/reportes/exportar_pdf_socios_por_camara', [ReportesController::class, 'exportar_pdf_socios_por_camara'])->middleware('auth')->name('admin.exportar_pdf_socios_por_camara');
     
    //Manejo de Archivos de Obligaciones por Camara
    Route::get('/camara/archivos/archivos_obligaciones_camara', [ArchivoObligacionCamaraController::class, 'index'])->middleware('auth')->name('camara.archivos_obligaciones_camara');
    Route::post('/camara/archivos/guardar_archivo_camara', [ArchivoObligacionCamaraController::class, 'guardar_archivo_camara'])->name('camara.guardar_archivo_camara');

    //Manejo de Archivos de Obligaciones por Socio
    Route::get('/camara/archivos/archivos_obligaciones_socio', [ArchivoObligacionSocioController::class, 'index'])->middleware('auth')->name('camara.archivos_obligaciones_socio');
    
});

require __DIR__ . '/auth.php';
