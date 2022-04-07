@extends('plantillaBase')

@section('contenido')
<div class="container">
<a href="/vehicles/create" class="btn btn-success">Crear</a>
<br><br>
    <table style="align-items: center" class="text-center table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">PlateNumber</th>
                <th scope="col">Model</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->plateNumber }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>
                        <button type="button" onclick="location.href='{{ url("vehicles/edit/$vehicle->plateNumber") }}'" class="btn btn-primary">Editar</button>
                        
                        <form class="text-center" action="{{ url("vehicles/delete/$vehicle->plateNumber") }}" method='POST' style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                <!-- Modal -->
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection