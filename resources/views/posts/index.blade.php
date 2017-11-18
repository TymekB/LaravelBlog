@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
    <h1>Welcome to LaravelBlog</h1>
    <p>Simple blog page powered by <a href="https://laravel.com/" target="_blank">Laravel PHP Framework</a></p>
</div>

<div class="row">

    <div class="col-md-8">

        <div class="panel panel-default">

            <img src="{{asset('img/post_noimage.png')}}">
            <div class="panel-body">
                <h2>Post title</h2>

                <hr>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras erat justo, finibus sed tristique vel, lobortis eget urna. Integer finibus pretium sapien non eleifend. Quisque fermentum non enim vel feugiat. Quisque viverra, nulla in dictum condimentum, ex tellus semper ipsum, id ultrices purus velit sed nulla. Praesent nibh lacus, suscipit quis sodales id, tempus sed urna. Phasellus magna urna, porttitor id auctor sed, consequat sit amet lectus.</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <div class="panel-footer">
                Written by admin
            </div>

        </div>

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
                            <li><a href="#">Programming</li>
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