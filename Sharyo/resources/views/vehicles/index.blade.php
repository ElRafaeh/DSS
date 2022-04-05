@extends('plantillaBase')

@section('contenido')
<br>
<a href="/vehicles/show" class="btn btn-success">Crear</button></a>
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
                    <a class="btn btn-primary">Editar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection