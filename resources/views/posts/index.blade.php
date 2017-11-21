@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
    <h1>Welcome to {{config('app.name')}}</h1>
    <p>Simple blog page powered by <a href="https://laravel.com/" target="_blank">Laravel PHP Framework</a></p>
</div>

<div class="row">

    <div class="col-md-8">
        @foreach($posts as $post)
            <div class="panel panel-default">

                <img src="{{asset('img/post_noimage.png')}}">
                <div class="panel-body">
                    <h2>{!! $post->title !!}</h2>

                    <hr>

                    <p>{!! $post->body !!}</p>
                    <a href="/post/{{$post->id}}" class="btn btn-primary">Read more</a>
                </div>

                <div class="panel-footer">
                    Written on {{$post->created_at}}
                </div>

            </div>
        @endforeach

    </div>

    <div class="col-md-4">

        <div class="panel panel-default">

            <div class="panel-heading">About me</div>

            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt id velit non sagittis. Praesent dictum eros augue, eget viverra ante efficitur at.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus nibh, pellentesque semper facilisis in, ultrices vel lectus. In ut nisl imperdiet.</p>
            </div>

        </div>

        <div class="panel panel-default">

            <div class="panel-heading">Categories</div>

            <div class="panel-body">

                <div class="row">

                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Laravel</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Tutorials</a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection