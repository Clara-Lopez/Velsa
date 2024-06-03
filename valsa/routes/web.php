<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\CobroController;
use App\Http\Controllers\ElectrodomesticoController;
use App\Http\Controllers\CierreCajaController;

Route::resource('clientes', ClienteController::class);
Route::resource('roles', RolController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('prestamos', PrestamoController::class);
Route::resource('cobros', CobroController::class);
Route::resource('electrodomesticos', ElectrodomesticoController::class);
Route::resource('cierre_cajas', CierreCajaController::class);


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

Route::get('/', function () {
    return view('welcome');
});
