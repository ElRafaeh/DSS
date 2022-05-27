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
    <h1 style="text-align:center">Perfil de {{$user->name}}</h1>
    <img src="{{URL::asset('public/img/' . $user->photo)}}" style="width:150px; height:150px; float:left; border-radius:150px; position:relative; top:90px; left:80px">
    <div class="col-4 my-3 pt-3 shadow" style="width:600px; border-radius:15px; background-color:#E6E3E3; position:relative; left:400px; bottom:90px" >
    <form class="profile" action="/profile/{$user->email}" method="GET">
        <h2 style="position:relative; left: 70px">Nombre: </h2>
            <label style="font-size:large;position:relative; left: 120px">{{$user->name}}</label>
        <h2 style="position:relative; left: 70px">Apellidos: </h2>
            <label style="font-size:large;position:relative; left: 120px">{{$user->surname}}</label>
</form>
</div>
<!-- Fin cuadrado datos -->
</div>
</div>
@endsection