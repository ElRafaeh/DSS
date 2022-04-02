<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuarios</title>
</head>
<body>
    <h1>Registros de usuarios</h1>
    <!--Menú-->
    <div>

    </div>

    <!--Main-->
    <div>
        <form action="{{url('/trip')}}" method="GET">
            <label>Origen</label>
            <input type="text" name="origen" id="origen"><br>
            <label>Destino</label>
            <input type="text" name="destino" id="destino"><br>
            <label>Fecha</label>
            <input type="text" name="fecha" id="fecha"><br>
            <label>Pasajeros</label>
            <input type="text" name="pasajeros" id="pasajeros"><br>
            <label>Descripción</label>
            <input type="text" name="descripcion" id="descripcion"><br>
            <button type="submit">Crear viaje</button>
        </form>
    </div>
</body>
</html>