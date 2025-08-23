@include('careers.header')

@include('careers.hero')

@include('careers.howitworks')

@include('careers.banner')

@include('careers.whychooseus')

@include('homepage.footer')

@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Careers</title>
    <link rel="icon" href="{{ asset('images/homepage/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/careers/careers.css') }}">
</head>
<body>
    <div class=" flex flex-col gap-[50px] justify-center items-center">
        @yield('header')

        @yield('hero')

        @yield('howitworks')

        @yield('banner')

        @yield('whychooseus')

        @yield('footer')
    </div>
</body>
</html>
