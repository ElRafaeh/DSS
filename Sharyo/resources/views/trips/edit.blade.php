@extends('admin.plantillaAdmin')

@section('contenido')
<!-- Formulario para editar vehiculos en la base de datos -->
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger" style="border-radius:20px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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
        <div class="row g-2">
            <div class="col-md">
                <label class="form-label">Sitios disponibles</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img src="{{URL::asset('img/pasajero.png')}}"></span>
                    <input type="number" class="form-control" name="availableSeats" value="{{$trip->availableSeats}}">
                </div>
            </div>
            <div class="col-md">
                <label class="form-label">Precio</label>
                <div class="input-group mb-3">
                    
                    <span class="input-group-text">€</span>
                    <input type="number" class="form-control" min="0.00" max="10000.00" name="price" step="0.10" value="{{$trip->price}}" />
                </div>
            </div>
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