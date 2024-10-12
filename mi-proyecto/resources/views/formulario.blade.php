
@extends('layouts.plantilla1')

    @section('titulo','Formulario')

    @section('contenido')
        
    {{--inicia tarjeta--}}

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Registro de Clientes</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('clientes.index') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                </form>
            </div>
        </div>
    </div>  {{--finaliza tarjeta--}}

    @endsection
 