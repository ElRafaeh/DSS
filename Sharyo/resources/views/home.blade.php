@extends('plantillaBase')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">   
        <div class="mb-4 text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h4>{{ __('¡Bienvenido a Sharyö!') }}</h4>
        </div>
    </div>

</div>
@endsection
