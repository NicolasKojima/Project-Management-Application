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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <style>
        .links {
        display: grid;
        grid-template-columns: 87% 13%;
        gap: 5px;
        align-items: center;
        justify-content: center;
        margin-bottom: 3rem;
        border-bottom: black solid 2px;
        }
        /* calendar.css */

        /* calendar.css */

        /* calendar.css */
        .space {
            width:100%;
            height:15px;
            background-color: white;
        }
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }

        .calendar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height:100vh;
            overflow-x: hidden;
        }

        .calendar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height:100%;
            padding: 10px;
            position:relative;
        }

        .nav-button {
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .calendar-horizontal-grid{
            position:absolute;
            width: 100%;
            height:100%;
            display:grid;
            grid-template-columns: 15% 85%;
            top:0;
        }

        .days-container {
            display: flex;
            justify-content: flex-start;
            overflow-x: scroll;
            width:100%;
        }

        .day {
            min-width: 17%;
            flex: 1;
            line-height: 50px;
            text-align: center;
            border: 1px solid #ccc;
            background-color: #fff;
            white-space: nowrap;
        }

        .left-colomn{
            height:100%;
            background-color: lightgray;
            border: 3px grey solid;
        }

        .grid-item {
        border-top: 1px solid #000; /* Border for each box */
        border-bottom: 1px solid #000;
        padding: 10px; /* Add spacing inside the box */
        margin-top: 10px; 
        width: 100%;
        height: 50px;
        background-color: white;
        }

        .title {
        height:50px;
        width:100%;
        font-size: 2em;
        font-weight: bold;
        color: #333;
        /* background-color: white; */
        }

/* Adjust the styles as needed */

        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            <!-- Page Content -->
            <main>
                <div class="space"></div>
                <div class="calendar-container">
                    <div class="calendar">
                        <div class="calendar-horizontal-grid">
                            <div class="left-colomn">
                                <div class="title">
                                    <div class="title-month"> August </div>
                                </div>
                                @foreach ($users as $user) 
                                    <div class="grid-item">
                                        <p>{{$user->name}}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="days-container">
                                @for ($i = 1; $i <= 31; $i++)
                                    <div class="day"> {{ $i }} </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            <script src="{{ asset('js/calendar.js') }}">
                // calendar.js

                const daysContainer = document.querySelector('.days-container');
                const prevMonthButton = document.getElementById('prev-month');
                const nextMonthButton = document.getElementById('next-month');

                // Handle navigation to previous month
                prevMonthButton.addEventListener('click', () => {
                    daysContainer.scrollLeft -= daysContainer.clientWidth;
                });

                // Handle navigation to next month
                nextMonthButton.addEventListener('click', () => {
                    daysContainer.scrollLeft += daysContainer.clientWidth;
                });

            </script>
                
            </main>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
