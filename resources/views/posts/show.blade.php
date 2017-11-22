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

        <div class="pull-left">
            <a href="/" class="btn btn-default">Go back</a>
        </div>

        <div class="pull-right">
            <a href="/post/edit/{{$post->id}}" class="btn btn-success">Edit</a>
            <a href="/post/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>

@endsection