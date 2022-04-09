@extends('plantillaBase')

@section('contenido')
<div class="container">
<div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <!-- Formulario para editar drivers en la base de datos -->
    <form action="{{ url("drivers/edit/$driver->nif") }}" method="POST">
        @method('PUT')
        @csrf
        
        <fieldset disabled>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">NIF</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $driver->nif }}">
            </div>
        </fieldset>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $driver->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Experiencia</label>
            <input type="text" class="form-control" name="experience" value="{{ $driver->experience }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Vehículo</label>
            <select name="vehicle_id" class="form-select" required>
                <option selected>Elija un vehículo</option>
                
                @foreach ($vehicles as $vehicle)
                    <option value="{{ $vehicle->plateNumber }}">{{ $vehicle->model }}: {{ $vehicle->plateNumber }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   
</div>
</div>
@endsection