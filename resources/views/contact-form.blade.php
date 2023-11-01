<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">

    <!-- Styles -->
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            width: 100%;
            /* background: #c8e8e9; */
            /* display: flex; */
            align-items: center;
            justify-content: center;
        }

        .container {
            background: #fff;
            border-radius: 6px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .container .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container .content .left-side {
            width: 25%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .content .left-side::before {
            content: '';
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }

        .content .left-side .details {
            margin: 14px;
            text-align: center;
        }

        .content .left-side .details i {
            font-size: 30px;
            color: #3e2093;
            margin-bottom: 10px;
        }

        .content .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }

        .content .left-side .details .text-one,
        .content .left-side .details .text-two {
            font-size: 14px;
            color: #afafb6;
        }

        .container .content .right-side {
            width: 75%;
            margin-left: 75px;
        }

        .content .right-side .topic-text {
            font-size: 23px;
            font-weight: 600;
            color: #3e2093;
        }

        .right-side .input-box {
            margin: 12px 0;
        }

        .submit{
          margin-top: 10px;
          background-color: #44b5f2;
        }

        .right-side .input-box input,
        .right-side .input-box textarea,
        .right-side .form-control {
            height: 40px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 10px;
            font-size: 16px;
            background: #F0F1F8;
            outline: none;
            margin: 0;
        }

        .right-side .message-box textarea {
            min-height: 110px;
            padding-top: 6px;
            resize: vertical;
        }

        .right-side .button {
            text-align: center;
            margin-top: 12px;
        }

        .right-side .button button[type="submit"] {
            color: #fff;
            font-size: 18px;
            outline: none;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            background: #3e2093;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button button[type="submit"]:hover {
            background: #5029bc;
        }

        @media (max-width: 950px) {
            .container {
                width: 90%;
                padding: 30px 40px;
            }

            .container .content .right-side {
                width: 75%;
                margin-left: 55px;
            }
        }

        @media (max-width: 820px) {
            .container {
                margin: 40px 0;
                height: auto;
            }

            .container .content {
                flex-direction: column-reverse;
            }

            .container .content .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .container .content .left-side::before {
                display: none;
            }

            .container .content .right-side {
                width: 100%;
                margin-left: 0;
            }

            .form-container {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: auto;
            }

            .form-footer {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }

            .input-box,
            .input-box1 {
                margin: 12px 0;
                position: relative;
            }

            .input-box label,
            .input-box1 label {
                display: block;
                margin-bottom: 6px;
                color: #3e2093;
                font-weight: bold;
            }

            .input-box input[type="text"],
            .input-box input[type="email"],
            .input-box1 textarea,
            .form-control {
                height: 40px;
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 6px;
                padding: 10px;
                font-size: 16px;
                background: #F0F1F8;
                outline: none;
                margin: 0;
            }

            .input-box1 textarea,
            .form-control {
                min-height: 110px;
                padding-top: 6px;
                resize: vertical;
            }

            .button {
                text-align: center;
                margin-top: 12px;
            }

            .button button[type="submit"] {
                color: #fff;
                font-size: 18px;
                outline: none;
                border: none;
                padding: 
            }
          }
 </style>
        
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">〒105-0004 東京都</div>
          <div class="text-two">
              港区新橋5-14-10 新橋スクエアビル8階
          </div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">代表: 03-6452-9977</div>
          <div class="text-two">人事部: 03-6432-0243</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">FAX</div>
          <div class="text-one">03-6452-9988</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
          <p>If you have any work from us or any types of quries, you can send me message from here. It would be our pleasure to meet you!</p>
          <div class="form-container">
            <form name="registration" id="registration" method="post" action="{{url('contact-form')}}"  enctype="multipart/form-data">
            @csrf
              <div class="input-spacing">
                <div class="input-box">
                  <label for="exampleInputEmail1">Your Name</label>
                  <input type="string" id="name" name="name" class="form-control" required="" placeholder="enter your name"></input>
                </div>
              </div>  
              <div class="input-spacing">
                <div class="input-box">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="string" id="email" name="email" class="form-control" required="" placeholder="enter your email"></input>
                </div>
              </div>
              <div class="input-spacing">
                <div class="input-box1">
                  <label for="exampleInputEmail1">Introduction</label>
                  <textarea name="inquiry" class="form-control" required="" placeholder="enter your inquiry"></textarea></input>
                </div>
              </div>    
              <div class="input-spacing">
                <div class="form-footer">
                  <button type="submit" class="submit btn btn-submit" style="background-color:#fd721c;">Submit</button>
                </div>
              </div>
            </form>
          </div>
          </div>
    </div>
  </div>
            <main>
                
                     
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
