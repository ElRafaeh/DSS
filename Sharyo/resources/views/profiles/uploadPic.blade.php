@extends('plantillaBase')

@section('contenido')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger" style="border-radius:20px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    <form enctype="multipart/form-data" action="/userProfile/changePic/{{$user->email}}" method="POST">
    @csrf
        @method('PUT')
        <h1>Cambiar foto de perfil. </h1>
        <label>Elija la foto de perfil que desee: <label>
        <input type="file" name="photo">
        <input type="submit" class="pull-right btn btn-primary" style="float:right; position:relative; left:500px">

    </form>   
</div>
</div>
@endsection