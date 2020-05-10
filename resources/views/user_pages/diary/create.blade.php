@extends('layouts.user')

@section('title')
<title>Bee Yourself | Diary</title>
@endsection

@section('includes')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/diary.css') }}" >
@endsection

@section('content')
    <div class="create-form">
        <h1>Create article</h1>
        <form method="POST" action="{{ route('new_article') }}">
            @csrf
            <label for="header">Title</label>
            <input id="header" name="title" type="text">
            <label for="body">Write here your thoughts</label>
            <textarea rows="15" cols="124" id="body" name="article"></textarea>
            <label for="picture">Picture link</label>
            <input id="picture" name="pic" type="text">
            <input type="submit">
        </form>
    </div>
@endsection