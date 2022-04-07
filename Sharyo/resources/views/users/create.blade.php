@extends('plantillaBase')

@section('contenido')
    <!-- Formulario para crear nuevos vehiculos en la base de datos -->
    <form action="{{ url('/users/create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="surname">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de teléfono</label>
            <input type="text" class="form-control" name="phoneNumber">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>   

@endsection