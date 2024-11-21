<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB; /*Builder query.*/
use Carbon\Carbon;

class clienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get();
        return view('clientes', compact('clientes'));
    }

    /**
     * Nos redirige al formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * La usamos para ejecutar el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó el cliente: ' . $usuario);


        return redirect()->route('rutaclientes');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('cliente', compact('cliente'));
    }


    /**
     * Mostrar el formulario con los datos del cliente a editar
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        return view('clientes_editar', compact('cliente'));
    }

    /**
     * Actualizar los datos del cliente en la base de datos
     */
    public function update(Request $request, $id)
    {
        //Validaciones de datos de forms
        $request->validate([
            'txtnombre' => 'required|max:20',
            'txtapellido' => 'required|max:50',
            'txtcorreo' => 'required|email',
            'txttelefono' => 'required|numeric|digits:8',

        ]);

        //Actualizad datos de la BD
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => now(),
        ]);

        session()->flash('exito', 'Se actualizo el cliente ');

        //redirigir a la vista clientes
        return redirect()->route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        if (!$cliente) {
            session()->flash('error', 'El cliente no existe.');
            return redirect()->route('rutaclientes');
        }

        DB::table('clientes')->where('id', $id)->delete();

        session()->flash('exito', 'El cliente se ha eliminado correctamente');

        return redirect()->route('rutaclientes');
    }
}
