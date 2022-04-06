<!-- la barra superior -->
@extends('plantillaBase')

@section('contenido')

    <form action="{{ url('/citys/createCity') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">State</label>
            <input type="text" class="form-control" name="state">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

@endsection