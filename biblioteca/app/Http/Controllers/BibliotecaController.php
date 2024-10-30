<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        return view('Index');
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

        // Guardar el libro en la base de datos
        $libro = new Libro();
        $libro->isbn = $request->isbn;
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->paginas = $request->paginas;
        $libro->anio = $request->anio;
        $libro->editorial = $request->editorial;
        $libro->email_editorial = $request->email_editorial;
        $libro->save();

        // Mensaje de confirmación
        return redirect()->route('registro')->with('message', 'Todo correcto: Libro “' . $request->titulo . '” guardado');
    }
}
