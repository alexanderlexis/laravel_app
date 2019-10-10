@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 style="display: inline-block; margin-top: 5px">Dashboard</h2>
                    <a href="/posts/create" class="btn btn-primary float-right">Nieuwe Post</a>
                </div>
                <div class="card-body">
                    <h3>Jouw Posts</h3>
                    {{--@foreach($posts as $post)--}}
                        {{--<div class="card" style="margin-bottom: 25px;">--}}
                            {{--<div class="card-body">--}}
                                {{--<h3><a href="/posts/{{$post->post_id}}">{{$post->title}}</a></h3>--}}
                                {{--<small>Geschreven op {{$post->created_at}}</small>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
