<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\OperadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Rutas para los Operadores
Route::get('/operadores',[OperadorController::class,'index']);
Route::post('/operadores',[OperadorController::class,'store']);

// Rutas para los Equipos
Route::get('/equipos',[EquipoController::class,'index']);
Route::post('/equipos',[EquipoController::class,'store']);
