<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

// Rutas de vistas
Route::get('/', [controladorVistas::class, 'home'])->name('inicio.index');
Route::get('/formulario', [controladorVistas::class, 'formulario'])->name('formulario.index');

// Ruta para la consulta de clientes con ClienteController
Route::get('/clientes', [ClienteController::class, 'consulta'])->name('clientes.index');

Route::match(['get', 'post'], '/enviar', [controladorVistas::class, 'procesarCliente'])->name('procesar');
