<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="font-sans antialiased">
        <div class="flex">
            <div class="bg-gray-100 shadow-md w-52 h-screen">
                <img src="{{asset('logoo.png')}}" alt="SMC" class="w-36 mt-5 mx-auto">
                <div class="mt-4 grid text-lg">
                <a href="{{route('dashboard')}}" class="pl-4 hover:bg-gray-200 py-2 border-b">Dashboard</a>
                <a href="{{route('category.index')}}" class="pl-4 hover:bg-gray-200 py-2 border-b">Categories</a>
                <a href="" class= "pl-4 hover:bg-gray-200 py-2 border-b">Products</a>
                <a href="" class= "pl-4 hover:bg-gray-200 py-2 border-b">Orders</a>
                <a href="" class= "pl-4 hover:bg-gray-200 py-2 border-b">Logout</a>
            </div>
        </div>
        <div class="p-4 flex-1">
        <h1 class="font-bold text-3xl">@yield('title')</h1>
        <hr class="bg-red-600 h-1.5 mb-4" >
        @yield('content')
        </div>
    </body>
</html>
