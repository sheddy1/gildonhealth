@include('homepage.header')

@include('homepage.benefits')

@include('homepage.about')

@include('homepage.mobileapp')

@include('homepage.howitworks')

@include('homepage.contact')

@include('homepage.information')

@include('homepage.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
    <link rel="icon" href="{{ asset('images/homepage/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage/welcome.css') }}">
</head>
<body>
    <div class=" flex flex-col gap-[50px] justify-center items-center">
        @yield('header')

        @yield('benefits')

        @yield('about')

        @yield('mobileapp')

        @yield('howitworks')

        @yield('contact')

        @yield('information')

        @yield('footer')
    </div>
</body>
</html>
