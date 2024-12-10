@extends('layouts.plantilla1')

@section('titulo', 'Listado de Clientes')

@section('contenido')
    {{-- Mostrar mensajes de éxito o error --}}
    @if (session('exito') || session('error'))
        <div class="alert {{ session('exito') ? 'alert-success' : 'alert-danger' }}">
            {{ session('exito') ?? session('error') }}
        </div>
    @endif

    <h1>Listado de Clientes</h1>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consulta as $cliente)
                    <tr>
                        <td>{{ $cliente->nombre }} {{ $cliente->apellido }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <td>
                                    <div class="btn-group" role="group">
                                        {{-- Botón para redirigir a la vista de editar --}}
                                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </a>

                                        {{-- Botón para eliminar con confirmación --}}
                                        <button type="button" class="btn btn-danger" onclick="confirmarEliminacion({{ $cliente->id }})">
                                            <i class="bi bi-trash"></i> Borrar
                                        </button>
                                    </div>
                                </td>
                            </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('cliente.create') }}" class="btn btn-success">
        <i class="bi bi-plus"></i> Nuevo Cliente
    </a>

    {{-- Script para confirmación de eliminación --}}
    <script>
        function confirmarEliminacion(clienteId) {
            if (confirm('¿Estás seguro de que deseas eliminar este cliente?')) {
                document.getElementById(`delete-form-${clienteId}`).submit();
            }
        }
    </script>

    {{-- Formularios de eliminación ocultos --}}
    @foreach($consulta as $cliente)
        <form id="delete-form-{{ $cliente->id }}" action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
@endsection
