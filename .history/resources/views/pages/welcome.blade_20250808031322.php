@include('homepage.header')

@include('homepage.benefits')

@include('homepage.about')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="{{ asset('images/homepage/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/welcome.css') }}">
</head>
<body>
    <div>
        @yield('header')
        @yield('benefits')
        @yield('about')
    </div>
</body>
</html>
