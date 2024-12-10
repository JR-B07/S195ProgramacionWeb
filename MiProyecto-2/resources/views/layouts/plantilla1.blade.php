<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQp+7oI2cz7h5RSvl7kUAY0D8EFqBL2LfmIc5iOi7Ca7AsYyZDYKnPv1" crossorigin="anonymous">

    <!-- Enlace a tu archivo CSS si tienes personalizaciones -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliente.create') }}">Registro Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliente.index') }}">Consulta Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Contenido --}}
    <div class="container mt-4">
        @yield('contenido')
    </div>

    {{-- Scripts de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-QF0VKj4A4aB2D9C2KAJzWr9UujfuPYlAXu/5c/JbY0JbIN2AT+PRAXk/7HKaU4rQ" crossorigin="anonymous"></script>
</body>
</html>
