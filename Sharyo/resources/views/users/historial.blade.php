@extends('plantillaBase')
@section('contenido')

<div class="container">
    <div class="card bg-white mr-4 p-5 shadow-sm" style="border-radius:15px">
        <div class="text-center">
            <h3>¡Tu historial de viajes!</h3><br>
            <h6>Aquí observarás los viajes que has realizado</h4>
        </div>
        <hr style="margin-top: 1rem; margin-bottom: 3rem; border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);" />
        @if ($travels == null || count($travels) <= 0)
            <div class="text-center">
                <h5>No encuentro viajes...😢</h5>
            </div>
        @else
            @foreach ($travels as $travel)
                
            @endforeach
        @endif
    </div>
</div>

@endsection