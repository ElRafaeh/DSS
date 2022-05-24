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

    <!-- Formulario para crear nuevos vehiculos en la base de datos -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form action="{{ url('/users/create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input value="{{ old('name') }}" required type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input value="{{ old('surname') }}" required type="text" class="form-control" name="surname">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de teléfono</label>
            <input value="{{ old('phoneNumber') }}" required type="text" class="form-control" name="phoneNumber">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input required value="{{ old('email') }}" type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input required type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Admin</label>
            <select name="admin" class="form-select" required>
                <option value="0" selected>Elija una opción</option>
                <option value="1">True</option>
                <option value="0">False</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>   
</div>
</div>
@endsection