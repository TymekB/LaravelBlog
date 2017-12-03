@extends('layouts.app')
@section('content')

    <h1>Edit comment</h1>
    <hr>

    {!! Form::open() !!}

    <div class="form-group">

        {{Form::label('body', 'Comment body')}}

        {{ Form::textarea('body',$comment->body, ['class' => 'form-control', 'id' => 'article-ckeditor']) }}

    </div>

    <div class="form-group">

        {{ Form::submit('&#xe808;&nbsp;Update', ['class' => 'btn btn-success', 'style' => 'font-family: fontello, Open Sans']) }}

    </div>

    {!! Form::close() !!}

    @foreach($errors->all() as $error)

        <div class="alert alert-danger">
            {{$error}}
        </div>

    @endforeach

@endsection