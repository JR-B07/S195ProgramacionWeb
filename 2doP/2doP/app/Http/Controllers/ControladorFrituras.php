<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFritura;
use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{

    public function abrirFormulario()
    {
        return view('formFrituras');
    }

    public function procesarFritura(validadorFritura $peticion)
    {

        $fritura = $peticion->input('nombre');

        session()->flash('exito', 'Se guardo la fritura: ' . $fritura);

        return redirect()->route('formFrituras');
    }
}
