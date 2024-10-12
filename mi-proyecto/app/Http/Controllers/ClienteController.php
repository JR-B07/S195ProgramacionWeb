<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
     
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|numeric',
        ]);

        return redirect()->back()->with('success', 'Cliente registrado con éxito.');
    }
}
