@extends('admin.plantillaAdmin')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
        <form action="{{ url('/viajes') }}" method="POST">
            <div class="input-group mb-3 pb-5">
                <input type="text" class="form-control" name="paginate" placeholder="¿A donde quieres viajar?" style="border-radius:15px">
                &nbsp&nbsp&nbsp&nbsp
                <button type="submit" class="btn btn-info" style="border-radius:20px">Buscar</button>
            </div>
            <hr style="margin-top: 1rem; margin-bottom: 3rem; border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);" />
            
        </form>

        <div>
            @if(count($trips)<=0)
            <div class="text-center">
                <h5>No hay viajes</h5>
            </div>
            @else
                @foreach ($trips as $trip)
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem; border-radius:15px">
                    <div class="card-header">{{ $trip->origin }} - {{ $trip->destination }}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $trip->availableSeats }} sitios disponibles</h5>
                        <p class="card-text">
                            Fecha: {{ $trip->date }} <br>
                            Conductor: {{ $trip->driver }}
                        </p>
                    </div>
                </div>
                @endforeach
            @endif

        </div>

    </div>
</div>


@endsection