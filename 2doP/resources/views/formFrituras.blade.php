<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>FormFrituras</title>


</head>
@if (session('exito'))
    <x-Alert tipo="success"> {{session('exito') }} </x-Alert>
    <script>
        Swal.fire({
            title: "Respuesta del Sistema",
            text: "{{ session('exito') }}",
            icon: "success"
        });
    </script>
@endif

<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form action="{{route('procesarFritura') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <small class="text-danger fst-italic">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sabor" class="form-label">Sabor(s): </label>
            <input type="text" class="form-control" id="sabor" name="sabor" value="{{ old('sabor') }}">
            @error('sabor')
                <small class="text-danger fst-italic">{{ $message}} </small>
            @enderror
        </div>                

        <div class="mb-3">
            <label for="peso" class="form-label">peso: </label>
            <input type="numeric" class="form-control" id="peso" name="peso" value="{{ old('peso')}}">
            @error('peso')
                <small class="text-danger fst-italic"> {{ $message }}</small>
            @enderror
        </div>

        <button type="" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>