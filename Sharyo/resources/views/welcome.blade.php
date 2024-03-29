@extends('plantillaBase')

@section('contenido')

<div class="mb-4 text-center">
  @if (session('status'))
      <div class="container alert alert-success" style="border-radius:15px" role="alert">
          {{ session('status') }}
      </div>
  @endif
</div>

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Sharyo</h1>
    <p class="lead text-muted"> Tu web para viajar más cómodo gracias a <br>nuestro servicio de conductores.</p>
  </div>
</section>

<div class="container">
  <div class="card bg-white mr-4 p-5 shadow-sm" style="border-radius:15px">
    <form action="/viajes" method="GET">
      @csrf
      <div class="input-group" style="border-radius:15px">
        <i class="input-group-text" id="basic-addon1"><img src="{{URL::asset('img/origen.png')}}"></i>
        <select name="originBuscar" class="form-select" >
          <option selected>Origen</option>
        
          @foreach ($cities as $city)
              <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
          @endforeach
        </select>
        <span class="input-group-text" id="basic-addon1"><img src="{{URL::asset('img/destino.png')}}"></span>
        <select name="destinationBuscar" class="form-select" >
            <option selected>Destino</option>
            
            @foreach ($cities as $city)
                <option value="{{ $city->name }}">{{ $city->name }}: {{ $city->state }}</option>
            @endforeach
        </select>
        <input type="date" class="form-control" name="fecha">
      </div>

      <br>
      <div class="text-center">
          <button type="submit" class="btn btn-primary">Buscar viajes</button>
      </div>
    </form>
    <br>
    <hr style="margin-top: 1rem; margin-bottom: 3rem; border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);" />


    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card border-0">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="card-img-top kirk-icon sc-ksZaOG jucjqW" width="60" height="60" aria-hidden="true"><g fill="none" stroke="#708C91" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M2.43 5.04v3.48c0 1.44 2.34 2.61 5.22 2.61s5.22-1.17 5.22-2.6V5.03"></path><path d="M2.43 8.52V12c0 1.44 2.34 2.6 5.22 2.6a8.7 8.7 0 0 0 3.48-.66"></path><path d="M2.43 12v3.48c0 1.44 2.34 2.6 5.22 2.6a8.7 8.7 0 0 0 3.48-.66"></path><ellipse cx="7.65" cy="5.04" rx="5.22" ry="2.61"></ellipse><path d="M11.13 12v3.48c0 1.44 2.34 2.6 5.22 2.6s5.22-1.16 5.22-2.6V12"></path><path d="M11.13 15.48v3.48c0 1.44 2.34 2.6 5.22 2.6s5.22-1.16 5.22-2.6v-3.48"></path><ellipse cx="16.35" cy="12" rx="5.22" ry="2.61"></ellipse></g></svg>
          <div class="card-body">
            <h5 class="card-title">Miles de viajes baratos</h5>
            <p class="card-text">Vayas donde vayas, encuentra tu viaje ideal a un precio muy bajo.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="card-img-top kirk-icon sc-ksZaOG jucjqW" width="60" height="60" aria-hidden="true"><g><path d="M19.33,8.5c0-0.276-0.225-0.5-0.5-0.5h-3.855c-0.275,0-0.5,0.224-0.5,0.5s0.225,0.5,0.5,0.5h3.855 C19.105,9,19.33,8.776,19.33,8.5z"></path><path d="M9.906,8.492V8.133c0-0.994-0.798-1.799-1.781-1.799S6.344,7.139,6.344,8.133v0.359 c0,0.994,0.798,1.799,1.781,1.799S9.906,9.486,9.906,8.492z" fill="#708C91"></path><path d="M4.167,13.422v0.528c0,0.165,0.134,0.3,0.3,0.3h7.316c0.166,0,0.3-0.135,0.3-0.3v-0.528 c0-0.713-0.474-1.339-1.162-1.526c-0.75-0.204-1.773-0.417-2.797-0.417s-2.047,0.213-2.797,0.417 C4.641,12.083,4.167,12.709,4.167,13.422z" fill="#708C91"></path><path d="M12,18H1.982V1h2.904C5.11,2.139,6.086,3,7.265,3c1.178,0,2.154-0.861,2.379-2h4.88 c0.225,1.139,1.201,2,2.379,2s2.154-0.861,2.379-2h2.903v9c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V0.5 c0-0.276-0.224-0.5-0.5-0.5H18.83c-0.276,0-0.5,0.224-0.5,0.5c0,0.833-0.643,1.5-1.428,1.5s-1.428-0.667-1.428-1.5 c0-0.276-0.224-0.5-0.5-0.5H9.192c-0.276,0-0.5,0.224-0.5,0.5c0,0.833-0.643,1.5-1.427,1.5S5.837,1.333,5.837,0.5 c0-0.276-0.224-0.5-0.5-0.5H1.482c-0.276,0-0.5,0.224-0.5,0.5v18c0,0.276,0.224,0.5,0.5,0.5H12c0.276,0,0.5-0.224,0.5-0.5 S12.276,18,12,18z"></path><path d="M25.354,13.646c-0.195-0.195-0.512-0.195-0.707,0L19,19.293l-2.646-2.646c-0.195-0.195-0.512-0.195-0.707,0 s-0.195,0.512,0,0.707l3,3c0.195,0.195,0.512,0.195,0.707,0l6-6C25.549,14.158,25.549,13.842,25.354,13.646z"></path></g></svg>  
          <div class="card-body">
            <h5 class="card-title">Viaja seguro y tranquilo</h5>
            <p class="card-text">Para nosotros es muy importante conocer a nuestros usuarios. Por eso, examinamos atentamente las opiniones y los perfiles de nuestros usuarios para que sepas con quién vas a viajar.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="card-img-top kirk-icon sc-ksZaOG jucjqW" width="60" height="60" aria-hidden="true"><path fill="none" stroke="#708C91" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15.5 1.5h-7l-3 11h6l-2 8 10-12h-6z"></path></svg>      
          <div class="card-body">
            <h5 class="card-title">¡Busca, elige y a viajar!</h5>
            <p class="card-text">¡Reservar un viaje es más fácil que nunca! Gracias a nuestra sencilla aplicación y a su potente tecnología, podrás reservar un viaje cerca de ti en minutos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
