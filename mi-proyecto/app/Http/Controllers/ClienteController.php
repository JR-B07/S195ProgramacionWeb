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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
