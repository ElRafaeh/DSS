@extends('plantillaBase')
@section('contenido')
<div class="container">
    <a href="drivers/create" class="btn btn-success">Crear</button></a>
    <br><br>
    <table class="table table-dark table-striped table-hover text-center">
        <thead>
            <tr>
                <th scope="col">NIF</th>
                <th scope="col">Nombre</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if(count($drivers)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>

                </tr>
            @else
                @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver->nif }}</td>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->experience }}</td>
                    <td>{{ $driver->vehicle_id }}</td>
                    <td>
                        <button type="button" onclick="location.href='{{ url("drivers/edit/$driver->nif") }}'" class="btn btn-primary">Editar</button>
                            
                        <!-- Button trigger modal -->
                        <form action="{{ url("drivers/delete/$driver->nif") }}" method='POST' style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $drivers->links() !!}
    </div>
</div>
@endsection