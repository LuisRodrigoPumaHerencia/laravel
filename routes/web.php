<?php

use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;

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

//NAGEGACIONES
Route::get('/docentes', [DocenteController::class, 'docentes'])->name('docentes');


Route::get('/docentes/docente-registro', [DocenteController::class, 'docente_registro'])->name('docente-registro');


Route::get('docentes/docente-actualizacion/{id}', [DocenteController::class, 'docente_actualizacion'])->name('docente-actualizacion');

//ACCIONES
Route::post('registrar-docente', [DocenteController::class, 'registrar'])->name('registrar-docente');


Route::put('actualizar-docente', [DocenteController::class, 'actualizar'])->name('actualizar-docente');


Route::delete('eliminar-docente/{docente}', [DocenteController::class, 'eliminar'])->name('eliminar-docente');

//SERVICIOS RESTFULL
Route::get('/lista-docentes', [DocenteController::class, 'listar_docentes_api'])->name('lista-docentes');
