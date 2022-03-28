<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Harry Potter World</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Yusei Magic' rel='stylesheet'>
        
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/marauder.css') }}" rel="stylesheet" type="text/css" >

        <!-- Scripts -->
        <script type="text/javascript">
            function toggleMap() {
                var map = document.querySelector('.map-base');
                map.classList.toggle("active");
            }
        </script>
    </head>
    <body class="antialiased">
        <div class="wrap">
            <div class="content">
                <div class="text-center home">
                    <a href="/">Harry Potter World</a>
                </div>