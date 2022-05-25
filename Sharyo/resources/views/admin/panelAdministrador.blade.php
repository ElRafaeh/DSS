@extends('admin.plantillaAdmin')

@section('contenido')
  
<main role="main">

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Panel De Administrador</h1>
    <p class="lead text-muted"> Maneja todo lo referido al interior<br>de la web desde esta página.</p>
  </div>
</section>

<div class="album py-4 bg-light shadow" style="border-radius:15px">
  <div class="container">

    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
        <a href="/vehicles"><img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset('img/coches.jpg')}}" ></a>
          <div class="card-body">
            <p class="card-text">Panel Administrador de Vehículos</p>
            
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
       
        <a href="/drivers"><img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset('img/conductor.jpg')}}"></a>
          <div class="card-body">
            <p class="card-text">Panel Administrador de Conductores</p>
          </div>
          
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
        <a href="/trips"><img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset('img/viajar.jpg')}}" ></a>
          <div class="card-body">
            <p class="card-text">Panel Administrador de Viajes</p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
        <a href="/users"><img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset('img/usuarios.png')}}" ></a>
          <div class="card-body">
            <p class="card-text">Panel Administrador de Usuarios</p>
            
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
        <a href="/cities"><img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset('img/ciudad.jpg')}}"></a>
          <div class="card-body">
            <p class="card-text">Panel Administrador de Ciudades</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main>
@endsection
