@extends('admin.plantillaAdmin')

@section('contenido')
<div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
        <form action="{{ url('/viajes') }}" method="POST">
                
                <input type="text" class="form-control" name="paginate" placeholder="¿A donde quieres viajar?" style="border-radius:15px">
                <button type="submit" class="btn btn-info" style="border-radius:20px">Buscar</button>
                <hr style="margin-top: 1rem; margin-bottom: 1rem; border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);" />

        </form>
    </div>
</div>


@endsection