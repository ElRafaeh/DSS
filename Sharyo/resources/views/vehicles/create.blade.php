@extends('plantillaBase')

@section('contenido')
    <!-- Formulario para crear nuevos vehiculos en la base de datos -->
    <form action="{{ url('/vehicles') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input type="text" class="form-control" name="plateNumber">
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" class="form-control" name="model">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>   

@endsection