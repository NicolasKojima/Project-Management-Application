<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management Site</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles



</head>
<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <!-- Page Content -->
        <div class="mt-4">
            <h3 class="h3" style="margin-left:1vw;">Create New Calendar Event</h3>
            <form id="create-event-form">
                @csrf
                <div class="form-group">
                    <label for="project_name" style="margin-left:3vw;">Event Name</label>
                    <input style="width:90%; margin-left:3vw;" type="text" class="form-control" id="project_name" name="project_name" required>
                </div>
                <div class="form-group">
                    <label for="event_start" style="margin-left:3vw;">Start Time</label>
                    <input style="width:90%; margin-left:3vw;" type="datetime-local" class="form-control" id="event_start" name="event_start" required>
                </div>
                <div class="form-group">
                    <label for="event_end" style="margin-left:3vw;">End Time</label>
                    <input style="width:90%; margin-left:3vw;" type="datetime-local" class="form-control" id="event_end" name="event_end" required>
                </div>
                <button type="submit" class="btn btn-success" id="create-event-btn" style="margin-left:3vw; margin-top:1.5vw; background-color:#007BFF;">Create Event</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('create-event-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Perform any necessary form validation and processing here

        // Redirect the user to the "timetable" page
        window.location.href = 'calendar-display'; 
    });

        $(document).ready(function () {
    
                        $('#create-event-btn').click(function () {
                            var project_name = $('#project_name').val();
                            var event_start = $('#event_start').val();
                            var event_end = $('#event_end').val();
    
                            $.ajax({
                                url: SITEURL + "/calendar-crud-ajax",
                                data: {
                                    project_name: project_name,
                                    event_start: event_start,
                                    event_end: event_end,
                                    type: 'create'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event created.");
    
                                    calendar.fullCalendar('renderEvent', {
                                        id: data.id,
                                        title: project_name,
                                        start: event_start,
                                        end: event_end,
                                        allDay: allDay
                                    }, true);
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        });
    
    
                var SITEURL = "{{ url('/') }}";
    
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
                var calendar = $('#full_calendar_events').fullCalendar({
                    editable: true,
                    editable: true,
                    events: SITEURL + "/calendar-event",
                    displayEventTime: true,
                    eventRender: function (event, element, view) {
                        element.css('background-color', '  #fdb181');
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (event_start, event_end, allDay) {
                        var project_name = prompt('Project Name:');
                        if (project_name) {
                            var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                            var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                            $.ajax({
                                url: SITEURL + "/calendar-crud-ajax",
                                data: {
                                    project_name: project_name,
                                    event_start: event_start,
                                    event_end: event_end,
                                    type: 'create'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event created.");
    
                                    calendar.fullCalendar('renderEvent', {
                                        id: data.id,
                                        title:project_name,
                                        start: event_start,
                                        end: event_end,
                                        allDay: allDay
                                    }, true);
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
    
                        $.ajax({
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                title: event.project_name,
                                start: event_start,
                                end: event_end,
                                id: event.id,
                                type: 'edit'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event updated");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var eventDelete = confirm("Are you sure?");
                        if (eventDelete) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/calendar-crud-ajax',
                                data: {
                                    id: event.id,
                                    type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event removed");
                                }
                            });
                        }
                    }
                    
                });
            });
    
            function displayMessage(message) {
                toastr.success(message, 'Event');            
            }
        </script>
</body>
</html>