<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Новости науки</title>
    <link rel="stylesheet" href="{{asset('stylesheets/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('stylesheets/main.css')}}">
    <link rel="stylesheet" href="{{asset('stylesheets/app.css')}}">
    <script src="{{asset('javascripts/modernizr.foundation.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fonts/ligature.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
</head>
<body>

@include('layouts.navigation')
@yield('header', View::make('layouts.header'))
@yield('content')
@yield('slider')
@include('layouts.footer')

<script src="{{asset('javascripts/foundation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('javascripts/app.js')}}" type="text/javascript"></script>
</body>
