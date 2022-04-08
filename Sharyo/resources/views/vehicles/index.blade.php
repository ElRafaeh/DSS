@extends('plantillaBase')

@section('contenido')
<div class="container">

    <form action="{{ url("/vehicles/sel") }} " >
        <a href="/vehicles/create" class="btn btn-success">Crear</a>
        <br><br>
        <div class="input-group mb-3">
            <select name="type" class="form-select">
                <option selected value="model">Ordenar por:</option>
                <option value="model">Modelo</option>
                <option value="plateNumber">Matrícula</option>
            </select>
            <select name="order" class="form-select">
                <option selected value="asc">Ordenar en modo:</option>
                <option value="asc">Ascendente</option>
                <option value="desc">Descendente</option>
            </select>
            
            <input type="number" class="form-control" name="paginate" min="1" max="10" placeholder="Número de elementos a paginar (1-10)">
            <button type="submit" class="btn btn-info" style="display: inline">Buscar</button>
        </div>
    </form>

    <br>
    <table style="align-items: center" class="text-center table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">PlateNumber</th>
                <th scope="col">Model</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if(count($vehicles)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>
                </tr>
            @else
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
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $vehicles->links()!!}
    </div>
</div>
@endsection