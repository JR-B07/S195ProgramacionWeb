<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Diseño UPQ</title>
    <!-- Enlace de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Estilo personalizado */
    .container-custom {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8f9fa;
    }
    .logo-section {
        border-right: 2px solid #e67e22;
        padding-right: 20px;
        margin-right: 20px;
    }
    .details-section {
        color: #34495e;
    }
    .details-section h1,
    .details-section h2,
    .details-section p {
        margin: 0;
    }
    .details-section h1 {
        font-size: 2.5rem; /* Ajuste de tamaño para el primer renglón */
    }
    .details-section h2 {
        font-size: 2.2rem; /* Ajuste de tamaño para acercarlo al tamaño de h1 */
        font-weight: bold;
    }
    .details-section h3{
        color: #e67e22; /* Color del separador naranja */
    }
</style>
</head>
<body>
    <div class="container-custom">
        <div class="logo-section">
            <img src="https://api.encuentraescuela.com.mx/storage/app/logos/1575402099_9561LOGO_UPQ-01.png" alt="Logotipo UPQ" class="img-fluid" style="max-width: 300px;">
        </div>
        <div class="details-section">
            <h1>UNIVERSIDAD POLITÉCNICA DE QUERÉTARO</h1>
            <h2>ING. EN SISTEMAS COMPUTACIONALES</h2>
            <h3 class="highlight">GRUPO S-195</h3>
            <h2>PROGRAMACIÓN WEB</h2>
            <h2>JOSE RICARDO BECERRA COVARRUBIAS</h2>
            <a href="{{ route('repaso1') }}" class="btn btn-primary btn-lg mt-3">REPASO1</a>
        </div>
    </div>

    <!-- Enlace de Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
