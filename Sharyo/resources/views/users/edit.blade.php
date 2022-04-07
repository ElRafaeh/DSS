@extends('plantillaBase')

@section('contenido')
    <!-- Formulario para editar vehiculos en la base de datos -->
    <form action="/users/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="surname" value="{{$user->surname}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de teléfono</label>
            <input type="text" class="form-control" name="phoneNumber" value="{{$user->phoneNumber}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   

@endsection