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

        @if(Auth::check())

            @if(Auth::user()->id == $post->user_id)
                <div class="pull-right">
                    <a href="/post/edit/{{$post->id}}" class="btn btn-success"><i class="icon-pencil"></i>Edit</a>
                    <a href="/post/delete/{{$post->id}}" class="btn btn-danger"><i class="icon-trash-empty"></i>Delete</a>
                </div>
            @endif

        @endif

        <div style="clear: both"></div>

        <hr>

        <div class="panel panel-default">
            <div class="panel-heading"><i class="icon-comment"></i>Leave a comment</div>
            <div class="panel-body">
                {!! Form::open() !!}
                    <div class="form-group">
                        {{Form::textarea('body', null, ['class' => 'form-control', 'rows' => 4])}}
                    </div>

                    <div class="form-group">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </div>

                {!! Form::close() !!}

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            </div>
        </div>

        <h4>Comments <span class="badge">{{$commentsNum}}</span></h4>

        @foreach($comments as $comment)
            <div class="well">
                <div class="row">
                    <div class="col-md-1">
                        <img src="{{asset('img/user_noimage.png')}}" style="border-radius: 100%;">
                    </div>

                    <div class="col-md-11">
                        <h4>{{$comment->user->name}}</h4>
                        <p>{{$comment->body}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        {{$comments->links()}}

    </div>
</div>

@endsection