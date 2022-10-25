@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->Title}}</a></h3>
                    <small>{{$post->user->name}} hirdetése, amit {{$post->created_at}}-kor tett közzé</small>
                </div>
            </div>
            <hr>
        @endforeach
    @else
        <p>No posts just yet</p>
    @endif
@endsection
