@extends('plantillaBase')

@section('contenido')
<div class="container"  >
    <div class="card bg-white mr-4" style="border-radius:15px">
        <div class="card-header d-lg-flex flex-wrap justify-content-between bg-gray-100" style="border-radius:15px 15px 0px 0px">
            <div class="d-flex order-lg-0 mb-3 mb-sm-0 mt-2">
            <a href="/cities/create" class="btn btn-success">Crear</button></a>        
            </div>
        </div>
    
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
    
    </div>
    <div class="d-flex justify-content-end">
        {!! $cities->links() !!}
    </div>
</div>
@endsection