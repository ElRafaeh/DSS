@extends('plantillaBase')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">   
        <div class="mb-4 text-center">
            <h4>{{ __('SOBRE NOSOTROS') }}</h4>
        </div>
        <div div class="col-4 my-3 pt-3 shadow" style="width:600px; border-radius:15px; background-color:#E6E3E3; margin-left:auto; margin-right:auto">
        <p style="text-align: center">
            Cuando se nos ocurrió Sharyö pensábamos en una forma de viajar sencilla y asequible donde todo el mundo saliese ganando
            tanto los conductores, como los clientes, quienes podrán viajar de forma barata a sus destinos favoritos.
        </p>
            <h3 style="margin-left:5%">Qué hemos conseguido</h3>
            <ul style="margin-left:10%">
                <li>80 millones de usuarios </li>
                <li>20 millones de viajeros por trimestre</li>
                <li>Todos los clientes has conseguido ahorrar notablemente</li>
                <li>Conductores contentos</li>
                <li>Una comunidad que no para de crecer</li>
        </div>
    </div>

</div>
@endsection
