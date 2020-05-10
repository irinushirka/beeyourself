@extends('layouts.user')

@section('title')
<title>Bee Yourself | Diary</title>
@endsection

@section('includes')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/diary.css') }}" >
@endsection

@section('content')
    <div class="create-form">
    <h1> article</h1>
    <form method="POST" action="{{ route('edit_article') }}">
            @csrf
            <label for="header">Title</label>
            <input id="header" name="title" type="text" value="{{$article->title}}">
            <label for="body">Write here your thoughts</label>
            <textarea rows="15" cols="124" id="body" name="article">
                {{$article->body}}
            </textarea>
            <label for="picture">Picture link</label>
            <input id="picture" name="pic" type="text" value="{{$article->image}}">
            <input id="id" name="id" type="hidden" value="{{$article->id}}">
            <input type="submit">
        </form>
    </div>
@endsection