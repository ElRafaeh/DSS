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
        <form action="{{url('/user')}}" method="POST">
            <label>Nombre</label>
            <input type="text" name="name" id="nombre"><br>
            <label>Apellidos</label>
            <input type="text" name="surname" id="apellidos"><br>
            <label>Teléfono</label>
            <input type="text" name="phoneNumber" id="telefono"><br>
            <label>Email</label>
            <input type="text" name="email" id="email"><br>
            <label>Contraseña</label>
            <input type="text" name="password" id="password"><br>
            <button class="button" type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>