<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>{{config('app.name')}}</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-topx">

    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="/">{{config('app.name')}}</a>
        </div>

        <ul class="nav navbar-nav ">
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
    </div>

</nav>

<div class="container">
    @yield('content')
</div>



<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/app.css')}}"></script>
</body>

</html>