@extends('layouts.user')

@section('title')
<title>Bee Yourself | To-Do</title>
@endsection

@section('includes')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/todo.css') }}" >
<script src="{{URL::asset('js/scripts.js')}}"></script>
@endsection

@section('content')
<div class="main">
    <div class="headline">
        <button id="plus" class="plus" onclick="addTaskForm(id)">+</button>
        <p>Things to do</p>       
    </div>
    <div class="to-do-list">
        <form id="addform" method="POST" action="/todo">
            @csrf
            <input id="task" name="task" type="text" class="headline add-task">
        </form>
        <div class="task-line"><h2>- Uncompleted tasks -</h2></div>
        @foreach($uncom_tasks as $one)
            <div class="headline task-line">
                <input id="check-task-{{$one->id}}" type="checkbox" class="checkbox" onclick="document.location.href='/todo/update/{{$one->id}}'" unchecked hidden>
                <label for="check-task-{{$one->id}}"><input id="inptask" type="text" value="{{$one->task}}" onblur="document.getElementById('inptask').readonly='true';" readonly="true"></label>
                
                <div class="delete-btn">
                    <buttton onclick = "document.location.href='/todo/delete/{{$one->id}}'">
                        <img src="{{URL::asset('images/delete.png')}}">
                    </buttton>
                </div>
                
            </div>
        @endforeach

        <div class="task-line"><h2>- Completed tasks -</h2></div>
        @foreach($com_tasks as $one)
            <div class="headline task-line">
                <input id="check-task-{{$one->id}}" type="checkbox" class="checkbox" onclick="document.location.href='/todo/update/{{$one->id}}'" checked hidden>
                <label for="check-task-{{$one->id}}"><input id="inptask" type="text" value="{{$one->task}}" onblur="document.getElementById('inptask').readonly='true';" readonly="true"></label>
                
                <div class="delete-btn">
                    <buttton onclick = "document.location.href='/todo/delete/{{$one->id}}'">
                        <img src="{{URL::asset('images/delete.png')}}">
                    </buttton>
                </div>
                
            </div>
        @endforeach
    </div>

   <!-- <div class="headline">
        <p>Completed tasks</p>
    </div>

    <div class="to-do-list">
        @foreach($com_tasks as $one)
            <div class="headline task-line">
                <input id="check-task-{{$one->id}}" type="checkbox" checked hidden>
                <label for="check-task" onclick = "">{{$one->task}}</label>
                <div class="delete-btn">
                    <buttton onclick = "document.location.href='/todo/delete/{{$one->id}}'">
                        <img src="{{URL::asset('images/delete.png')}}">
                    </buttton>
                </div>
            </div>
        @endforeach
    </div> -->
</div>
@endsection