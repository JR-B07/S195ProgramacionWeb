<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', [ContactoController::class, 'inicio']);
Route::get('/formulario', [ContactoController::class, 'formulario']);
Route::get('/listado', [ContactoController::class, 'listadoContactos']);
Route::post('/formulario', [ContactoController::class, 'guardar']);