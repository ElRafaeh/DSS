@extends('plantillaBase')

@section('contenido')
    <br>
    <a href="/citys/show" class="btn btn-success">Crear</button></a>
    <br>
    <br>
    <table class="table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">State</th>
                <th scope="col">Acciones<th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citys as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->state }}</td>
                    <td>
                        <a class="btn btn-primary">Editar</a>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection