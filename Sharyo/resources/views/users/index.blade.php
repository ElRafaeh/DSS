@extends('plantillaBase')

@section('contenido')
<br>
<a href="/users/create" class="btn btn-success">Crear</button></a>
<br><br>
    <table class="table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">surname</th>
                <th scope="col">phoneNumber<th>
                <th scope="col">email<th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $users->links() !!}
    </div>
@endsection