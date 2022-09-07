<?php

use App\Http\Controllers\ejercicio;
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

// ruta de composer
Route::get('/',[ejercicio::class,'composer']);
// ruta de nuevo proyecto
Route::get('/nuevoProyecto',[ejercicio::class,'nuevoProject']);
// ruta de vista, rutas y controladores
Route::get('/vrc',[ejercicio::class,'vrc']);
// ruta de imagenes
Route::get('/imagen',[ejercicio::class,'imagenes']);
// ruta de enviar informaccion desde controlador
Route::get('/enviaInfo',[ejercicio::class,'enviaInfo']);
// ruta de los parametros
Route::get('/parametros',[ejercicio::class,'parametros']);