<!-- la barra superior -->
@extends('admin.plantillaAdmin')

@section('contenido')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger" style="border-radius:20px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form enctype="multipart/form-data" action="{{ url('/cities/create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Comunidad</label>
            <input type="text" class="form-control" name="state">
        </div>
        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="file" name="photo">
            <input type="submit" class="pull-right btn btn-primary" style="float:right; position:relative; left:500px">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    </div>
</div>
@endsection