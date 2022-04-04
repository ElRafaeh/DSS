@extends('plantillaBase')

@section('edit vehicle')
    <!-- Formulario para editar vehiculos en la base de datos -->
    <form action="{{ url('/editTrips') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Origen</label>
            <input type="text" class="form-control" name="origin">
        </div>
        <div class="mb-3">
            <label class="form-label">Destino</label>
            <input type="text" class="form-control" name="destination">
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="mb-3">
            <label class="form-label">Distancia</label>
            <input type="text" class="form-control" name="distance">
        </div>
        <div class="mb-3">
            <label class="form-label">Sitios disponibles</label>
            <input type="text" class="form-control" name="availableSeats">
        </div>
        <div class="mb-3">
            <label class="form-label">Coche</label>
            <input type="text" class="form-control" name="vehicle_id">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   

@endsection