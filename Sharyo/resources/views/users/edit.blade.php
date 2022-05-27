@extends('.plantillaBase')

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

    <!-- Formulario para editar vehiculos en la base de datos -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form action="/users/{{$user->email}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="surname" value="{{$user->surname}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de teléfono</label>
            <input type="text" class="form-control" name="phoneNumber" value="{{$user->phoneNumber}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nueva Contraseña</label>
            <input type="password" class="form-control" name="newPassword">
        </div>
        <div class="mb-3">
            <label class="form-label">Repetir nueva Contraseña</label>
            <input type="password" class="form-control" name="reNewPassword">
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="oldpassword">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>   
</div>
</div>
@endsection