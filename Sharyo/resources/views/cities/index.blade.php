@extends('plantillaBase')

@section('contenido')
<div class="container">
    <br>
    <a href="/cities/create" class="btn btn-success">Crear</button></a>
    <br>
    <br>
    <table class="table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">State</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->state }}</td>
                    <td>
                    <button type="button" onclick="location.href='{{ url("cities/edit/$city->id") }}'" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $cities->links() !!}
    </div>
</div>
@endsection