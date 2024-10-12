@extends('layouts.plantilla1')

    @section('titulo','Clientes')

    @section('contenido')
    
    <div class="container">
        <h1 class="my-4">Lista de Clientes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    @endsection
 