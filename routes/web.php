<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\AccidenteController;
use App\Http\Controllers\IncidenteController;

use App\Http\Controllers\InformesController;
use App\Http\Controllers\EstadisticasController;

use App\Http\Controllers\ReportePDFController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/call', [AccidenteController::class, 'fetchEmployee']);

Route::resource('registroAccidente', AccidenteController::class);
Route::resource('registroIncidente', IncidenteController::class);

Route::resource('informes', InformesController::class);
Route::resource('estadisticas', EstadisticasController::class);

// GENERAR REPORTE
Route::get('/generarReporteAccidente/PDF/{id}', [ReportePDFController::class, 'generarReporteAccidente']);
Route::get('/generarReporteIncidente/PDF/{id}', [ReportePDFController::class, 'generarReporteIncidente']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
