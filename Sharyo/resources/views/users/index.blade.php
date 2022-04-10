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
<br>
<form action="/users/sel" method="GET" >

            <a href="/users/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select">
                    <option selected value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "name"){ echo "Nombre"; $ordenarPor = "surname";}
                            else{ echo "Apellido"; $ordenarPor = "name";}
                        ?>
                    </option>
                    <option value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "name"){ echo "Nombre"; $ordenarPor = "surname";}
                            else{ echo "Apellido"; $ordenarPor = "name";}
                        ?>
                    </option>
                </select>
                <select name="order" class="form-select">
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
                
                <input type="number" value="{{ $paginar }}" class="form-control" name="paginate" min="1" max="10" placeholder="Número de elementos a paginar (1-10)" required>
                <button type="submit" class="btn btn-info" style="display: inline">Ordenar</button>
            </div>
        </form>
    @else
        <form action="/users/sel" method="GET">
            <a href="/users/create" class="btn btn-success" style="border-radius:20px">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select" style="border-radius:15px">
                    <option selected value="">Ordenar por:</option>
                    <option value="name">Nombre</option>
                    <option value="surname">Apellido</option>
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
<form action="/users" method="GET">
    
    <div class="input-group mb-3">
        <div class="col-sm-4 my-1 mr-3">
            <input type="text" class="form-control" name="busqueda" placeholder="Busca..." style="border-radius:15px">
        </div>
        <div class="col-auto ml-3 mt-1">
            <input type="submit" class="btn btn-primary" value="Buscar" style="display: inline; border-radius:20px">
        </div>
    </div>
</form>
<br>
    <table style="align-items: center" class="text-center table table-dark table-striped table-hover" >
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">surname</th>
                <th scope="col">phoneNumber</th>
                <th scope="col">email</th>
                <th scope="col">acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @if(count($users)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>

                </tr>
            @else
            @foreach ($users as $user)
            <tr>
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
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $users->appends(request()->query())->links() !!}
    </div>
</div>
</div>
@endsection