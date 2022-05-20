@extends('layouts.app')

@section('contenido')
  
<main role="main">

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Sharyo</h1>
    <p class="lead text-muted"> Tu web para viajar más cómodo gracias a <br>nuestro servicio de conductores.</p>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
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
        <a href="/trips"><img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset('img/viajar.jpg')}}" ></a>
          <div class="card-body">
            <p class="card-text">Panel Administrador de Viajes</p>
            
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

<footer class="text-muted">
      <div class="container my-4">
      <section class="jumbotron text-center">
        <p>Pagina official © Sharyo</p>
</section>
      </div>
    </footer>
@endsection
