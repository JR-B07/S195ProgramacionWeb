@extends('layouts.app')
@section('title', __('libros.register'))

@section('styles')
<style>
    .field-container {
        margin-bottom: 1rem;
    }
    .error-text {
        color: #FF0000 !important;
        font-size: 0.875rem;
        margin-top: 4px;
        display: block;
    }
</style>
@endsection

@section('content')
    <!-- Botones de cambio de idioma -->
    <a href="{{ route('language.change', 'es') }}" class="btn btn-primary">Español</a>
    <a href="{{ route('language.change', 'en') }}" class="btn btn-secondary">English</a>


    <h2>{{ __('Registro de Libros') }}</h2>
    
    <form action="{{ route('guardarLibro') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        
        <!-- ISBN -->
        <div class="field-container">
            <label for="isbn" class="form-label">{{ __('libros.isbn') }}</label>
            <input type="text" 
                   name="isbn" 
                   class="form-control @error('isbn') is-invalid @enderror" 
                   id="isbn" 
                   value="{{ old('isbn') }}"
                   required>
            @error('isbn')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.isbn_required') }}
                </span>
            @enderror
        </div>

        <!-- Título -->
        <div class="field-container">
            <label for="titulo" class="form-label">{{ __('libros.title') }}</label>
            <input type="text" 
                   name="titulo" 
                   class="form-control @error('titulo') is-invalid @enderror" 
                   id="titulo" 
                   value="{{ old('titulo') }}"
                   required>
            @error('titulo')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.title_required') }}
                </span>
            @enderror
        </div>

        <!-- Autor -->
        <div class="field-container">
            <label for="autor" class="form-label">{{ __('libros.author') }}</label>
            <input type="text" 
                   name="autor" 
                   class="form-control @error('autor') is-invalid @enderror" 
                   id="autor" 
                   value="{{ old('autor') }}"
                   required>
            @error('autor')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.author_required') }}
                </span>
            @enderror
        </div>

        <!-- Páginas -->
        <div class="field-container">
            <label for="paginas" class="form-label">{{ __('libros.pages') }}</label>
            <input type="number" 
                   name="paginas" 
                   class="form-control @error('paginas') is-invalid @enderror" 
                   id="paginas" 
                   value="{{ old('paginas') }}"
                   required>
            @error('paginas')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.pages_required') }}
                </span>
            @enderror
        </div>

        <!-- Año -->
        <div class="field-container">
            <label for="anio" class="form-label">{{ __('libros.year') }}</label>
            <input type="number" 
                   name="anio" 
                   class="form-control @error('anio') is-invalid @enderror" 
                   id="anio" 
                   value="{{ old('anio') }}"
                   required>
            @error('anio')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.year_required') }}
                </span>
            @enderror
        </div>

        <!-- Editorial -->
        <div class="field-container">
            <label for="editorial" class="form-label">{{ __('libros.publisher') }}</label>
            <input type="text" 
                   name="editorial" 
                   class="form-control @error('editorial') is-invalid @enderror" 
                   id="editorial" 
                   value="{{ old('editorial') }}"
                   required>
            @error('editorial')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.publisher_required') }}
                </span>
            @enderror
        </div>

        <!-- Email de la Editorial -->
        <div class="field-container">
            <label for="email_editorial" class="form-label">{{ __('libros.publisher_email') }}</label>
            <input type="email" 
                   name="email_editorial" 
                   class="form-control @error('email_editorial') is-invalid @enderror" 
                   id="email_editorial" 
                   value="{{ old('email_editorial') }}"
                   required>
            @error('email_editorial')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('libros.validation.email_required') }}
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('libros.register') }}</button>
    </form>

    <div class="alertify-container" id="alertify-container"></div>
@endsection

@if(session('message'))
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alertify.set('notifier','position', 'bottom-center');
            alertify.success("{{ __('LIBRO GUARDADO') }}");
        });
    </script>
    @endpush
@endif

@if(session('error'))
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alertify.set('notifier','position', 'bottom-center');
            alertify.error("{{ __('alertify.error') }}");
        });
    </script>
    @endpush
@endif
