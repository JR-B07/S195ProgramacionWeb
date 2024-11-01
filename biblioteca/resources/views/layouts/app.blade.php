<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Biblioteca')</title>
    
    <!-- Bootstrap CSS y Alertify CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
    <!-- Archivo CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('Index') }}">Biblioteca</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">Registrar Libro</a>
                </li>
            </ul>
        </div>
    </nav>
    

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3">
        Biblioteca Central &copy; {{ date('Y') }}
    </footer>

    <!-- Archivos JavaScript de Bootstrap y Alertify -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- Archivo JavaScript personalizado -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
