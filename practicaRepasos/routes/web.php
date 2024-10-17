<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;

Route::get('/',[VistasController::class,'inicio'])->name('inicio');

Route::get('/repaso1',[VistasController::class,'repaso1'])->name('repaso1');