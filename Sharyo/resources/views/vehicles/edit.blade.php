@extends('plantillaBase')

@section('edit vehicle')
    <!-- Formulario para editar vehiculos en la base de datos -->
    <form action="{{ url('vehicles/edit') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input type="text" class="form-control" name="plateNumber">
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" class="form-control" name="model">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   

@endsection