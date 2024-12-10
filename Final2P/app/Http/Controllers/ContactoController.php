<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    private static $contactos = [];

    public function inicio()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function listadoContactos()
    {

        $contactos = session('contactos', []);
        return view('listadoContactos', compact('contactos'));
    }

    public function guardar(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|min:4',
            'correo' => 'required|email',
            'telefono' => 'required|min:9'
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.min' => 'El nombre debe tener al menos 4 caracteres',
            'correo.required' => 'El correo es obligatorio',
            'correo.email' => 'El formato del correo no es válido',
            'telefono.required' => 'El teléfono es obligatorio',
            'telefono.min' => 'El teléfono debe tener al menos 9 caracteres'
        ]);


        $contactos = session('contactos', []);


        $contactos[] = [
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono')
        ];


        session(['contactos' => $contactos]);

        return redirect('/listado')->with('success', 'Contacto agregado exitosamente');
    }
}
