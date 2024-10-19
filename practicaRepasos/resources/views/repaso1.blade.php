<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Conversor de Unidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Conversor de Unidades de Almacenamiento</h4>
                    </div>
                    <div class="card-body">
                        <form id="conversorForm" action="{{ route('convertido') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor a convertir:</label>
                                <input type="number" class="form-control" id="valor" name="valor" required min="0" step="any">
                            </div>
                            
                            <div class="mb-3">
                                <label for="conversion" class="form-label">Tipo de conversión:</label>
                                <select class="form-select" id="conversion" name="conversion" required>
                                    <option value="">Selecciona una conversión</option>
                                    <option value="MB_to_GB">MB a GB</option>
                                    <option value="GB_to_MB">GB a MB</option>
                                    <option value="GB_to_TB">GB a TB</option>
                                    <option value="TB_to_GB">TB a GB</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Convertir</button>
                        </form>

                        <div class="mt-4">
                            <h5>Resultado:</h5>
                            <div id="resultado" class="alert alert-info d-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('conversorForm').addEventListener('submit', function(e) {
            e.preventDefault(); //envío del formulario 
            
            const formData = new FormData(this);  //captura todos los datos del formulario
            
            fetch('{{ route("convertido") }}', { //url ruta
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', //solicitud AJAX
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content //validacion de solicitud
                },
                body: formData //Datos del formulario enviados al server
            })
            .then(response => {
                if (!response.ok) { //verifica si la respuesta fue exitosa
                    throw new Error('Error en la respuesta de la red'); 
                }
                return response.json();
            })
            .then(data => {
                const resultadoDiv = document.getElementById('resultado'); //verifica si la respuesta fue exitosa
                resultadoDiv.textContent = data.resultado || 'Conversión no válida';
                resultadoDiv.classList.remove('d-none', 'alert-danger'); //envio de alertas
                resultadoDiv.classList.add('alert-info'); //informacion de alerta
            })
            .catch(error => {
                console.error('Error:', error); // Maneja cualquier error en la solicitud
                const resultadoDiv = document.getElementById('resultado'); //imprime el error en la consola
                resultadoDiv.textContent = 'Error al procesar la conversión. Inténtalo de nuevo más tarde.'; //Muestra un mensaje de error
                resultadoDiv.classList.remove('d-none', 'alert-info');
                resultadoDiv.classList.add('alert-danger');
            });
        });
    </script>
</body>
</html>
