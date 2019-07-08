@extends('layouts.app')

@section('content')
    <h1>Post bewerken</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->post_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, [
            'class' => 'form-control',
            'placeholder' => 'Titel'
            ])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, [
            'id' => 'article-ckeditor',
            'class' => 'form-control',
            'placeholder' => 'Body tekst'
            ])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection