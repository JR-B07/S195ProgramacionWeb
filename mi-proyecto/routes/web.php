<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/*Route::get('/', function () {
    return view('welcome');
});
 */

/*  Route::view('/','bienvenido')->name('inicio.index');

 Route::view('/formulario','formulario')->name('formulario.index');

Route::view('/clientes', 'clientes')->name('clientes.index');

    shift + alt + a=comentar
 */ 

/* rutas para el trabajo con controlador + */

Route::get('/',[controladorVistas::class,'home'])->name('inicio.index');

Route::get('/formulario',[controladorVistas::class,'formulario'])->name('formulario.index');

Route::get('/clientes',[controladorVistas::class,'consulta'])->name('clientes.index');