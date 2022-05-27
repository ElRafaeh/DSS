@extends('plantillaBase')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-4 shadow-sm" style="border-radius:15px">     
        <div class="text-center">
            <h3>¡Registrate en Sharyo!</h3><br>
            <h6>Escribe tus datos</h4><br>
        </div>
        <div class="text-center container-fluid">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <br><div class="col-6">
                        <input id="name" placeholder="Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <input id="surname" type="text" placeholder="Apellidos"class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <input id="phoneNumber" placeholder="Teléfono" type="text" placeholder="Apellidos"class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>

                        @error('phoneNumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <input type="password" class="form-control" name="admin" placeholder="Contraseña admin (dejar en blanco si no eres admin)">
                        <br>    
                        <div class="col-auto">
                        <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">
                                Tiene que tener una longitud entre 8 y 20 caracteres.
                            </span>
                        </div>
                        <input id="password-confirm" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                                ¿Tienes ya cuenta? <a href="/login">Iniciar sesión</a>
                            </span>
                        </div>
                    </div>
                </div>
    
            </form>
        </div>
    </div>
</div>
@endsection
