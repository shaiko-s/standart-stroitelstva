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
    <body>

        <div class="container_ {{ explode('.', \Route::currentRouteName())[0] }}">

            @if (isset($piece))
                {{ $piece }}
            @endif

            @auth
                @if (\Route::currentRouteName() == 'dashboard')
                    @include('layouts.navigation')
                @endif
            @endauth

            @if (\Route::currentRouteName() !== 'dashboard')
                <!-- Page Navigation -->
                @include('layouts.nav')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Page Popup Menu -->
        <x-popup.menu />

        {{-- <div id="overlay" class="overlay" style="{{ $success==true ? 'display: block;' : '' }}"></div> --}}
        <div id="overlay" class="overlay"></div>

        <x-popup.order-call />

        {{-- <x-popup.success :success="$success" /> --}}

        @if (isset($popup))
            {{ $popup }}
        @endif

    @if (session('success'))
        <x-popup.success :success="session('success')" />

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var overlay = document.getElementById('overlay');
                if (overlay.style.display == '') {
                    overlay.style.display = 'block';
                }
            });
        </script>
    @endif

    </body>
</html>
