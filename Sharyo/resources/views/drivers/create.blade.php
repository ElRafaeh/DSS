@extends('plantillaBase')

@section('contenido')
    <!-- Formulario para crear nuevos conductores en la base de datos -->
    <form action="{{ url('/drivers') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">NIF</label>
            <input type="text" class="form-control" name="nif">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Experiencia</label>
            <input type="text" class="form-control" name="experience">
        </div>
    
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>   

@endsection