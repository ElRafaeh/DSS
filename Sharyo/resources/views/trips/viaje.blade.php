@extends('plantillaBase')

@section('contenido')

<div class="container">
    <div style="border-radius:15px; background-color: white; padding:5%; margin-right: 4%; background-clip: border-box; border: 1px solid rgba(0,0,0,.125);">
        <div style="float:left;width: 30%;">
            <img src="{{URL::asset('public/img/jacarilla.jpg')}}" class="rounded float-left" width="300" height="150">
            <h2 style="text-align: center;">{{ $trip->origin }}</h2>
        </div>
        <div style="float:left; margin-left: 6%">
            <img src="{{URL::asset('img/coche.gif')}}" class="rounded float-left" width="300" height="250">
        </div>
        <div style="float:right;width: 30%; margin-right:1%">
            <img src="{{URL::asset('img/alicante.jpg')}}" class="rounded float-right" width="300" height="150">  
            <h2 style="text-align: center;">{{ $trip->destination }}</h2>
        </div>
        <div style="clear:both"></div>
       
        <div id="container" style="width:30% ;box-shadow: 0 15px 30px 1px grey; background: rgba(255, 255, 255, 0.90); border-radius: 5px; margin-top:5%; margin-left:35%;">
            <div style="padding: 30px;">
                <p class="font-weight-light">Fecha: {{ $trip->date }}</p>
                <p>Asientos: {{ $trip->availableSeats }}</p>
                
                <a  href="/profile/driver/{{$trip->driver}}">Conductor: {{ $trip->driver }}</a>
            </div>
            <div style=" padding: 30px;">
                <p>Precio: {{ $trip->price }}€ </p>
                <button type="button" class="btn btn-success">Reservar</button>
            </div>
            
        </div>
    </div>
</div>


@endsection