<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', [ContactoController::class, 'principal'])->name('index');
Route::get('/formulario', [ContactoController::class, 'formulario'])->name('form');
Route::get('/listado', [ContactoController::class, 'listadoContactos'])->name('list');
