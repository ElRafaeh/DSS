@extends('plantillaBase')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-5 shadow-sm" style="border-radius:15px">
        <form action="/viajes" method="GET">
            <div class="input-group mb-3 pb-5">
                @csrf
                <select name="originBuscar" class="form-select" style="border-radius:15px">
                    <option hidden selected >¿A donde quieres viajar?</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
                    @endforeach
                </select>
                &nbsp&nbsp
                <select name="destinationBuscar" class="form-select" style="border-radius:15px">
                    <option hidden selected>¿Desde donde?</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
                    @endforeach
                </select>
                &nbsp&nbsp
                <input type="date" class="form-control" name="fecha" placeholder="¿Cuando quieres viajar?" style="border-radius:15px">
                &nbsp&nbsp
                <button type="submit" class="btn btn-info" style="border-radius:20px">Buscar</button>
            </div>
            <hr style="margin-top: 1rem; margin-bottom: 3rem; border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);" />
            
        </form>

        <div>
            @if(count($trips)<=0)
            <div class="text-center">
                <h5>No encuentro viajes...😢</h5>
            </div>
            @else
                <div class="input-group">
                    @foreach ($trips as $trip)
                    <div class="card text-white bg-secondary mb-3" style=" margin-right: 2rem; max-width: 18rem; border-radius:15px">
                    <a class="card-block stretched-link text-decoration-none" style="color: #fdfdfd;" href>
                        <div class="card-header">{{ $trip->origin }} - {{ $trip->destination }}</div>
                        <div class="card-body">
                            <h5 class="card-title">20€</h5>
                            <p class="card-text">
                                Fecha: {{ $trip->date }} <br>
                                {{ $trip->availableSeats }} sitios disponibles
                            </p>
                            <!--<button type="submit" class="btn btn-info" style="display: inline; border-radius:20px">Reservar</button>-->
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            @endif

        </div>

    </div>
</div>
@endsection