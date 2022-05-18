@extends('plantillaBasePublica')
@section('contenido')
<div class="container">
<div class="card bg-white mr-4 p-4" style="border-radius:15px"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="text-center">
        <h3>¡Registrate en Sharyo!</h3><br>
        <h6>Escribe tus datos</h4><br>
    </div>
    <div class="text-center container-fluid">
        <form action="{{ url('/register') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <br><div class="col-6">
                    <input type="text" required class="form-control" name="user" placeholder="Nombre">
                    <br>
                    <input type="text" required class="form-control" name="surname" placeholder="Apellidos">
                    <br>
                    <input type="text" required class="form-control" name="phoneNumber" placeholder="Teléfono">
                    <br>
                    <input type="text" required class="form-control" name="email" placeholder="Email">
                    <br>
                    <input type="password" class="form-control" name="admin" placeholder="Contraseña admin (dejar en blanco si no eres admin)">
                    <br>    
                    <div class="col-auto">
                    <input type="password" name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Contraseña" required>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            Tiene que tener una longitud entre 8 y 20 caracteres.
                        </span>
                    </div>
                    <br>
                    <div class="col-auto">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">&nbspAcepto los términos y condiciones legales.</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-dark">Registrarse</button><br>
                    <br>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            ¿Tienes ya cuenta? <a href="/mostrarLogin">Iniciar sesión</a>
                        </span>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
</div>


@endsection