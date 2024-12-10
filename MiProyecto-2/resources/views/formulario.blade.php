@extends('layouts.plantilla1')

@section('titulo', 'Formulario de Clientes')

@section('contenido')
<div class="container mt-4">
    <div class="card col-md-6 mx-auto">
        <div class="card-header text-center">Actualizar Cliente</div>
        <div class="card-body">
            {{-- Mensajes de éxito y error --}}
            @if (session('exito'))
            <div class="alert alert-success">{{ session('exito') }}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT') {{-- Cambiado de POST a PUT --}}

                <div class="mb-3">
                    <label for="txtnombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre ?? old('txtnombre') }}">
                </div>
                <div class="mb-3">
                    <label for="txtapellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido ?? old('txtapellido') }}">
                </div>
                <div class="mb-3">
                    <label for="txtcorreo" class="form-label">Correo:</label>
                    <input type="email" class="form-control" name="txtcorreo" value="{{ $cliente->correo ?? old('txtcorreo') }}">
                </div>
                <div class="mb-3">
                    <label for="txttelefono" class="form-label">Teléfono:</label>
                    <input type="tel" class="form-control" name="txttelefono" value="{{ $cliente->telefono ?? old('txttelefono') }}">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
