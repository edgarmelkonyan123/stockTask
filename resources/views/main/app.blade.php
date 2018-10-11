<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="/">Валюты</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <span class="navbar-text ml-auto">
                    <button onclick="getStocks()" class="update-stock btn btn-success">обновить данные</button>
                </span>
            </div>
        </nav>
            @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{ asset('js/main.js') }}"></script>
</html>
