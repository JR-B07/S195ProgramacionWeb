<?php


use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


//Rutas de clientecontroller
Route::get('/', [clienteController::class, 'home'])->name('inicio');

Route::get('/cliente/create', [clienteController::class, 'create'])->name('formulario');

Route::post('/cliente', [clienteController::class, 'store'])->name('procesar');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');
