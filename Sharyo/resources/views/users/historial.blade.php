@extends('plantillaBase')
@section('contenido')

<div class="container">
    <div class="card bg-white mr-4 p-5 shadow-sm" style="border-radius:15px">
        <div class="text-center">
            <h3>¡Tu historial de viajes!</h3><br>
            <h6>Aquí observarás los viajes que has realizado</h4>
        </div>
        <hr style="margin-top: 1rem; margin-bottom: 3rem; border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);" />
        @if ($travels == null || count($travels) <= 0)
            <div class="text-center">
                <h5>No has realizado ningún viaje...😢</h5>
            </div>
        @else
            <table class="table table-secondary text-center table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Conductor</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($travels as $travel)
                        <tr>
                            <td>{{ $travel->origin }}</td>
                            <td>{{ $travel->destination }}</td>
                            <td>{{ $travel->date }}</td>
    
                            <td>{{ $travel->price }} €</td>
                            <td>{{ $travel->driver }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

@endsection