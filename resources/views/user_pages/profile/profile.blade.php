@extends('layouts.user')

@section('title')
<title>Bee Yourself | Profile</title>
@endsection

@section('includes')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profile.css') }}" >
@endsection

@section('content')

<div class="frame">
    <div class="profile-image-block">
        <img src="{{ URL::asset('images/profile.png') }}">
    </div>
    <div class="info-block">
        <div class="info">
            <h2>Name: {{$name}}</h2>
        </div>
        <div class="info">
            <h2>Email: {{$email}}</h2>
        </div>
        <div class="info">
            <h2>Registered at: {{$date}}</h2>
        </div>
    </div>
</div>

@endsection