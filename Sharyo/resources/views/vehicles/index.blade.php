@extends('plantillaBase')

@section('contenido')
<br>
<a href="/vehicles/create" class="btn btn-success">Crear</a>
<br><br>
    <table class="table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">PlateNumber</th>
                <th scope="col">Model</th>
                <th scope="col">Acciones<th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->plateNumber }}</td>
                <td>{{ $vehicle->model }}</td>
                <td>
                    <button type="button" onclick="location.href='{{ url("vehicles/edit/$vehicle->plateNumber") }}'" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection