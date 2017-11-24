@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">

        <h4>Your posts</h4>
        <hr>

        @if(count($posts) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>created at</th>
                        <th>last update</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                        <tr class="clickable-row" data-href="/post/{{$post->id}}">
                            <td>{{$post->id}}</td>
                            <td>{!! $post->title !!}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            You have no post

        @endif
        <br>
        <a href="post/create" class="btn btn-success">Create post</a>
    </div>
</div>
@endsection