@extends('plantillaBase')

@section('contenido')

<div class="container">
    <div style="border-radius:15px; background-color: white; padding:5%; margin-right: 4%; background-clip: border-box; border: 1px solid rgba(0,0,0,.125);">
        <div style="float:left;width: 30%;">
            <img src="{{URL::asset('img/ciudad.jpg')}}" class="rounded float-left" width="400" height="250">
            <h2>{{ $trip->origin }}</h2>
        </div>
        <div style="float:right;width: 30%; margin-right: 8%">
            <img src="{{URL::asset('img/ciudad.jpg')}}" class="rounded float-right" width="400" height="250">  
            <h2>{{ $trip->destination }}</h2>
        </div>
        <div style="clear:both"></div>
       
       
        Fecha: {{ $trip->date }} <br>
        Asientos: {{ $trip->availableSeats }}<br>
        Precio: {{ $trip->price }}€ <br>
        <a href="/">Conductor: {{ $trip->driver }}</a>
        

    </div>


</div>


@endsection