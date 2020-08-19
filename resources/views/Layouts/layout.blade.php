<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Muhammad Ijaz Ali</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >   
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
     @include('header.navbar');
     @include('contact.errors');
    <div class="container">
        @yield('content');
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>          

    </html>
