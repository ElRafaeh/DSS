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
    <div class="col-4 my-3 pt-3 shadow" style="border-radius:15px">
    <form class="profile" action="/userProfile" method="GET">
        <h3>Nombre: </h3>
            <h6>{{$user->name}}</h6>
        <h3>Apellidos: </h3>
            {{$user->surname}}
        <h3>Teléfono: </h3>
             {{$user->phoneNumber}}
        <h3>Email: </h3>
            {{$user->email}}
    </form>  
</div>
<!-- Fin cuadrado datos -->
<form action="/users/{{$user->id}}" method="POST">
<a href="/users/{{ $user->id }}" class="btn btn-primary">Editar</a>

</div>
</div>
@endsection