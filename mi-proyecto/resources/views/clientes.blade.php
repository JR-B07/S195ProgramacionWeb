@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenido')

<div class="container">
    <h1 class="my-4">Lista de Clientes</h1>

    @if ($clientes->isEmpty())
        <p>No hay clientes registrados.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->apellido }}</td>
                    <td>{{ $cliente->correo }}</td>
                    <td>{{ $cliente->telefono }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

@endsection
