@extends('layouts.app')

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
        <form action="/cities/sel" >
            <a href="/cities/create" class="btn btn-success">Crear</button></a>        
            <div class="input-group mb-3" style="border-radius:15px">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="{{ $ordenarPor }}" style="border-radius:15px">
                        <?php 
                            if($ordenarPor == "name"){ echo "Nombre"; $ordenarPor = "state";}
                            else{ echo "Comunidad"; $ordenarPor = "name";}
                        ?>
                    </option>
                    <option value="{{ $ordenarPor }}" style="border-radius:15px">
                        <?php 
                            if($ordenarPor == "name"){ echo "Nombre"; $ordenarPor = "state";}
                            else{ echo "Comunidad"; $ordenarPor = "name";}
                        ?>
                    </option>
                </select>
                <select name="order" class="form-select" style="border-radius:15px">
                    <option selected value="{{ $ordenarModo }}" style="border-radius:15px">
                        <?php 
                            if($ordenarModo == "asc"){ echo "Ascendente"; $ordenarModo = "desc"; }
                            else{ echo "Descendente"; $ordenarModo = "asc";}
                        ?>
                    </option>
                    <option value="{{ $ordenarModo }}" style="border-radius:15px">
                        <?php 
                            if($ordenarModo == "asc"){ echo "Ascendente"; $ordenarModo = "desc"; }
                            else{ echo "Descendente"; $ordenarModo = "asc";}
                        ?>
                    </option>
                </select>
                
                <input type="number" value="{{ $paginar }}" class="form-control" name="paginate" min="1" max="10" placeholder="Número de elementos a paginar (1-10)" required>
                <button type="submit" class="btn btn-info" style="display: inline">Ordenar</button>
            </div>
        </form>
    @else
        <form action="/cities/sel" methos="GET" >
            <a href="/cities/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="">Ordenar por:</option>
                    <option value="name">Nombre</option>
                    <option value="state">Comunidad</option>
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
            @if(count($cities)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>

                </tr>
            @else
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
            @endif
        </tbody>
    </table>
    
    </div>
    <div class="d-flex justify-content-end">
    {!! $cities->appends(request()->query())->links()!!}
    </div>
</div>
</div>
@endsection