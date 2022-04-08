@extends('plantillaBase')
<!--Faltaría cambiar la base de datos con las cosas nuevas que hemos añadido
precio, descripción 
-->
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
<br>
@if($params)
        <form action="/trips/sel" >
            <a href="/trips/create" class="btn btn-success">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select">
                    <option selected value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "origin"){ echo "Origen"; $ordenarPor = "destination";}
                            else{ echo "Destino"; $ordenarPor = "origin";}
                        ?>
                    </option>
                    <option value="{{ $ordenarPor }}">
                        <?php 
                            if($ordenarPor == "origin"){ echo "Origen"; $ordenarPor = "destination";}
                            else{ echo "Destino"; $ordenarPor = "origin";}
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
        <form action="/trips/sel" >
            <a href="/trips/create" class="btn btn-success">Crear</a>
            <br><br>
            <div class="input-group mb-3">
                <select name="type" class="form-select">
                    <option selected value="">Ordenar por:</option>
                    <option value="origin">Origen</option>
                    <option value="destination">Destino</option>
                </select>
                <select name="order" class="form-select">
                    <option selected value="">Ordenar en modo:</option>
                    <option value="asc">Ascendente</option>
                    <option value="desc">Descendente</option>
                </select>
                
                <input type="number" class="form-control" name="paginate" min="1" max="10" placeholder="Número de elementos a paginar (1-10)">
                <button type="submit" class="btn btn-info" style="display: inline">Ordenar</button>
            </div>
        </form>
    @endif
<table class="text-center   table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Fecha</th>
                <th scope="col">Sitios disponibles</th>
                <th scope="col">Conductor</th>
                <th scope="col">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
        @if(count($trips)<=0)
                <tr>
                    <td colspan="8">No hay resultados</td>

                </tr>
            @else
            @foreach ($trips as $trip)
            <tr>
                <td>{{ $trip->origin }}</td>
                <td>{{ $trip->destination }}</td>
                <td>{{ $trip->date }}</td>
                <td>{{ $trip->availableSeats }}</td>
                <td>{{ $trip->driver }}</td>
                <td>
                <form action="/trips/{{$trip->id}}" method="POST">
                    <a href="/trips/{{ $trip->id }}" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit " class="btn btn-danger">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
    {!! $trips->appends(request()->query())->links()!!}
    </div>
</div>
@endsection