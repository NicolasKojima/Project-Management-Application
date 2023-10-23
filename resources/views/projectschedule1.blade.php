<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello World</p>
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

    <button type="submit">Calculate Dates</button>
</form>
@isset($count)
    <p>Number of dates in the selected month: {{ $count }}</p>
@endisset

@for ($i = 0; $i < $count; $i++)
    {{ $i }}
@endfor

</body>
</html>