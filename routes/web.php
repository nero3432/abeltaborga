<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta para la página principal
Route::get('/', function () {
    return view('welcome');  // O cualquier vista que quieras mostrar en la raíz
});

// Ruta para las pacientes
Route::get('pacientes', [PacientesController::class, 'index'])->name('pacientes.index');
Route::get('pacientes/create', [PacientesController::class, 'create'])->name('pacientes.create');
Route::post('pacientes', [PacientesController::class, 'store'])->name('pacientes.store');
Route::get('pacientes/{pacientes}/edit', [PacientesController::class, 'edit'])->name('pacientes.edit');
Route::put('pacientes/{paciente}', [PacientesController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{pacientes}', [PacientesController::class, 'destroy'])->name('pacientes.destroy');