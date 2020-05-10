<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bee Yourself</title>

    <link rel="shortcut icon" href="{{ URL::asset('images/bee.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/auth.css') }}" >
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <a class="title m-b-md" href="{{ url('/') }}">Bee Yourself</a>
            <div class="links">
                @guest
                <input type="radio" name="option" id="loginradio">
                <label for="loginradio" onclick = "document.location.href='login'" id="loginlabel">Login</label> <!--<a href="{{ route('register') }}">-->
                @if (Route::has('register'))
                <input type="radio" name="option" id="registerradio">
                <label for="registerradio" onclick = "document.location.href='register'" id="registerlabel">Register</label>
                @endif
                @else
                <!--Штука, которая пригодится для выхода из сессии-->
            <!--<li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>-->
                @endguest
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>
