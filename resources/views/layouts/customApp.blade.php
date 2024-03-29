<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased rounded-md shadow">
        <div class="min-h-screen bg-gray-100">
            @if(Auth::check())
                @livewire('navigation-dropdown')

            @else
                @include('inc.header')
            @endif

            <main class="h-screen px-15 py-5">
                @yield('content')
            </main>
        </div>
        
        @livewireScripts
        <script>
            window.onload = function () {
                document.body.classList.add('loaded_hiding');
                
                window.setTimeout(function () {
                document.body.classList.add('loaded');
                document.body.classList.remove('loaded_hiding');
                }, 500);

            }        
        </script>
        
        <script src="js/app.js"></script>
    </body>
</html>
