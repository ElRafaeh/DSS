@extends('plantillaBase')
@section('contenido')
<br>
<a href="drivers/callFormCreate" class="btn btn-success">Crear</button></a>
<br><br>
<table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">NIF</th>
                <th scope="col">Nombre</th>
                <th scope="col">Experiencia<th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $drive)
            <tr>
                <td>{{ $drive->nif }}</td>
                <td>{{ $drive->name }}</td>
                <td>{{ $drive->experience }}</td>

                    <a class="btn btn-primary">Editar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection