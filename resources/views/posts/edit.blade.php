@extends('layouts.app')

@section('content')
    <h1>Hirdetés módosítása</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/FORM-data']) !!}
        <div class="form-group">
            {{Form::label('Title', 'Title')}}
            {{Form::text('Title', $post->Title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('Ar', 'Ár')}}
            {{Form::number('Ar', $post->Ar, ['placeholder' => 'Ár'])}} Ft
        </div>
        <div class="form-group">
            {{Form::label('Varos', 'Város')}}
            {{Form::text('Varos', $post->Varos, ['class' => 'form-control', 'placeholder' => 'Város'])}}
        </div>
        <div class="form-group">
            {{Form::label('irsz', 'Irányítószám')}}
            {{Form::number('irsz', $post->irsz, ['placeholder' => 'Irányítószám'])}}
        </div>
        <div class="form-group">
            {{Form::label('Utca', 'Utca')}}
            {{Form::text('Utca', $post->Utca, ['class' => 'form-control', 'placeholder' => 'Utca'])}}
        </div>
        <div class="form-group">
            {{Form::label('Hazszam', 'Házszám')}}
            {{Form::number('Hazszam', $post->Hazszam, ['placeholder' => 'Házszám'])}}
        </div>
        <div class="form-group">
            <tr>
                {{Form::label('Emelet', 'Emelet')}}
                {{Form::number('Emelet', $post->Emelet, ['placeholder' => 'Emelet'])}}
            </tr>
            <tr>
                {{Form::label('Ajto', 'Ajtó')}}
                {{Form::number('Ajto', $post->Ajto, ['placeholder' => 'Ajtó'])}}
            </tr>
        </div>
        <div class="form-group">
            {{Form::label('Megjegyzesek', 'Leírás')}}
            {{Form::textarea('Megjegyzesek', $post->Megjegyzesek, ['class' => 'form-control', 'placeholder' => 'Leírás'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Módosítás', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
