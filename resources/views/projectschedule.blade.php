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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

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
            min-width: 10%;
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
        color: white;
        border-top: 1px solid #000; /* Border for each box */
        border-bottom: 1px solid #000;
        padding: 10px; /* Add spacing inside the box */
        margin-top: 10px; 
        width: 100%;
        height: 50px;
        background-color: #0F2770;
        }

        .title {
        height:50px;
        width:100%;
        font-size: 2em;
        font-weight: bold;
        color: #333;
        /* background-color: white; */
        }

        .space {
            width: 100%;
            height:60px;
        }

        .calendar_title_M_Y {
            padding:20px;
            font-size: 300;
            font-weight: 300;
        }

        .users-event {
            background-color: #E2FDFF;
            position:absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;          
        }

        .date {
            margin-bottom: 23px;
        }

        .event-span {
            position:relative;
            border-top: #000 solid 1px;
            border-bottom: #000 solid 1px;
            margin-bottom:9.5px;
            height:50.5px;
        }

        .selection-button{
            margin-left: 30px;
        }

        .title {
            padding-left: 20px;
            padding-top:5px;
            font-family: verdana, sans-serif;
            font-weight:normal !important;
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
                <div class="space">
                    <div class="title">
                        <p> DC Department Individual Schedules </p>
                        <!-- <div class="title-month-year">
                            <select id="monthSelect" class="selection-button">
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}">{{ \Carbon\Carbon::create(null, $i)->format('F') }}</option>
                                @endfor
                            </select>
                            <select id="yearSelect" class="selection-button">
                                @for ($i = date("Y"); $i <= date("Y") + 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <button id="updateCalendar" onclick="updateCalendar()" style="font-size: 20px; margin-left: 30px">Update</button>
                        </div> -->
                    </div>
                </div>
                <div class="calendar-container">
    <div class="calendar">
        <div class="calendar-horizontal-grid">
            <div class="left-column">
                <div class="calendar_title_M_Y">
                    {{ \Carbon\Carbon::now()->format('F') }}
                    {{ \Carbon\Carbon::now()->format('Y') }}
                </div>
                @foreach ($users->filter(function ($user) {
                    return $user->hasRole('Employee');
                }) as $user)
                    <div class="grid-item">
                        <p>{{$user->name}}</p>
                    </div>
                @endforeach

            </div>
            <div class="days-container">
                @for ($i = 1; $i <= 31; $i++)
                    <div class="day">
                        <div class="date">
                            {{ $i }}
                        </div>
                        @foreach ($users as $user)
                            @if ($user->hasRole('Employee'))
                                <div class="event-span">
                                    @foreach ($user->events as $event)
                                        @if (\Carbon\Carbon::parse($event->event_start)->day <= $i && \Carbon\Carbon::parse($event->event_end)->day >= $i)
                                            <span class="users-event">{{ $event->project_name }}</span>
                                        @else
                                            <span class="user-noevent">&nbsp;</span>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endforeach

                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>


            </main>
        </div>
        @stack('modals')
        @livewireScripts
        <script>
            function updateCalendar() {
                const monthSelect = document.getElementById("monthSelect");
                const yearSelect = document.getElementById("yearSelect");
                const calendarTitle = document.querySelector(".calendar_title_M_Y");
                const daysContainer = document.querySelector(".days-container");

                const selectedMonth = monthSelect.value;
                const selectedYear = yearSelect.value;
                const daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();

                // Update the calendar title
                calendarTitle.textContent = `${moment().month(selectedMonth - 1).format('MMMM')} ${selectedYear}`;

                // Clear the existing days
                daysContainer.innerHTML = "";

                // Populate the days container with new days
                for (let i = 1; i <= daysInMonth; i++) {
                    const dayDiv = document.createElement("div");
                    dayDiv.classList.add("day");
                    dayDiv.textContent = i;
                    daysContainer.appendChild(dayDiv);
                }
            }
        </script>

    </body>

</html>
