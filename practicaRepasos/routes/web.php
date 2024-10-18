<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\ConversorController;

Route::get('/',[VistasController::class,'inicio'])->name('inicio');
Route::get('/repaso1', [ConversorController::class, 'conversion'])->name('repaso1');
Route::post('/convertir', [ConversorController::class, 'convertir'])->name('convertido');