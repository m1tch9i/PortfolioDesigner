<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href={{ mix ('css/app.css')}}>
<link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="shortcut icon" type="image/jpg" href="{{url('/images/NameLogoWhite.png')}}"/>
<head>
    <title>Michelle A. Kiew</title>
</head>
<body>
    <nav data-aos="fade-down" data-aos-duration="1800">
        <div class="row">
            <div class="col-2">
                <img class="logo" src="{{url('/images/NameLogoWhite.png')}}" alt="">
            </div>
            <div class="title left col-1">
                <a href="/"><h1>Title<h1></a>
            </div>
            <div class="navigation center col-1 offset-3">
                <a href="/">Home</a>
            </div>
            <div class="navigation center col-1">
                <a href="/about">About</a>
            </div>
            <div class="navigation center col-1">
                <a href="/models">Models</a>
            </div>
            <div class="navigation center col-1">
                <a href="/programming">Programming</a>
            </div>
            <div class="navigation center col-2">
                <a href="/other">Other Works</a>
            </div>

        </div>

    </nav>
