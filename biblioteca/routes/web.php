<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\LanguageController;


Route::get('/', [BibliotecaController::class, 'index'])->name('Index');

Route::get('/registro', [BibliotecaController::class, 'registro'])->name('registro');
Route::post('/guardar-libro', [BibliotecaController::class, 'guardarLibro'])->name('guardarLibro');

Route::get('/language/{lang}', [LanguageController::class, 'changeLanguage'])->name('language.change');
