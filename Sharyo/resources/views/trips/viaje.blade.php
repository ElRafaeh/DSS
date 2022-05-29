@extends('plantillaBase')

@section('contenido')

<link rel="stylesheet" href="styleViaje.css">

@foreach ($cities as $city)
    @if($trip->origin ==$city->name)

    @endif
@endforeach
<div class="container">
    <div style="border-radius:15px; background-color: white; padding:5%; margin-right: 4%; background-clip: border-box; border: 1px solid rgba(0,0,0,.125);">
        <div class="blog-posts">
            <div class="post">
            @foreach ($cities as $city)
                @if($trip->origin ==$city->name)
                    <img src="{{URL::asset('public/img/'.$city->photo)}}" class="post-img" style="box-shadow: 1px 5px 15px 1px grey;">
                @endif
            @endforeach
            
            <!--<img src="1.jpg" alt="" class="post-img">-->
            <div class="post-content" style="text-align: center;">
                <h2>{{ $trip->origin }}</h2>
            </div>
            </div>

            <div class="post">
                
            <img src="{{URL::asset('img/coche.gif')}}"  class="post-img">
            <!--<img src="2.jpg" alt="" class="post-img">-->
            <div class="post-content">
            </div>
            </div>

            <div class="post">
            @foreach ($cities as $city)
                @if($trip->destination ==$city->name)
                    <img src="{{URL::asset('public/img/'.$city->photo)}}" class="post-img" style="box-shadow: 1px 5px 15px 1px grey;">  
                @endif
            @endforeach
            
            <!--<img src="3.jpg" alt="" class="post-img">-->
            <div class="post-content" style="text-align: center;">
                <h2>{{ $trip->destination }}</h2>
            </div>
            </div>
        </div>

        <div class="pricing-table">
            <div class="pricing-card" style="margin-left:20%;border-radius:15px;border: 1px solid rgba(0,0,0,.125); box-shadow: 0 15px 30px 1px grey;">
            <h3 class="pricing-card-header">Precio</h3>
            <div class="price"> {{ $trip->price }}€</div>
            
                <p>Asientos: <strong>{{ $trip->availableSeats }}<strong></p>
                <P>Fecha: <strong>{{ $trip->date }}</strong></p>
                <a  href="/profile/driver/{{$trip->driver}}" style="text-decoration: none; color:black">Perfil del conductor: <strong><u>{{ $trip->driver }}</u></strong></a>
            
            @guest
                <a href="/login" class="order-btn">Reservar</a>
            @else
                <form action="{{ url("/viaje/{$trip->id}") }}" method="POST" id="myform">
                    @csrf
                    <input name="id" type="hidden" value="{{$trip->id}}">
                    <input name="email" type="hidden" value="{{Auth::user()->email}}">
                    <!--<button type="submit" class="btn btn-success">Reservar</button>-->
                    <a href="#" class="order-btn" onclick="document.getElementById('myform').submit()" style="text-decoration: none;">Reservar</a>
                </form>
            @endguest
        </div>

        <style>
            .blog-posts{
            width: min(1200px, 100%);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            cursor: pointer;
            }

            .post{
            width: calc(33% - 10px);
            overflow: hidden;
            }

            .post-img{
            width: 100%;
            border-radius: 6px;
            transition: .3s linear;
            }

            .post-content{
            background-color: #ffffffdd;
            margin: 0 20px;
            padding: 30px;
            border-radius: 6px;
            transform: translateY(-60px);
            transition: .3s linear;
            }

            .post-content h3{
            font-size: 16px;
            margin-bottom: 10px;
            }

            .date{
            font-size: 15px;
            font-style: italic;
            color: #e77f67;
            }

            .post:hover .post-img{
            transform: translateY(20px);
            }

            .post:hover .post-content{
            transform: translateY(-80px);
            }

            @media screen and (max-width: 1200px){
            .blog-posts{
                justify-content: center;
            }
            .post{
                width: min(600px, 100%);
            }
            }   
            .pricing-table{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                width: min(1600px, 100%);
                
            }
            
            .pricing-card{
                flex: 1;
                max-width: 360px;
                background-color: #fff;
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