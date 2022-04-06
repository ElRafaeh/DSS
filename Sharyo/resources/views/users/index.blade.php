@extends('plantillaBase')

@section('contenido')
<br>
<a href="/users/show" class="btn btn-success">Crear</button></a>
<br><br>
    <table class="table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">surname</th>
                <th scope="col">phoneNumber<th>
                <th scope="col">email<th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phoneNumber }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="/users/{{ $user->email }}/edit" class="btn btn-primary">Editar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection