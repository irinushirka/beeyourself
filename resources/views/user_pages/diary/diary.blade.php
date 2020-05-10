@extends('layouts.user')

@section('title')
<title>Bee Yourself | Diary</title>
@endsection

@section('includes')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/diary.css') }}" >
@endsection

@section('content')
    <div class="add-article-btn">
        <a href="{{ route('create_article_page') }}">New</a>
    </div>
    <div class="frame">
        <div class="sub-menu-frame">
            <div class="year-articles">
                <h3>2020</h3>
                @foreach($articles as $one)
                <ul><li class="more-articles"><a href="/diary/{{$one->id}}">{{ $one->title }}</a></li></ul>
                @endforeach
            </div>
        </div>
        @foreach($articles as $one)
            <div class="post-frame">
                <h2>{{ $one->title }}</h2>
                <div class="article-preview">
                    <p>{{substr($one->body, 0, 256)}}...</p>
                </div>
                
                <img src="{{$one->image}}">

                <div class="bottom-btns">
                    <div class="b-btn">
                        <a href="/diary/edit/{{$one->id}}">Edit</a>
                    </div>

                    <div class="b-btn">
                        <a href="/diary/delete/{{$one->id}}">Delete</a>
                    </div>

                    <div class="read-more-btn b-btn" id='readmore'>
                        <a href="/diary/{{$one->id}}">Read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="diary-links">
            {{ $articles->links() }}
        </div>
    </div>
@endsection