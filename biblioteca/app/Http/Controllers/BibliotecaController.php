<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        return view('principal');
    }

    public function registro()
    {
        return view('registro');
    }

    public function guardarLibro(Request $request)
    {
        // Validaciones
        $request->validate([
            'isbn' => 'required|numeric|digits:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1000|max:' . date('Y'),
            'editorial' => 'required|string',
            'email_editorial' => 'required|email'
        ]);

        // Mensaje de confirmación
        return redirect()->route('registro')->with('message', 'Todo correcto: Libro “' . $request->titulo . '” guardado');
    }
}
