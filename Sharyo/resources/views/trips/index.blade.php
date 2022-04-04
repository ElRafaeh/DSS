@extends('plantillaBase')
<!--Faltaría cambiar la base de datos con las cosas nuevas que hemos añadido
precio, descripción 
-->
@section('contenido')
<br>
<a href="trips/callFormCreate" class="btn btn-success">Crear</button></a>
<br><br>
<table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Fecha<th>
                <th scope="col">Distancia<th>
                <th scope="col">Sitios disponibles<th>
                <th scope="col">Coche<th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($trips as $trip)
            <tr>
                <td>{{ $trip->origin }}</td>
                <td>{{ $trip->destination }}</td>
                <td>{{ $trip->date }}</td>
                <td>{{ $trip->distance }}</td>
                <td>{{ $trip->availableSeats }}</td>
                <td>{{ $trip->vehicle_id }}</td>
                <td>
                    <a class="btn btn-primary">Editar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection