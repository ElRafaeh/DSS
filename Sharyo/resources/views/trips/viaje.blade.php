@extends('plantillaBase')

@section('contenido')

<link rel="stylesheet" href="styleViaje.css">

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

        <div class="pricing-table" >
            <div class="pricing-card" style="margin-left:20%;border-radius:15px;border: 1px solid rgba(0,0,0,.125); box-shadow: 0 15px 30px 1px grey;">
            <h3 class="pricing-card-header">Precio</h3>
            <div class="price"> {{ $trip->price }}€</div>
            
                <p>Asientos: <strong>{{ $trip->availableSeats }}<strong></p>
                <P>Fecha: <strong>{{ $trip->date }}</strong></p>
                <a  href="/profile/driver/{{$trip->driver}}" style="text-decoration: none; color:black">Perfil del conductor:<strong>{{ $trip->driver }}</strong></a>
            
            @guest
                <a href="/login" class="order-btn">Reservar</a>
            @else
                <form action="{{ url('/viaje/{$trip->id}') }}" method="POST" id="myform">
                    @csrf
                    <input name="id" type="hidden" value="{{$trip->id}}">
                    <input name="email" type="hidden" value="{{Auth::user()->email}}">
                    <!--<button type="submit" class="btn btn-success">Reservar</button>-->
                    <a href="#" class="order-btn" onclick="document.getElementById('myform').submit()" style="text-decoration: none;">Reservar</a>
                </form>
            @endguest
        </div>

        <style>
            .pricing-table{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                width: min(1600px, 100%);
                margin: auto;
            }
            
            .pricing-card{
                flex: 1;
                max-width: 360px;
                background-color: #fff;
                margin: 20px 10px;
                text-align: center;
                cursor: pointer;
                overflow: hidden;
                color: #2d2d2d;
                transition: .3s linear;
            }
            
            .pricing-card-header{
                background-color: #0fbcf9;
                display: inline-block;
                color: #fff;
                padding: 12px 30px;
                border-radius: 0 0 20px 20px;
                font-size: 16px;
                text-transform: uppercase;
                font-weight: 600;
                transition: .4s linear;
            }
            
            .pricing-card:hover .pricing-card-header{
                box-shadow: 0 0 0 26em #0fbcf9;
            }
            
            .price{
                font-size: 70px;
                color: #0fbcf9;
                margin: 40px 0;
                transition: .2s linear;
            }
            
            .price sup, .price span{
                font-size: 22px;
                font-weight: 700;
            }
            
            .pricing-card:hover ,.pricing-card:hover .price{
                color: #fff;
            }
            
            .pricing-card li{
                font-size: 16px;
                padding: 10px 0;
                text-transform: uppercase;
            }
            
            .order-btn{
                display: inline-block;
                margin-bottom: 40px;
                margin-top: 80px;
                border: 2px solid #0fbcf9;
                color: #0fbcf9;
                padding: 18px 40px;
                border-radius: 8px;
                text-transform: uppercase;
                font-weight: 500;
                transition: .3s linear;
            }
            
            .order-btn:hover{
                background-color: #0fbcf9;
                color: #fff;
            }
            
            @media screen and (max-width:1100px){
                .pricing-card{
                flex: 50%;
                }
            }
        </style>
    </div>
</div>


@endsection