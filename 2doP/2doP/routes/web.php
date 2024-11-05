<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ControladorFrituras;

Route::get('/', function () {
    return view('form');
});

Route::post('/guardar-firtura', [ControladorFrituras::class, 'guardarFritura'])->name('formFrituras');
