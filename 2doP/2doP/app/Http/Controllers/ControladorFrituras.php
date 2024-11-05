<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fritura;

class ControladorFrituras extends Controller
{
    public function abrirFormulario(Request $request)
    {

        $request->validate([
            'Nombre' => 'required|string|max:20',
            'Sabor' => 'required|string|max:20',
            'Peso' => 'required|numeric|min:1',

        ]);


        $fritura = new Fritura();
        $fritura->Nombre = $request->Nombre;
        $fritura->Nombre = $request->Sabor;
        $fritura->Nombre = $request->Peso;
        $fritura->save();


        return redirect()->route('formFrituras')->with('message', 'La fritura“' . $request->Nombre . '” se ha guardado');
    }
}
