@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

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

    <div class="card text-justify font-monospace mt-3">
        <!-- Muestra todos los clientes en formato de tarjeta -->
        @foreach ($clientes as $cliente)
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
            </div>
        @endforeach
    </div>
</div>
@endsection