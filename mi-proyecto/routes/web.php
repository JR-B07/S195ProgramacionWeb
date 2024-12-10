<?php


use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


//Rutas de clientecontroller
Route::get('/', [clienteController::class, 'home'])->name('inicio');

Route::get('/cliente/create', [clienteController::class, 'create'])->name('formulario');

Route::post('/cliente', [clienteController::class, 'store'])->name('procesar');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');

Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('clientes_editar');

Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('actualizar');

Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('eliminar');