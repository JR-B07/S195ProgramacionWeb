@extends('layouts.plantilla1')

@section('titulo', 'Listado de Clientes')

@section('contenido')
<div class="container mt-5 col-md-8">
    {{-- Mostrar mensajes de éxito --}}
    @if (session('exito'))
        <div class="alert alert-success">
            {{ session('exito') }}
        </div>
        <script>
            Swal.fire({
                title: "Éxito",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    {{-- Mostrar mensajes de error --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        <script>
            Swal.fire({
                title: "Error",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif

    <div class="card">
        <div class="card-header">
            <h3>Listado de Clientes</h3>
        </div>
        <div class="card-body">
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
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }} {{ $cliente->apellido }}</td>
                            <td>{{ $cliente->correo }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>
                                {{-- Botón Editar --}}
                                <a href="{{ route('clientes_editar', $cliente->id) }}" class="btn btn-primary">
                                    Editar
                                </a>

                                {{-- Botón Eliminar --}}
                                <form action="{{ route('eliminar', $cliente->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
