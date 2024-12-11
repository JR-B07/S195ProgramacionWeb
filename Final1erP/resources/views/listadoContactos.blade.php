@extends('layouts.plantilla')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="titulo-pagina text-center mb-4">Listado de Contactos</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <a href="{{ route('form') }}" class="btn btn-secondary me-2">Regresar al Formulario</a>
            <a href="{{ route('index') }}" class="btn btn-primary">Regresar al Inicio</a>
        </div>
    </div>
</div>
@endsection