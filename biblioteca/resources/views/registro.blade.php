@extends('layouts.app')
@section('title', 'Registro de Libro')

@section('styles')
<style>
    .field-container {
        margin-bottom: 1rem;
    }
    /* Estilo específico para el mensaje de Bootstrap */
    .form-control:invalid ~ .invalid-feedback,
    .form-control:invalid ~ .invalid-tooltip,
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip,
    .error-text {
        color: #FF0000 !important;
        font-size: 0.875rem;
        margin-top: 4px;
        display: block;
    }
    /* Asegurarse que el mensaje sea visible */
    .invalid-feedback {
        display: block !important;
        color: #FF0000 !important;
    }
</style>
@endsection

@section('content')
    <h2>Registrar un nuevo libro</h2>
    
    <form action="{{ route('guardarLibro') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="field-container">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" 
                   name="isbn" 
                   class="form-control @error('isbn') is-invalid @enderror" 
                   id="isbn" 
                   value="{{ old('isbn') }}"
                   required>
            @error('isbn')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="field-container">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" 
                   name="titulo" 
                   class="form-control @error('titulo') is-invalid @enderror" 
                   id="titulo" 
                   value="{{ old('titulo') }}"
                   required>
            @error('titulo')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="field-container">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" 
                   name="autor" 
                   class="form-control @error('autor') is-invalid @enderror" 
                   id="autor" 
                   value="{{ old('autor') }}"
                   required>
            @error('autor')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="field-container">
            <label for="paginas" class="form-label">Páginas</label>
            <input type="number" 
                   name="paginas" 
                   class="form-control @error('paginas') is-invalid @enderror" 
                   id="paginas" 
                   value="{{ old('paginas') }}"
                   required>
            @error('paginas')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="field-container">
            <label for="anio" class="form-label">Año</label>
            <input type="number" 
                   name="anio" 
                   class="form-control @error('anio') is-invalid @enderror" 
                   id="anio" 
                   value="{{ old('anio') }}"
                   required>
            @error('anio')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="field-container">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" 
                   name="editorial" 
                   class="form-control @error('editorial') is-invalid @enderror" 
                   id="editorial" 
                   value="{{ old('editorial') }}"
                   required>
            @error('editorial')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="field-container">
            <label for="email_editorial" class="form-label">Email de la Editorial</label>
            <input type="email" 
                   name="email_editorial" 
                   class="form-control @error('email_editorial') is-invalid @enderror" 
                   id="email_editorial" 
                   value="{{ old('email_editorial') }}"
                   required>
            @error('email_editorial')
                <span class="invalid-feedback error-text" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrar Libro</button>
    </form>

    <div class="alertify-container" id="alertify-container"></div>
@endsection

@if(session('message'))
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alertify.set('notifier','position', 'bottom-center');
            alertify.success("{{ session('message') }}");
        });
    </script>
    @endpush
@endif