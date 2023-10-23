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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

        /* Initially hide the dropdown content */
        .dropdown-content {
            display: none;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            position: absolute;
            z-index: 1;
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
        background-color: #003300;
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
            font-size: 300;
            font-weight: 300;
            height: 10.1vh;
        }

        /* Style the dropdown container */
        .dropdown-content {
            display: none;
            color: #004d1a;
            position: absolute;
            background-color:white; /* Set a cheerful background color */
            border: 1px solid #d68fca; /* Border color */
            padding: 10px;
            left: 0; /* Position from the left edge of the parent element */
            z-index: 1;
        }

        /* Style the list items inside the dropdown */
        .dropdown-content ul {
            list-style: none;
            padding: 0;
        }

        /* Style each list item */
        .dropdown-content li {
            margin-bottom: 5px; /* Add some space between items */
        }

        /* Style the clickable span */
        .users-event.clickable {
            cursor: pointer; /* Change the cursor to a pointer when hovering */
            color: black; /* Change text color for a clickable appearance */
            text-decoration: underline; /* Add underline to indicate it's clickable */
        }

        /* Add a hover effect for the clickable span */
        .users-event.clickable:hover {
            color: #0052cc; /* Change text color on hover */
        }

        /* Style the "no event" span */
        .user-noevent {
            background-color: #f3f3f3; /* Background color for no events */
        }


        .users-event {
            background-color: #fbefea;
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

        .header {
            display:grid;
            grid-template-columns: 60%  40%;
        }

        .date_form{
            margin-top: 1.5vh;
            left:0px;
        }

        .month-display {
            font-size: x-large;
            padding:20px;
        }

        .time-selection-button{
            background-color: #e7a88a;
            padding: 10px;
            border-radius: 5px;
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
                    <div class="header">
                        <div class="title">
                            <p> DC Department Individual Schedules </p>
                        </div>
                        <div class="date_form">
                            <form method="POST" action="{{ route('calculate-dates') }}">
                                @csrf

                                <label for="year">Select Year:</label>
                                <select name="year" id="year">
                                    @for ($i = date('Y'); $i >= 1900; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                                <label for="month">Select Month:</label>
                                <select name="month" id="month">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                    @endfor
                                </select>

                                <button class="time-selection-button" type="submit">See Timetable</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="calendar-container">
    <div class="calendar">
        <div class="calendar-horizontal-grid">
            <div class="left-column">
                <div class="calendar_title_M_Y">
                    @isset ($count)
                        @if ($month == 1)
                            <div class="month-display">
                                <p> January {{$year}}</p>
                            </div>
                        @elseif ($month == 2)
                            <div class="month-display">
                                <p> February {{$year}}</p>
                            </div>
                        @elseif ($month == 3)
                            <div class="month-display">
                                <p> March {{$year}}</p>
                            </div>
                        @elseif ($month == 4)
                            <div class="month-display">
                                <p> April {{$year}}</p>
                            </div>
                        @elseif ($month == 5)
                            <div class="month-display">
                                <p> May {{$year}}</p>
                            </div>
                        @elseif ($month == 6)
                            <div class="month-display">
                                <p> June {{$year}}</p>
                            </div>
                        @elseif ($month == 7)
                            <div class="month-display">
                                <p> July {{$year}}</p>
                            </div>
                        @elseif ($month == 8)
                            <div class="month-display">
                                <p> August {{$year}}</p>
                            </div>
                        @elseif ($month == 9)
                            <div class="month-display">
                                <p> September {{$year}}</p>
                            </div>
                        @elseif ($month == 10)
                            <div class="month-display">
                                <p> October {{$year}}</p>
                            </div>
                        @elseif ($month == 11)
                            <div class="month-display">
                                <p> November {{$year}}</p>
                            </div>
                        @elseif ($month == 12)
                            <div class="month-display">
                                <p> December {{$year}}</p>
                            </div>
                        @endif
                    @else
                        <div class="month-display">
                            {{ \Carbon\Carbon::now()->format('F') }}
                            {{ \Carbon\Carbon::now()->format('Y') }}
                        </div>
                    @endisset
                </div>
                @foreach ($users->filter(function ($user) {
                    return $user->hasRole('Employee');
                }) as $user)
                    <div class="grid-item">
                        <p>{{$user->name}}</p>
                    </div>
                @endforeach

            </div>
            @isset($count)
                <div class="days-container">
                    @for ($i = 1; $i < $count + 1; $i++)
                        @php
                        // Format $i with leading zero if it's a single-digit number
                        $formattedI = str_pad($i, 2, '0', STR_PAD_LEFT);
                        $currentDate = $year . '-' . $month . '-' . $formattedI;
                        @endphp
                        <div class="day">
                            <div class="date">
                                {{ $currentDate }}
                            </div>
                            @foreach ($users as $user)
                                @if ($user->hasRole('Employee'))
                                    <div class="event-span">
                                        @php
                                            $hasEventsForDate = false; // Flag to track if events exist for the current date
                                        @endphp
                                        @foreach ($user->events as $event)
                                            @php
                                            $eventStartDate = \Carbon\Carbon::parse($event->event_start)->format('Y-m-d');
                                            $eventEndDate = \Carbon\Carbon::parse($event->event_end)->format('Y-m-d');
                                            @endphp
                                            @if ($currentDate >= $eventStartDate && $currentDate <= $eventEndDate)
                                                @php
                                                    $hasEventsForDate = true;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if ($hasEventsForDate)
                                            <span class="users-event clickable">
                                                See Schedule
                                                <div class="dropdown-content">
                                                    <ul>
                                                    @foreach ($user->events as $event)
                                                        @php
                                                        $eventStartDate = \Carbon\Carbon::parse($event->event_start)->format('Y-m-d');
                                                        $eventEndDate = \Carbon\Carbon::parse($event->event_end)->format('Y-m-d');
                                                        @endphp
                                                        @if ($currentDate >= $eventStartDate && $currentDate <= $eventEndDate)
                                                            <li>{{ $event->project_name }}</li>
                                                        @endif
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </span>
                                        @else
                                            <span class="user-noevent">&nbsp;</span>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endfor
                </div>
            @endisset
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

            $(document).ready(function() {
                // Add a click event for elements with the 'clickable' class
                $('.clickable').click(function() {
                    // Toggle the visibility of the dropdown content
                    $(this).find('.dropdown-content').toggle();
                });
            });


        </script>

    </body>

</html>
