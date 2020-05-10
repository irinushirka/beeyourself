<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bee Yourself</title>

        <!-- Styles -->
        <link rel="shortcut icon" href="{{ URL::asset('images/bee.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/homestyles.css') }}" >
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">Bee Yourself</div>
                <div class="links">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login</a>
                    @endif
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
