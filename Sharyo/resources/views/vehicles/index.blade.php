@extends('plantillaBase')




@section('contenido')

<?php
    try {
        $params = true;
        $ordenarPor = $_GET['type'];
        $ordenarModo = $_GET['order']; 
        $paginar = $_GET['paginate'];  
    } catch (Throwable $th) { 
        $params = false;
    }      
?>

<div class="container">
<div class="card bg-white mr-4 p-4" style="border-radius:15px">
    @if($params)
        <form action="{{ url("/vehicles/sel") }} " >
            <a href="/vehicles/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "model"){ echo "Modelo"; $ordenarPor = "plateNumber";}
                            else{ echo "Matrícula"; $ordenarPor = "model";}
                        ?>
                    </option>
                    <option value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "model"){ echo "Modelo"; $ordenarPor = "plateNumber";}
                            else{ echo "Matrícula"; $ordenarPor = "model";}
                        ?>
                    </option>
                </select>
                <select name="order" class="form-select" style="border-radius:15px">
                    <option selected value="{{ $ordenarModo }}">
                        <?php 
                            if($ordenarModo == "asc"){ echo "Ascendente"; $ordenarModo = "desc"; }
                            else{ echo "Descendente"; $ordenarModo = "asc";}
                        ?>
                    </option>
                    <option value="{{ $ordenarModo }}">
                        <?php 
                            if($ordenarModo == "asc"){ echo "Ascendente"; $ordenarModo = "desc"; }
                            else{ echo "Descendente"; $ordenarModo = "asc";}
                        ?>
                    </option>
                </select>
                
                <input type="number" value="{{ $paginar }}" class="form-control" name="paginate" min="1" max="10" style="border-radius:15px" placeholder="Número de elementos a paginar (1-10)" required>
                <button type="submit" class="btn btn-info" style="display: inline; border-radius:15px">Buscar</button>
            </div>
        </form>
    @else
        <form action="{{ url("/vehicles/sel") }} " >
            <a href="/vehicles/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="">Ordenar por:</option>
                    <option value="model">Modelo</option>
                    <option value="plateNumber">Matrícula</option>
                </select>
                <select name="order" class="form-select" style="border-radius:15px">
                    <option selected value="">Ordenar en modo:</option>
                    <option value="asc">Ascendente</option>
                    <option value="desc">Descendente</option>
                </select>
                
                <input type="number" class="form-control" name="paginate" min="1" max="10" placeholder="Número de elementos a paginar (1-10)" style="border-radius:15px">
                <button type="submit" class="btn btn-info" style="display: inline; border-radius:20px">Buscar</button>
            </div>
        </form>
    @endif

    <br>
    <table class="text-center table table-dark table-striped table-hover" >
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
        {!! $vehicles->appends(request()->query())->links()!!}
    </div>
</div>
</div>
@endsection