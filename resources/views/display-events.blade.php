<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> "Name of User" 's Schedule </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <style>
        .links {
      display: grid;
      grid-template-columns: 88% 12%;
      gap: 5px;
      align-items: center;
      justify-content: center;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="links">
            <div class="link">
                <h2 class="h2 text-center ">Display Events</h2>
            </div>
            <div class="link">
                <a href="register-events" class="btn btn-primary my-2" > Register Event</a> 
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->employee_name }}</td>
                    <td>{{ $event->project_name }}</td>
                    <td>{{ $event->event_start }}</td>
                    <td>{{ $event->event_end }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>