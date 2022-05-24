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
    <form class="profile" action="/profile/{{$user->id}}" method="GET">
        <h3>Nombre: </h3>
            <h6>{{$user->name}}</h6>
        <h3>Apellidos: </h3>
            {{$user->surname}}
    </form>  
</div>
<!-- Fin cuadrado datos -->
</div>
</div>
@endsection