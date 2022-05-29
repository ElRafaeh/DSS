@extends('plantillaBase')

@section('contenido')

<div class="container">
    <div class="card bg-white mr-4 p-4 shadow-sm" style="border-radius:15px"> 
        <div class="text-center">
            <h3>¡Bienvenido de nuevo!</h3><br>
            <h6>Escribe tus credenciales</h4><br>
        </div>
        <div class="text-center container-fluid">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <br><div class="col-6">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row"><br></div> 
                <div class="row justify-content-center">
                    <br><div class="col-6">
                        <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row"><br></div>
                <div class="row justify-content-center  ">
                    <div>
                        <button type="submit" class="btn btn-outline-dark">Iniciar sesión</button>
                    </div>
                    <br><br><br>
                    <div class="col-auto">
                        @if (Route::has('password.request'))
                            <span id="passwordHelpInline" class="form-text">
                                ¿Olvidaste tu contraseña? <a href="{{ route('password.request') }}">Recuperar contraseña</a>
                            </span>
                        @endif
                    <br>
                        <span id="passwordHelpInline" class="form-text">
                            ¿No tienes cuenta? <a href="/register">Registrate</a>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
