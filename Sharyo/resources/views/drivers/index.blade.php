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
        <form action= "/drivers/sel" >
            <a href="/drivers/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "name"){ echo "Nombre"; $ordenarPor = "experience";}
                            else{ echo "Experiencia"; $ordenarPor = "name";}
                        ?>
                    </option>
                    <option value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "name"){ echo "Nombre"; $ordenarPor = "experience";}
                            else{ echo "Experiencia"; $ordenarPor = "name";}
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
                <button type="submit" class="btn btn-info" style="display: inline; border-radius:15px">Ordenar</button>
            </div>
        </form>
    @else
        <form action="/drivers/sel" >
            <a href="/drivers/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="">Ordenar por:</option>
                    <option value="name">Nombre</option>
                    <option value="experience">Experiencia</option>
                </select>
                <select name="order" class="form-select" style="border-radius:15px">
                    <option selected value="">Ordenar en modo:</option>
                    <option value="asc">Ascendente</option>
                    <option value="desc">Descendente</option>
                </select>
                
                <input type="number" class="form-control" name="paginate" min="1" max="10" placeholder="Número de elementos a paginar (1-10)" style="border-radius:15px">
                <button type="submit" class="btn btn-info" style="display: inline; border-radius:20px">Ordenar</button>
            </div>
        </form>
    @endif
   
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