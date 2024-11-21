@extends('layouts.plantilla1')

@section('titulo', 'Listado de Clientes')

@section('contenido')
<div class="container mt-5 col-md-8">
  
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

<form action="{{ route('actualizar', $cliente->id) }}" method="POST" class="form">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label for="txtnombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control @error('txtnombre') is-invalid @enderror" 
                name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}">
            @error('txtnombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control @error('txtapellido') is-invalid @enderror" 
                name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}">
            @error('txtapellido')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">Correo:</label>
            <input type="email" class="form-control @error('txtcorreo') is-invalid @enderror" 
                name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}">
            @error('txtcorreo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="txttelefono" class="form-label">Teléfono:</label>
            <input type="tel" class="form-control @error('txttelefono') is-invalid @enderror" 
                name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}">
            @error('txttelefono')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
    </form>
    

@endsection