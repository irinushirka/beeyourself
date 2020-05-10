<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <title>Bee Yourself</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/bee.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/mybee.css') }}" >
    @yield('includes')
</head>
<body>
    <div class="menu-wrapper">
        <ul class="menu">
            <li><a href="{{route('mybee')}}">Home</a></li>
            <li><a href="{{route('todo')}}">TO-DO List</a></li>
            <li><a href="{{route('diary')}}">Diary</a></li>
            <li><a href="{{route('gallery')}}">Gallery</a></li>
            <li><a href="{{route('profile')}}">My Profile</a></li>
            <li><a href="{{route('logout')}}">Log Out</a></li>
        </ul>
    </div>
    <div class="flex-center position-ref full-height">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
