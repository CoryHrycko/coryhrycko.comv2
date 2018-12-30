<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name','coryscorrner')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href ="{{asset('css/app.css')}}">
        <!-- Styles -->
    </head>
    <body>
            @yield('content')
        <script src= "{{asset('js/animate.js')}}" ></script>
        <script src= "{{asset('js/app.js')}}" ></script>
    </body>
</html>
