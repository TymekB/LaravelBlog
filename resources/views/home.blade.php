@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><i class="icon-sliders"></i>Dashboard</div>

    <div class="panel-body">

        <div class="pull-left">
            <h4><i class="icon-doc-text"></i>Your posts</h4>
        </div>

        <div class="pull-right">
            <a href="post/create" class="btn btn-success"><i class="icon-plus"></i>Create post</a>
        </div>

        <div style="clear: both"></div>
        <hr>

        @if(count($posts) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>created at</th>
                        <th>last update</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                        <tr class="clickable-row" data-href="/post/{{$post->id}}">
                            <td>{{$post->id}}</td>
                            <td>{!! $post->title !!}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td><a href="/post/edit/{{$post->id}}" class="btn btn-default btn-sm"><i class="icon-pencil"></i>Edit</a> <a href="/post/delete/{{$post->id}}" class="btn btn-danger btn-sm"><i class="icon-trash-empty"></i>Delete</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <br>
            You have no post
        @endif

        <h4><i class="icon-comment"></i>Your comments</h4>
        <hr>

        @if(count($comments) > 0)

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>body</th>
                    <th>post title</th>
                    <th>created at</th>
                    <th>last update</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{!! $comment->id !!}</td>
                            <td>{{$comment->body}}</td>
                            <td>{{$comment->post->title}}</td>
                            <td>{{$comment->created_at}}</td>
                            <td>{{$comment->updated_at}}</td>
                            <td><a href="#" class="btn btn-default btn-sm"><i class="icon-pencil"></i>Edit</a> <a href="/comment/delete/{{$comment->id}}" class="btn btn-danger btn-sm"><i class="icon-trash-empty"></i>Delete</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            You have no comments
        @endif
    </div>
</div>
@endsection