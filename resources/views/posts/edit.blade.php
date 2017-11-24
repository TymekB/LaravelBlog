@extends('layouts.app')
@section('content')

    <h1>Edit post</h1>
    <hr>

    {!! Form::open() !!}

    <div class="form-group">

        {{Form::label('title', 'Post title')}}

        {{ Form::text('title', $post->title, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">

        {{Form::label('body', 'Post body')}}

        {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Post body']) }}

    </div>

    <div class="form-group">

        {{ Form::submit('&#xe808;&nbsp;Update post', ['class' => 'btn btn-success', 'style' => 'font-family: fontello, Open Sans']) }}

    </div>

    {!! Form::close() !!}

    @foreach($errors->all() as $error)

        <div class="alert alert-danger">
            {{$error}}
        </div>

    @endforeach

@endsection