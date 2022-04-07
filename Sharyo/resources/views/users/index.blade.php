@extends('plantillaBase')

@section('contenido')
<div class="container">
<br>
<form action="/users" method="GET">
    <div class="form-row">
        <div class="col-sm-4 my-1">
            <input type="text" class="form-control" name="busqueda">
        </div><div class="col-auto my-1">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </div>
</form>
<a href="/users/create" class="btn btn-success">Crear</button></a>
<br><br>
    <table style="align-items: center" class="text-center table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">surname</th>
                <th scope="col">phoneNumber</th>
                <th scope="col">email</th>
                <th scope="col">acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @if(count($users)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>

                </tr>
            @else
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phoneNumber }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="/users/{{$user->id}}" method="POST">
                    <a href="/users/{{ $user->id }}" class="btn btn-primary">Editar</a>
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
        {!! $users->links() !!}
    </div>
</div>
@endsection