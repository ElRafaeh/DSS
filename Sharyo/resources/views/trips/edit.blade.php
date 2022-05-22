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
    <!-- Formulario para editar vehiculos en la base de datos -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form action="/trips/{{$trip->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Origen</label>
            <select name="origin" class="form-select" required>
                <option selected>{{$trip->origin}}</option>
                
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Destino</label>
            <select name="destination" class="form-select" required>
                <option selected>{{$trip->destination}}</option>
                
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" class="form-control" name="date" value="{{$trip->date}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Sitios disponibles</label>
            <input type="text" class="form-control" name="availableSeats" value="{{$trip->availableSeats}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Conductor</label>
            <select name="driver" class="form-select" required> 
                <option selected>{{$trip->driver}}</option>
                
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->nif }}">{{ $driver->nif }}: {{ $driver->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>  
</div> 
</div>

@endsection