@extends('plantillaBase')
@section('contenido')
<div class="container">
<div class="card bg-white mr-4 p-4" style="border-radius:15px">
            <div class="d-flex order-lg-0 mb-4 mb-sm-0 mt-2 pb-4">
            <a href="drivers/create" class="btn btn-success" style="border-radius:20px">Crear</button></a>     
            </div>
   
    <table class="text-center table table-dark table-striped table-hover text-center">
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
</div>
@endsection