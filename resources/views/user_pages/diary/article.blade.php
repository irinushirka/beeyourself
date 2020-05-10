@extends('layouts.user')

@section('title')
<title>Bee Yourself | Diary</title>
@endsection

@section('includes')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/article_style.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/diary.css') }}" >
@endsection

@section('content')
    <div class="frame">
        <div class="block-art title">
            <h1>{{$article->title}}</h1>
        </div>

        <div class="block-art">
            <p>{{$article->body}}</p>
        </div>
        <div class="block-art image">
            <img src="{{$article->image}}">
        </div>

        <div class="options">
            <div class="b-btn">
                <a href="/diary/edit/{{$article->id}}">Edit</a>
            </div>

            <div class="b-btn">
                <a href="/diary/delete/{{$article->id}}">Delete</a>
            </div>
        </div>
        
        <div class="block-art published">
            <h2>Published: {{$article->created_at}}</h2>
        </div>
    </div>
@endsection