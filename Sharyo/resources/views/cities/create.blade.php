<!-- la barra superior -->
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
<div class="container">
<div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form action="{{ url('/cities/create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Comunidad</label>
            <input type="text" class="form-control" name="state">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    </div>
</div>
@endsection