@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-4" style="border-radius:15px"> 
        <div class="text-center">
            <h3>¡Recuperar Contraseña!</h3><br>
            <h6>Escribe tu email para recuperar tu contraseña</h4><br>
        </div>
        <div class="text-center container-fluid">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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
                <br>
                <div class="row justify-content-center">
                    <div>
                        <button type="submit" class="btn btn-outline-success">
                            {{ __('Recuperar contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
