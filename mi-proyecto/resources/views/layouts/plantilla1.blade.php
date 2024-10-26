<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title> @yield('titulo') </title>

</head>

<body>
    {{-- inicia navbar--}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio.index') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('formulario.index') }}">Registro Clientes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('clientes.index') }}">Consulta Clientes</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
     {{-- termina navbar--}}

@yield('contenido')

</body>
</html>