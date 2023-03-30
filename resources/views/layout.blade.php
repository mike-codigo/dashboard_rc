<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ url('css/layout.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative p-4">
            <nav class="navtop">
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('users.index') }}">Usuários</a>
                <a href="{{ route('categorias.index') }}">Categorias</a>
                <a href="{{ route('home.contact') }}">Contact</a>
                <a href="{{ route('home.about') }}">About</a>
            </nav>
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    
            @yield('content')
            
        </div>
    </body>
</html>
