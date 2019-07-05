@extends('layouts.app')

@section('content')
    <a style="margin-bottom: 25px;" class="btn btn-secondary" href="/posts" role="button">Terug</a>
    <h1>{{$post->title}}</h1>
        <div>
            <p>{!!$post->body!!}</p>
            <hr>
            <small>Geschreven op {{$post->created_at}}</small>
        </div>
@endsection