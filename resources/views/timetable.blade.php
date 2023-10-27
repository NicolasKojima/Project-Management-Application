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

        

        .calendar-horizontal-grid {
            position: absolute;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 15% 85%;
            top: 0;
        }

        /* Media query for screens smaller than 800px */
        @media (max-width: 800px) {
            .calendar-horizontal-grid {
                grid-template-columns: 20% 80%;
            }
        }

        .days-container {
            display: flex;
            justify-content: flex-start;
            overflow-x: scroll;
            width:100vw;
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
            min-width: 60px;
            flex: 1;
            line-height: 50px;
            text-align: center;
            border: 1px solid #ccc;
            background-color: #fff;
            white-space: nowrap;
        }

        @media (min-width: 600px) {
            .day {
                min-width: 10vw;
            }
        }



        .left-column{
            height:100%;
        }

        .grid-item {
        color: white;
        border-top: 1px solid #000; /* Border for each box */
        border-bottom: 1px solid #000;
        padding: 10px; /* Add spacing inside the box */
        margin-top: 1vh; 
        width: 100%;
        height: 50px;
        background-color: #003300;
        }

        .title {
        display:block;
        height:50px;
        width:100%;
        font-weight: bold;
        color: #333;
        }

        .title {
            display: block; /* Ensure it's visible by default */
            }

            @media (max-width: 800px) {
            .title {
                display: none; /* Hide the div when the screen width is 800px or less */
            }
            }

        .space {
            width: 100%;
            height:60px;
        }

        .calendar_title_M_Y {
            display: flex;
            justify-content: center; /* Horizontal centering */
            align-items: center; /* Vertical centering */
            height: 100vh; /* Set container height to the viewport height */
            overflow: hidden; /* Prevent contents from spilling out */
            height: 10.1vh;
            width: 100%;

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
            height:10vh
        }

        .event-span {
            position:relative;
            border-top: #000 solid 1px;
            border-bottom: #000 solid 1px;
            margin-top:1vh;
            height:50px;
        }

        .selection-button{
            margin-left: 30px;
        }

        .title {
            padding-left: 2vw;
            padding-top:5px;
            font-family: verdana, sans-serif;
            font-weight:800 !important;
        }

        .header {
            display: grid;
            grid-template-columns: 70% 10% 20%;
            }

            @media (max-width: 800px) {
            .header {
                grid-template-columns: 50% 50%;
            }
            }
        .date-form{
            margin-top: 1.5vh;
            left:0px;
        }

        .month-display {
            font-size: 20px;
            height:10vh;
            padding-top:1vw;
            }

        .time-selection-button{
            margin-top:10px;
            float:right;
            background-color: #e7a88a;
            padding: 10px;
            border-radius: 5px;
                }
        
            /* Style the dropdown button */
            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 10px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                margin-top: 5px;
                margin-right:10px;
                float: right;
                border-radius: 5px;
            }

            /* Style the dropdown content (hidden by default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Style the dropdown links */
            .dropdown-content form {
                display: block;
                padding: 15px;
                text-decoration: none;
                color: black;
            }

            /* Change color on hover */
            .dropdown-content form:hover {
                background-color: #f1f1f1;
            }

            /* Show the dropdown content on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            .date-full {
                display: none;
            }

            .date-small {
                display: block;
            }

            @media (min-width: 800px) {
                .date-full {
                    display: block;
                }

                .date-small {
                    display: none;
                }
            }
                .responsive-select {
            width: 100%; /* Use 100% width to make the select elements expand to the container's width */
            margin-bottom: 10px; /* Add some spacing between elements */
        }

        @media (min-width: 768px) {
            .year, .month {
                display: inline-block; /* Arrange elements horizontally on larger screens */
                width: 50%; /* Give each select element 50% width */
            }
}


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
                        <div class="create-event-link">
                            <a  href="create-new-event" class="btn btn-secondary my-2" style="margin-left:5px;"> Create </a>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Search</button>
                            <div class="dropdown-content">
                                <form method="POST" action="{{ route('timetable-dates') }}">
                                    @csrf
                                    <div class="year">
                                        <label for="year">Select Year:</label>
                                        <select class="responsive-select" name="year" id="year">
                                            @for ($i = date('Y'); $i >= 1900; $i--)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="month">
                                        <label for="month">Select Month:</label>
                                        <select class="responsive-select" name="month" id="month">
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <button class="time-selection-button" type="submit">See Schedule</button>
                                </form>
                            </div>
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
                            <div class="date date-full"> <!-- Initially hide on small screens -->
                                {{ $currentDate }}
                            </div>
                            <div class="date date-small"> <!-- Initially shown on small screens -->
                                {{ $formattedI }}
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
                                                Event
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
