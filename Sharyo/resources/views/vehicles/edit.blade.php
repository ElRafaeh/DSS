@extends('plantillaBase')

@section('contenido')
<div class="container">
    <!-- Formulario para editar vehiculos en la base de datos -->
    <form action="{{ url("vehicles/edit/$vehicle->plateNumber") }}" method="POST">
        @method('PUT')
        @csrf
        
        <fieldset disabled>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Matrícula</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $vehicle->plateNumber }}">
            </div>
        </fieldset>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" class="form-control" required name="model" value="{{ $vehicle->model }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   
</div>
@endsection