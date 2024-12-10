<!-- Modal Actualizar -->
<div class="modal fade" id="update{{ $cliente->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content fw-bold">
            <div class="modal-header">
                <h1 class="modal-title fs-4 fw-bold text-danger" id="staticBackdropLabel">Actualizar Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-primary">
                <form method="POST" action="{{ route('cliente.update', $cliente->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" value="{{ $cliente->apellido }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo:</label>
                        <input type="text" class="form-control" name="correo" value="{{ $cliente->correo }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono:</label>
                        <input type="number" class="form-control" name="telefono" value="{{ $cliente->telefono }}">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Actualizar Cliente</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-square"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Para Eliminar -->
<div class="modal fade" id="destroy{{ $cliente->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Eliminar Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('cliente.destroy', $cliente->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="text-danger fs-4 fw-semibold">
                        ¿Seguro que borraras al cliente {{ $cliente->nombre }} {{ $cliente->apellido }}?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Sí, bórralo</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, salir</button>
            </div>
        </div>
    </div>
</div>
