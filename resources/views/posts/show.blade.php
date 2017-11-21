@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>
        by <b>admin</b> posted on {{$post->created_at}}

        <hr>

        <img src="{{asset('img/post_noimage.png')}}" class="post-img">

        <div class="text-justify">
            <p>{!! $post->body !!}</p>
        </div>

        <a href="/" class="btn btn-default">Go back</a>
    </div>
</div>

@endsection