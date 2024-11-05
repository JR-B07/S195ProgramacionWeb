<!DOCTYPE html>
<html lang="en">

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


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormularioFrituras</title>

</head>

<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form>

         <div class="field-container">
            <label for="Nombre" class="form-label">{{ __('Frituras.Nombre') }}</label>
            <input type="Nombre" 
                   name="Nombre" 
                   class="form-control @error('Nombre_') is-invalid @enderror" 
                   id="Nombre" 
                   value="{{ old('Nombre') }}"
                   required>
            @error('Nombre')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('Frituras.validation.Nombre_required') }}
                </span>
            @enderror
        </div>

          
        <div class="field-container">
            <label for="Sabor" class="form-label">{{ __('Friuras.Sabor') }}</label>
            <input type="Sabor" 
                   name="Sabor" 
                   class="form-control @error('Sabor_') is-invalid @enderror" 
                   id="Sabor" 
                   value="{{ old('Sabor') }}"
                   required>
            @error('Sabor')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('Frituras.validation.Sabor_required') }}
                </span>
            @enderror
        </div>
           
   
        <div class="field-container">
            <label for="Peso_" class="form-label">{{ __('') }}</label>
            <input type="Peso" 
                   name="Peso_" 
                   class="form-control @error('Peso_') is-invalid @enderror" 
                   id="Peso_" 
                   value="{{ old('Peso_') }}"
                   required>
            @error('Peso_')
                <span class="invalid-feedback error-text" role="alert">
                    {{ __('Frituras.validation.Peso_required') }}
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('libros.register') }}</button>
    </form>

    <div class="alertify-container" id="alertify-container"></div>
@endsection

        <button type="submit" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>


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
</html>