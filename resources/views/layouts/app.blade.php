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

            .container-contents {
                width: 90vw;
                height: 70vh;
                margin-right: auto;
                margin-left: auto;
                margin-top: 10px;
                background-color:black;
            }

            .slideshow{
                position: relative;
            }

            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 40%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
                }
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
                }

                .row:after {
                content: "";
                display: table;
                clear: both;
                }
            
            .example-grid {
                width: 100%;
                display: grid;
                grid-template-columns: 60% 40%; 
                height:60vh;
            }

            .gallery-example{
                align-self: center;
                justify-content: center;
                margin-left:2vw;
                width: 58vw;
                height:60vh;
                background-color: beige;
                margin-top:5vh;
            }

            .description-example{
                margin-left:3vw;
                margin-right:2vw;
                align-self: center;
                justify-content: center;
                width: 35vw;
                height:60vh;
                background-color: lightcyan;
                margin-top:5vh;
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
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </header>
                </div>
            @endif

            <!-- Page Content -->
            <main>
                <div class="example-grid">
                    <div class="gallery-example"
                        <p>               Insert the gallery here</p>
                        <a href="dash" class="btn btn-primary my-2" >           Gallery Testing page </a>
                    </div>
                    <div class="description-example">
                        <p> Insert project description for each photo slide here </p>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
