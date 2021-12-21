<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ALIMAK</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/generalStyle.css') }}" rel="stylesheet">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <link href="{{ asset('css/switch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/radio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/circleProgress.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/1bf0086160.js" crossorigin="anonymous"></script>


    <!-- Styles boostrapt  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar-custom">
            <div class="container-menu">
                <div class="header-navigation-menu">
                    <div class="header-icon">
                        <img src="/img/LogoBlanco.png" alt="">
                    </div>
                    <button class="navbar-nav-toggle">
                        <span></span>
                    </button>
                    <div class="navbar-navigation">
                        <ul>
                            @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Iniciar sesión    ') }}<i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">{{ __('Crear cuenta   ') }}<i class="fas fa-user-plus"></i></a>
                            </li>
                            @else

                            <li style="font-size: 12px;" class="dropdown">
                                <a href="/home" class="sub-menu-toggle"> {{ __('Generalidades    ') }} <span class="caret"> <i class="fas fa-cogs"></i> </span> </a>
                            </li>

                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Resumen Técnico ') }} <span class="caret"><i class="fas fa-indent"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/informes" style="cursor: pointer">{{ __('Consulta de Informes    ') }}<i class="fas fa-paste"></i></a>
                                    </li>
                                    <li>
                                        <a href="/estadisticas" style="cursor: pointer">{{ __('Estadisticas    ') }}<i class="fas fa-chart-bar"></i></a>
                                    </li>
                                </ul>
                            </li>

                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle"></i> {{ __('Registro    ') }} <span class="caret"><i class="fas fa-user-plus"></i></span></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/registroAccidente/create" style="cursor: pointer">{{ __('Accidente     ') }}<i class="fas fa-user-injured"></i></a>
                                    </li>
                                    <li>
                                        <a href="/registroIncidente/create" style="cursor: pointer">{{ __('Incidente     ') }}<i class="fas fa-plus-circle"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-power-off"></i>{{ __(' Cerrar sesión') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--  -->
                            @endguest
                            <!--  -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>