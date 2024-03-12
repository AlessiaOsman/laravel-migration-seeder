<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}} | @yield('title')</title>
    
     <!-- Styles -->
    @vite('resources/js/app.js')

    <!--CDN-->
    @yield('cdns')
</head>

<body>
    @include('includes.header')
    <main class='container mt-5'>
        @yield('main-content')
    </main>
</body>

</html>
