<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!--favicon-->
    <!--estilos-->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!--header-->
<!--nav-->
@include('layouts.partials.header')

    @yield('content')
    <!--footer-->
    @include('layouts.partials.footer')
    <!--script-->
</body>
</html>