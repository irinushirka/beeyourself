@extends('layouts.user')

@section('title')
<title>Bee Yourself | Gallery</title>
@endsection

@section('includes')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery.css') }}" >
    <link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('lightbox/css/lightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="frame">
    <h1>Gallery</h1>
    <form method="POST" action="{{ route('load_photo') }}" class="add-photo-form">
        @csrf
        <label for="header">Photos link:</label>
        <input id="photo" name="photo" type="text"><br>
        <label for="header">Description:</label>
        <input id="descr" name="description" type="text"><br><br>
        <input type="submit" value="Load Photo">
    </form>

    <div class="container">
        <div id="gallery">
            @foreach($photos as $one)
            <figure class="photo">
                <a href="{{$one->image}}"><img src="{{$one->image}}"/></a>
                <figcaption>
                    {{$one->description}}
                    <div class="delete-btn"><a href="/gallery/delete/{{$one->id}}">X</a></div>
                </figcaption>
            </figure>
            @endforeach
        </div>
    </div>
    
    <script src="{{ URL::asset('lightbox/js/lightbox-plus-jquery.min.js') }}"></script>
</div>
@endsection