<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;


Route::get('/', [BibliotecaController::class, 'index'])->name('Index');

Route::get('/registro', [BibliotecaController::class, 'registro'])->name('registro');
Route::post('/guardar-libro', [BibliotecaController::class, 'guardarLibro'])->name('guardarLibro');
