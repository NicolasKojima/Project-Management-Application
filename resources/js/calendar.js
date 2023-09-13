document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        events: '/events', // Define the route to fetch events from Laravel
        eventClick: function(info) {
            // Handle event click if needed
        },
    });

    calendar.render();
});
