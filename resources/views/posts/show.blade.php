@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-default">Vissza az összes hirdetéshez</a>
            <h1>{{$post->Title}}</h1>
            @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Módosítás</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE ')}}
            {{Form::submit('Törlés', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @endif
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        <br><br>
        <div>
            <p>Cuccok listázása a postból</p>
        </div>
        <hr>
        <small>{{$post->user->name}} hirdetése, amit {{$post->created_at}}-kor tett közzé</small>
        <br>
        <h2>{{$post->user->name}} elérhetőségei: email {{$post->user->email}}, mobil: {{$post->user->mobil}}.</h2>
    </div>
@endsection
