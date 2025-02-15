<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 
//Route::middleware('auth:sanctum')->group(function () {
    Route::get('/get-socios', [SocioController::class, 'get_socios']);
    
//});

Route::middleware('api')->group(function () {
    Route::post('/formulario-solicitud-ingreso', [SocioController::class, 'formulario_ingreso']);  
    Route::post('/estado-solicitud', [SocioController::class, 'estado_solicitud']);  
});