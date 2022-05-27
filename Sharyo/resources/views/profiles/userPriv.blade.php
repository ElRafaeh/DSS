@extends('.plantillaBase')
@section('contenido')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Formulario para editar vehiculos en la base de datos -->
    <div class="container">
    <div class="card bg-white mr-4 p-5" style="border-radius:15px">
    
    <div class="mb-4 text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    <h1 style="text-align:center">Perfil de {{$user->name}}</h1>
    <img src="{{URL::asset('img/' . $user->photo)}}" style="width:175px; float:left; border-radius:50%; position:relative; top:70px; left:50px">
    <div class="col-4 my-3 pt-3 shadow" style="width:600px; border-radius:15px; background-color:#E6E3E3; position:relative; left:400px; bottom:90px" >
    <form class="profile" action="/userProfile" method="GET">
        <h2 style="position:relative; left: 70px">Nombre: </h2>
            <label style="font-size:large;position:relative; left: 120px">{{$user->name}}</label>
        <h2 style="position:relative; left: 70px">Apellidos: </h2>
            <label style="font-size:large;position:relative; left: 120px">{{$user->surname}}</label>
        <h2 style="position:relative; left: 70px">Teléfono: </h2>
            <label style="font-size:large;position:relative; left: 120px">{{$user->phoneNumber}}</label>
        <h2 style="position:relative; left: 70px">Email: </h2>
            <label style="font-size:large;position:relative; left: 120px">{{$user->email}}</label>
    </form>  
</div>
<!-- Fin cuadrado datos -->
<form action="/users/{{$user->id}}" method="POST">
<a href="/users/{{ $user->id }}" class="btn btn-secondary btn-lg" style="position:relative; left:95px; bottom: 150px">Editar</a>

</div>
</div>
@endsection