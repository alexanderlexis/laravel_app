@extends('layouts.app')

@section('content')
    <a style="margin-bottom: 25px;" class="btn btn-secondary" href="/posts" role="button">Terug</a>
    <h1>{{$post->title}}</h1>
        <div>
            <p>{!!$post->body!!}</p>
            <hr>
            <small>Geschreven op {{$post->created_at}}</small>
            <hr>
            <a class="btn btn-outline-primary" href="/posts/{{$post->post_id}}/edit" role="button">Post bewerken</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->post_id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden("_method", "DELETE")}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
@endsection