<?php

use App\Http\Controllers\ControladorFrituras;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('form');
});


Route::get('/', [ControladorFrituras::class, 'abrirFormulario'])->name('fromFrituras');
Route::post('/enviar', [ControladorFrituras::class, 'procesarFritura'])->name('formFrituras');
