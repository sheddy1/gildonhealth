@include('about.header')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    //@vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="icon" href="{{ asset('images/homepage/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
</head>
<body>
    <div class=" flex flex-col gap-[50px] justify-center items-center">
        @yield('header')
    </div>
</body>
</html>
