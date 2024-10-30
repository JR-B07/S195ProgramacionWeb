<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;

Route::get('/', function () {
    return view('Index');
});

Route::get('/', [BibliotecaController::class, 'Index'])->name('Index');
Route::get('/registro', [BibliotecaController::class, 'registro'])->name('registro');
Route::post('/registro', [BibliotecaController::class, 'guardarLibro'])->name('guardarLibro');
