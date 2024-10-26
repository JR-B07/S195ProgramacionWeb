<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes.index');
    }

    public function procesarCliente(validadorCliente $peticion)
    {
        // Capturar el nombre enviado desde el formulario
        $usuario = $peticion->input('nombre');

        // Almacenar el mensaje en la sesión (sin tilde en 'exito' para consistencia)
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);

        // Redirigir a la ruta nombrada 'formulario.index'
        return redirect()->route('formulario.index');

        // Alternativas de redirección que puedes usar si lo necesitas:
        // return redirect('/'); // Redirigir a una URL específica
        // return redirect()->route('rutaclientes'); // Redirigir a otra ruta nombrada
        // return back(); // Redirigir al origen de la solicitud
        // Redirección con valores de retorno (ejemplo comentado):
        // $id = [['usuario' => 1], ['usuario' => 2]];
        // return view('formulario', compact('id'));
    }
}
