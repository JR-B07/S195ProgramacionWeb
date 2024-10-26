@extends('layouts.plantilla1')

@section('titulo','Formulario')

@section('contenido')
    
{{-- Inicia tarjeta --}}

<div class="container mt-5">

    {{-- Mostrar mensajes de éxito --}}
    @if (session('exito'))
        <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif
    
    <div class="card">
        <div class="card-header">
            <h3>Registro de Clientes</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('procesar') }}" method="POST">  {{-- Usar la ruta nombrada --}}
                @csrf  {{-- Protección contra CSRF --}}
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}">
                    @error('apellido')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                    @error('telefono')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Registrar Cliente</button>
            </form>
        </div>
    </div>
</div>  

{{-- Finaliza tarjeta --}}

@endsection
