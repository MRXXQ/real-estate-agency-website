@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Saját hirdetések') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Hirdetés Feladása</a>

                    @if (count($posts)>0)
                    <table class="table table-stripped">
                        @foreach ($posts as $post)
                        <br>
                            <tr>
                                <td>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h3><a href="/posts/{{$post->id}}">{{$post->Title}}</a></h3>
                                        <small>{{$post->user->name}} hirdetése, amit {{$post->created_at}}-kor tett közzé</small>
                                    </div></td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Módosítás</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE ')}}
                                    {{Form::submit('Törlés', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>

                        @endforeach
                    </table>
                    @else <h3>Még nincs hirdetésed. Tedd meg most!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
