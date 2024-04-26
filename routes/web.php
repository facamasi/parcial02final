<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VehiculoController;

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

//RUTAS CLIENTES

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::delete('/cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
Route::put('/cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/{cliente}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');

//RUTAS VEHICULOS

Route::get('/vehiculo', [VehiculoController::class, 'index'])->name('vehiculo.index');
Route::post('/vehiculo', [VehiculoController::class, 'store'])->name('vehiculo.store');
Route::get('/vehiculo/create', [VehiculoController::class, 'create'])->name('vehiculo.create');
Route::delete('/vehiculo/{vehiculo}', [VehiculoController::class, 'destroy'])->name('vehiculo.destroy');
Route::put('/vehiculo/{vehiculo}', [VehiculoController::class, 'update'])->name('vehiculo.update');
Route::get('/vehiculo/{vehiculo}/edit', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
