<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7bd1cbe5a78ad39d3b0f6029a5610e2f41131b13
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

        <!-- Styles -->
        @livewireStyles

        <style>
            .navbar-grid {
                width: 100%;
                display: grid;
                grid-template-columns: 52% 12% 12% 12% 12%; 
                grid-template-rows: min-content; 
                position: relative;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <div class="navbar-grid">
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <a href="projects" class="btn btn-primary my-2" > Projects </a>          
                        </div>
                    </header>
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <a href="about-us" class="btn btn-primary my-2" > About Us </a>
                        </div>
                    </header>
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <a href="calendar-event" class="btn btn-primary my-2" > Calendar </a>
                        </div>
                    </header>
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <a href="contact-form" class="btn btn-primary my-2" > Contact Us</a>
                        </div>
                    </header>
                </div>
            @endif

            <!-- Page Content -->
            <main>
    
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
<<<<<<< HEAD
=======
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Profile') }}
        </h2>
        
    </x-slot>
</x-app-layout>

>>>>>>> parent of 630b73c (finished for now, testing permissions elsewhere)
=======
>>>>>>> 7bd1cbe5a78ad39d3b0f6029a5610e2f41131b13
