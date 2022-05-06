<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--// SITES TITLE // -->
    <title>TEACHHOUSE - Клуб Разговорного Английского</title>
    <!-- CSS FILES -->
    @include('layouts.styles')
    <!-- // JS FILES // -->
    @include('layouts.scripts')
</head>
<body>
<!-- Navbar section -->
@include('layouts.navbar')
@yield('content')
<!-- ==============================================
FOOTER
=============================================== -->
@include('layouts.footer')
</body>
</html>
