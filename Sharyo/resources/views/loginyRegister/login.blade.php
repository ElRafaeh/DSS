@extends('plantillaBasePublica')
@section('contenido')
<div class="container">
<div class="card bg-white mr-4 p-4" style="border-radius:15px"> 
    <div class="text-center">
        <h3>¡Bienvenido de nuevo!</h3><br>
        <h6>Escribe tus credenciales</h4><br>
    </div>
    <div class="text-center container-fluid">
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <br><div class="col-6">
                    <input type="text" required class="form-control" name="user" placeholder="Usuario">
                </div>
            </div>
            <div class="row"><br></div> 
            <div class="row justify-content-center">
                <br><div class="col-6">
                    <input type="password" required class="form-control" name="password" placeholder="Contraseña">
                </div>
            </div>
            <div class="row"><br></div>
            <div class="row justify-content-center  ">
                <div>
                    <button type="submit" class="btn btn-outline-dark">Iniciar sesión</button>
                </div>
                <br><br><br>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            ¿No tienes cuenta? <a href="/mostrarRegistro">Registrate</a>
                        </span>
                    </div>
            </div>
        </form>
    </div>
</div>
</div>


@endsection