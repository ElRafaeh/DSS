<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>
    <h1>Inicio</h1>

      <div class="container">
        <a class="btn btn-outline-warning" type="btn btn-outline-warning" href="/vehicles">Administrar vehiculos</a>
        <button class="btn btn-outline-warning" type="btn btn-outline-warning" onclick="window.location='{{ url("/trips")}} '">Administrar viajes</button>
<<<<<<< HEAD
        <button class="btn btn-outline-warning" type="btn btn-outline-warning" onclick="window.location='{{ url("/users")}} '">Administrar usuarios</button>
=======
        <button class="btn btn-outline-warning" type="btn btn-outline-warning" onclick="window.location='{{ url("/drivers")}} '">Administrar conductores</button>

>>>>>>> develop

      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>