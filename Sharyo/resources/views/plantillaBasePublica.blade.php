<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sharyo</title>
  </head>
  <body style="background-color: hsl(0,0%,95%)">
    <!-- Menu de navegacion -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light shadow" style="background-color: coral; ">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">SHARYO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <!-- Cosas alineadas a la izquierda del navBar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/vehicles" class="nav-link" href="#">Administrar vehículos</a>
            </li>
          </ul>
          <!-- Cosas alineadas a la derecha del navBar -->
          <ul class="navbar-nav mr-auto">
            <li class="" >
              <a class="nav-link" href="/mostrarLogin">Login</a>
            </li>
            <li class="" >
              <a class="nav-link" href="/mostrarRegistro">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <!-- Donde se mostrará el contenido-->
    @yield('contenido')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>