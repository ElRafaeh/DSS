@extends('plantillaBase')

@section('contenido')
<div class="container">
    <!-- Formulario para crear nuevos conductores en la base de datos -->
    <form action="{{ url('/drivers/create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">NIF</label>
            <input type="text" required class="form-control" name="nif">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" required class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Experiencia</label>
            <input type="text" required class="form-control" name="experience">
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

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>   
</div>
@endsection