<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFritura;

class ControladorFrituras extends Controller
{

    public function abrirFormulario()
    {
        return view('formFrituras');
    }

    public function procesarFritura(validadorFritura $peticion)
    {
        $fritura = $peticion->input('nombre');

        session()->flash('exito', 'Se guardó la fritura: ' . $fritura);

        return redirect()->route('formFrituras');
    }
}
