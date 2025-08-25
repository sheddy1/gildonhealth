@include('about.header')

@include('about.about')

@include('about.information')

@include('about.team')

@include('about.whyus')

@include('homepage.footer')

@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="icon" href="{{ asset('images/homepage/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class=" flex flex-col gap-[50px] justify-center items-center">
        @yield('header')

        @yield('about')

        @yield('information')

        @yield('team')

        @yield('whyus')

        @yield('footer')
    </div>
</body>
</html>
