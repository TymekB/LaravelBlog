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
                        <th>body</th>
                        <th>created at</th>
                        <th>last update</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{!! $post->title !!}</td>
                            <td>{!! $post->body !!}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            You have no post
        @endif
    </div>
</div>
@endsection
