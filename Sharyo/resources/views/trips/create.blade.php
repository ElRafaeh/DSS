@extends('admin.plantillaAdmin')

@section('contenido')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Formulario para crear nuevos vehiculos en la base de datos -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form action="{{ url('/trips/create') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label class="form-label">Origen</label>
        <select name="origin" class="form-select" required>
                <option selected>Elija un origen</option>
                
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
        <label class="form-label">Destino</label>
        <select name="destination" class="form-select" required>
                <option selected>Elija un destino</option>
                
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="mb-3">
            <label class="form-label">Sitios disponibles</label>
            <input type="text" class="form-control" name="availableSeats">
        </div>
        <div class="mb-3">
        <label class="form-label">Conductor</label>
            <select name="driver" class="form-select" required>
                <option selected>Elija un Conductor</option>
                
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->nif }}">{{ $driver->nif }}: {{ $driver->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form> 
</div>  
</div> 

@endsection