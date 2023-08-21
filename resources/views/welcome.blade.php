<!DOCTYPE html>
<html>
<head>
  <title>Login and Register</title>
  <link rel="stylesheet" href="path/to/bootstrap.css">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f0f0f0;
    }
    .center-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .option-box {
      margin-top: 10px;
      width: 100%;
      text-align: center;
    }
    .btn-box {
      margin: 10px 0;
      width: 100%;
      display: flex;
      justify-content: center;
    }
    .btn-box .btn {
      width: 150px;
    }
  </style>
</head>
<body>

<div class="center-box">
  <h3>Welcome</h3>
  <p>Please choose an option:</p>
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    @endif
</div>

</body>
</html>
