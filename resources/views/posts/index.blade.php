@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="margin-bottom: 25px;">
                <div class="card-body">
                    <h3><a href="/posts/{{$post->post_id}}">{{$post->title}}</a></h3>
                    <small>Geschreven op {{$post->created_at}}</small>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Geen posts gevonden</p>
    @endif
@endsection