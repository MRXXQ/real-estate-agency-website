@extends('layouts.app')

@section('content')
    <h1>Hirdetés Feladása</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/FORM-data']) !!}
        <div class="form-group">
            {{Form::label('Title', 'Title')}}
            {{Form::text('Title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('Ar', 'Ár')}}
            {{Form::number('Ar', '', ['placeholder' => 'Ár'])}} Ft
        </div>
        <div class="form-group">
            {{Form::label('Varos', 'Város')}}
            {{Form::text('Varos', '', ['class' => 'form-control', 'placeholder' => 'Város'])}}
        </div>
        <div class="form-group">
            {{Form::label('irsz', 'Irányítószám')}}
            {{Form::number('irsz', '', ['placeholder' => 'Irányítószám'])}}
        </div>
        <div class="form-group">
            {{Form::label('Utca', 'Utca')}}
            {{Form::text('Utca', '', ['class' => 'form-control', 'placeholder' => 'Utca'])}}
        </div>
        <div class="form-group">
            {{Form::label('Hazszam', 'Házszám')}}
            {{Form::number('Hazszam', '', ['placeholder' => 'Házszám'])}}
        </div>
        <div class="form-group">
            <tr>
                {{Form::label('Emelet', 'Emelet')}}
                {{Form::number('Emelet', "", ['placeholder' => 'Emelet'])}}
            </tr>
            <tr>
                {{Form::label('Ajto', 'Ajtó')}}
                {{Form::number('Ajto', "", ['placeholder' => 'Ajtó'])}}
            </tr>
        </div>
        <div class="form-group">
            {{Form::label('Megjegyzesek', 'Leírás')}}
            {{Form::textarea('Megjegyzesek', '', ['class' => 'form-control', 'placeholder' => 'Leírás'])}}
        </div>
        <div class="form-group">
             {{Form::file('cover_image')}}
        </div>
    {{Form::submit('Hirdetek!', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
