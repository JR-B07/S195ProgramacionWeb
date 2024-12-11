@extends('layouts.plantilla')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 class="titulo-pagina text-center mb-4">Inicio de Sesión</h1>
        
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="correo" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="telefono" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-danger">Agregar Contacto</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('form') }}" class="btn btn-primary">Ir al Formulario</a>
        </div>
    </div>
</div>
@endsection