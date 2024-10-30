@extends('layouts.app')
@section('title', 'Registro de Libro')
@section('content')
    <h2>Registrar un nuevo libro</h2>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" required>
        </div>
        <div class="form-group">
            <label for="paginas">Páginas</label>
            <input type="number" class="form-control" name="paginas" required>
        </div>
        <div class="form-group">
            <label for="anio">Año</label>
            <input type="number" class="form-control" name="anio" required>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" name="editorial" required>
        </div>
        <div class="form-group">
            <label for="email_editorial">Email de la Editorial</label>
            <input type="email" class="form-control" name="email_editorial" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Registrar Libro</button>
    </form>
@endsection
@push('scripts')
<script>
    @if(session('message'))
        alertify.success("{{ session('message') }}");
    @endif
</script>
@endpush
