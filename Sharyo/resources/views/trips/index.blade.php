@extends('plantillaBase')
<!--Faltaría cambiar la base de datos con las cosas nuevas que hemos añadido
precio, descripción 
-->
@section('contenido')
<div class="container">
<br>
<a href="trips/create" class="btn btn-success">Crear</button></a>
<br><br>
<table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Fecha</th>
                <th scope="col">Sitios disponibles</th>
                <th scope="col">Conductor</th>
                <th scope="col">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
        @if(count($trips)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>

                </tr>
            @else
            @foreach ($trips as $trip)
            <tr>
                <td>{{ $trip->origin }}</td>
                <td>{{ $trip->destination }}</td>
                <td>{{ $trip->date }}</td>
                <td>{{ $trip->availableSeats }}</td>
                <td>{{ $trip->driver }}</td>
                <td>
                <form action="/trips/{{$trip->id}}" method="POST">
                    <a href="/trips/{{ $trip->id }}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $trips->links() !!}
    </div>
</div>
@endsection