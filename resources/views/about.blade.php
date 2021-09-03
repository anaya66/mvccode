<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> TEST YOUR SKILL</title>
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>

<body>
<div class="header">
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo"><a href="/">Test Your Skill</a></span>
            </div>
            <div class="col-md-6 text-right">
                    <ul>
                    @if (Auth::guest())
                        <li><a href="/login" class="pull-right btn sub1">Login</a></li>
                        <li><a href="/register" class="pull-right btn sub1">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
            </div>
        </div>
    </div><!--header row closed-->
</div>

<div class="bg1">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1 class="text-orange p-5">About us</h1>
            </div>
        </div>
        <div class="row footer">
            <div class="col-md-3 box">
                <a href="/about" target="_blank">About us</a>
            </div>
            <div class="col-md-3 box">
                <a href="/home">Dashboard</a>
            </div>
            <div class="col-md-3 box">
                <a href="/developers">Developers</a>
            </div>
            <div class="col-md-3 box">
                <a href="/register">Sign Up</a>
            </div>
        </div>
    </div>

</div>


</body>
</html>
