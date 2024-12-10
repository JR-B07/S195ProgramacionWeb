<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('cliente', ClienteController::class);
