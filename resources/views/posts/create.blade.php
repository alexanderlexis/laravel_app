@extends('layouts.app')

@section('content')
    <h1>Nieuwe post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', [
        'class' => 'form-control',
        'placeholder' => 'Titel'
        ])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', [
        'id' => 'article-ckeditor',
        'class' => 'form-control',
        'placeholder' => 'Body tekst'
        ])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection