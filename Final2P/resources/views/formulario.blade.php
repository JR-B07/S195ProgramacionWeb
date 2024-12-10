@extends('layouts.plantillaNav')

@section('titulo', 'Gestión de Contactos')

@section('contenido')
<div class="container">
    <h1 class="titulo-pagina text-center">Gestión de Contactos</h1>
    
    <form action="/formulario" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" class="form-control" name="correo" value="{{ old('correo') }}">
            @error('correo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
            @error('telefono')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>
</div>
@endsection