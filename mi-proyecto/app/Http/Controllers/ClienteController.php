<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    // Método para mostrar el formulario
    public function create()
    {
        return view('clientes.index');
    }

    // Método para procesar el formulario
    public function store(validadorCliente $request)
    {
        Cliente::create($request->all());

        return redirect()->back()->with('exito', 'Cliente registrado con éxito.');
    }
}
