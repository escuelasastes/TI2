<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>@yield('title','Inicio')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../assets/css/material-kit.css?v=2.1.1" rel="stylesheet">
    <link href="../assets/demo/demo.css" rel="stylesheet">
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet">

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/45/5/intl/es_419/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/45/5/intl/es_419/util.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        TESVB
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (Auth::check())
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('semestres.index') }}">{{ __('Semestres') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('grupos.index') }}">{{ __('Grupos') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('carreras.index') }}">{{ __('Carreras') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('tperiodos.index') }}">{{ __('Tipo periodo') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('dias.index') }}">{{ __('Dias de Clase') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('sesiones.index') }}">{{ __('Sesiones') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{ route('materias.index') }}">{{ __('Materias') }}</a>
                    </ul>
                    
                    
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        <main class="py-6">
            @yield('content')
        </main>
    </div>
</body>
<style>
.colorfooter {
    background-color: rgb(224,224,224);
    margin-left: 3.5%;
    width: 90%;
    padding-top: 2em;
    padding-bottom: 2em;
    box-shadow: 0 0 .6em rgba(171,171,171,1);
}
</style>
<footer class="colorfooter col-xs-11 col-sm-11 col-md-11 offset-sm-1 footer-responsive">
<div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
<div class="copyright float-right">
        ©
        <script>
          document.write(new Date().getFullYear())
        </script> made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
</footer>
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
</html>

