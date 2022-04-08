@extends('plantillaBase')

@section('contenido')
<div class="container">
    <br>
    <a href="/cities/create" class="btn btn-success">Crear</button></a>
    <br>
    <br>
    <table class="text-center table table-dark table-striped table-hover" >
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
                    <form action="/cities/delete/{{$city->name}}" method="POST">
                        <a href="/cities/edit/{{ $city->name }}" class="btn btn-primary">Editar</a>
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
        {!! $cities->links() !!}
    </div>
</div>
@endsection