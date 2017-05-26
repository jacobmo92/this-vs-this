<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    </head>
    <body id="@yield('page-id')">
        @include('layouts.header')

        <div class="container main-content">
            @yield('mainContent')
        </div>

        @include('layouts.footer')
    </body>
</html>
