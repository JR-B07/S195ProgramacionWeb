<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Muestra una lista de todos los clientes.
     */

    public function index()
    {
        // Paginación con 10 clientes por página
        $consulta = Cliente::paginate(10);
        return view('clientes.index', compact('consulta'));
    }



    /**
     * Muestra el formulario para crear un nuevo cliente.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Almacena un nuevo cliente en la base de datos.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $validated = $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|max:255|unique:clientes,correo',
            'txttelefono' => 'required|string|max:15',
        ]);

        // Crear cliente con Eloquent
        Cliente::create([
            'nombre' => $validated['txtnombre'],
            'apellido' => $validated['txtapellido'],
            'correo' => $validated['txtcorreo'],
            'telefono' => $validated['txttelefono'],
        ]);

        // Mensaje de éxito y redirección
        return redirect()->route('clientes.index')
            ->with('exito', 'Cliente registrado exitosamente.');
    }


    // Otros métodos como edit(), update(), destroy() quedan vacíos por ahora.

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Obtén el cliente a actualizar
        $cliente = Cliente::findOrFail($id);

        // Retorna la vista y pasa el cliente
        return view('clientes.edit', compact('cliente'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:20',
        ]);

        $cliente->update([
            'nombre' => $request->txtnombre,
            'apellido' => $request->txtapellido,
            'correo' => $request->txtcorreo,
            'telefono' => $request->txttelefono,
        ]);

        return redirect()->route('cliente.index')->with('exito', 'Cliente actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */


    public function destroy($id)
    {
        // Eliminar el registro directamente usando Query Builder
        DB::table('clientes')->where('id', $id)->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('cliente.index')->with('exito', 'Cliente eliminado correctamente');
    }
}
