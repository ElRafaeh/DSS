@extends('plantillaBase')

@section('contenido')
<div class="container">
    <!-- Formulario para editar vehiculos en la base de datos -->
    <form action="{{ url("city/edit/$city->id") }}" method="POST">
        @method('PUT')
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $city->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Comunidad</label>
            <input type="text" class="form-control" name="state" value="{{ $city->state }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   
</div>
@endsection

