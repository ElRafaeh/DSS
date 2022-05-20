@extends('layouts.app')

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

    <!-- Formulario para crear nuevos vehiculos en la base de datos -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form action="{{ url('/users/create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input required type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input required type="text" class="form-control" name="surname">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de teléfono</label>
            <input required type="text" class="form-control" name="phoneNumber">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input required type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input required type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>   
</div>
</div>
@endsection