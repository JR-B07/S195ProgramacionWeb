<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function principal()
    {
        return view('principal');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function listadoContactos()
    {
        return view('listadoContactos');
    }
}
