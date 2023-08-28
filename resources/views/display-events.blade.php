<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Events - laravelcode.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="h2 text-center mb-5 border-bottom pb-3">Display Events</h2>
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
