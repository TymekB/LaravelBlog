@extends('layouts.app')
@section('content')

    <h1>Create new post</h1>
    <hr>

    {!! Form::open() !!}

    <div class="form-group">

        {{Form::label('title', 'Post title')}}

        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">

        {{Form::label('body', 'Post body')}}

        {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Post body']) }}
    </div>

    {{ Form::submit('Create', ['class' => 'btn btn-success']) }}

    {!! Form::close() !!}

@endsection