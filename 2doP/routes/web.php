<?php

use App\Http\Controllers\ControladorFrituras;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('formFrituras');
});

Route::get('/', [ControladorFrituras::class, 'abrirFormulario'])->name('formFrituras');

Route::post('/procesar', [ControladorFrituras::class, 'procesar'])->name('procesarFritura');