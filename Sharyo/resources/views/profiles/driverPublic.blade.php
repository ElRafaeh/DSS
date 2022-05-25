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
    <!-- Formulario para editar vehiculos en la base de datos -->
       <!-- Cambiar método para que no se vea nif -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <div class="col-4 my-3 pt-3 shadow" style="border-radius:15px">
    <form class="profile" action="/profile/driver/{{$driver->nif}}" method="GET">
        <h3>Nombre: </h3>
            <h6>{{$driver->name}}</h6>
        <h3>Experiencia: </h3>
            <h6>{{$driver->experience}}</h6>
        <h3>Vehículo: </h3>
            <h6>{{$driver->vehicle_id}}</h6>
    </form>  
</div>
<!-- Fin cuadrado datos -->
</div>
</div>
@endsection