<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sharyo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-color: hsl(0,0%,95%)">
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light shadow" style="background-color: coral; ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    SHARYO
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        @else
                            @if (Auth::user()->admin == 1)
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                    <a href="/vehicles" class="nav-link" href="#">Administrar vehículos</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="/drivers" class="nav-link" href="#">Administrar conductores</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="/trips" class="nav-link" href="#">Administrar viajes</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="/users" class="nav-link" href="#">Administrar usuarios</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="/cities" class="nav-link" href="#">Administrar ciudades</a>
                                    </li>
                                </ul>
                            @endif
                        @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <img src="{{URL::asset('public/img/' . Auth::user()->photo)}}" style="width:30px; height:30px; border-radius:150px; position:relative; margin-top: 5%;">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @guest
                                    @else
                                        @if (Auth::user()->admin == 1)
                                            <a class="dropdown-item" href="{{ url('/') }}">
                                                <img class="img-circle float-start" alt="Perfil" style="margin-right:5%; height: 25px; width: 25px; display: block;" src="{{URL::asset('img/home.png')}}" >
                                                {{ __('Salir del panel') }}
                                            </a>
                                        @endif
                                    @endguest
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img class="img-circle float-start" alt="Perfil" style="margin-right:5%; height: 25px; width: 25px; display: block;" src="{{URL::asset('img/x.png')}}" >
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        @yield('contenido')
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer class="text-muted">
    <div class="container my-4">
    <section class="jumbotron text-center">
      <p>Pagina official © Sharyo</p>
    </section>
    </div>
</footer>
</html>



