@extends('plantillaBase')

@section('contenido')
<div class="container">
<div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <!-- Formulario para editar vehiculos en la base de datos -->
    <form action="/cities/edit/{{$city->name}}" method="POST">
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
</div>
@endsection

