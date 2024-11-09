<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFrituras;

Route::get('/', function () {
    return view('formFrituras');
});

Route::get('/', [ControladorFrituras::class, 'abrirFormulario'])->name('formFrituras');
Route::post('/enviar', [ControladorFrituras::class, 'procesarFritura'])->name('procesar');
