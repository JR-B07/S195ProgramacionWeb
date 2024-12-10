@extends('layouts.plantillaNav')

@section('titulo', 'Lista de Contactos')

@section('contenido')
<div class="container">
    <h1 class="titulo-pagina text-center">Listado de Contactos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contactos as $contacto)
                <tr>
                    <td>{{ $contacto['nombre'] }}</td>
                    <td>{{ $contacto['correo'] }}</td>
                    <td>{{ $contacto['telefono'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No hay contactos registrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection