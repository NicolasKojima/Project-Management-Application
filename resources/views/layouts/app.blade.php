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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>
            .navbar-grid {
                width: 100%;
                display: grid;
                grid-template-columns: 52% 12% 12% 12% 12%; 
                grid-template-rows: min-content; 
                position: relative;
            }

            .container-contents {
                width: 90vw;
                height: 70vh;
                margin-right: auto;
                margin-left: auto;
                margin-top: 10px;
                background-color:black;
            }

            .slideshow{
                position: relative;
            }

            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 40%;
                width: auto;
                padding: 16px;
                margin-top: -100px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
                }
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
                }

            .description {
                width: 100%;
                margin-left: 5vw;
                margin-right:10vw;
                max-height:400px;
                overflow: auto;
                word-wrap: break-word;
                font-size:small;
            }

                .row:after {
                content: "";
                display: table;
                clear: both;
                }
            
            .example-grid {
                width: 90%;
                display: grid;
                grid-template-columns: 60% 40%; 
                height:400px;
                margin-top: 5vh;
            }

            .gallery-example {
                align-self: center;
                justify-content: center;
                margin-left: 2vw;
                width: 100%;
                height: 100%;
                margin-top: 5vh;
                overflow: hidden; /* Ensure content within the container doesn't overflow */
            }

            .slideshow-container {
                box-sizing: border-box;
                max-width: 100%; /* Use the full width of the parent container */
                width: 100%; /* Ensure it takes full width */
                max-height: 100%; /* Use the full height of the parent container */
                margin: auto; /* Center horizontally */
                position: relative;
            }

            .description-example{
                margin-left:3vw;
                margin-right:2vw;
                align-self: center;
                justify-content: center;
                width: 100%;
                height:100%;
                background-color: lightcyan;
                margin-top:5vh;
            }

            body {
                font-family: Arial;
                margin: 0;
                }


                img {
                vertical-align: middle;
                }

                /* Position the image container (needed to position the left and right arrows) */
                .container {
                position: relative;
                }

                /* Hide the images by default */
                .mySlides {
                display: none;
                object-fit:cover;
                width:100%;
                height:100%;
                }

                /* Add a pointer when hovering over the thumbnail images */
                .cursor {
                cursor: pointer;
                }

                .prev,
                .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
                }

                /* Position the "next button" to the right */
                .next {
                position: absolute;
                right: 0;
                }




                /* On hover, add a black background color with a little bit see-through */
                .prev:hover,
                .next:hover {
                background-color: black;
                /* rgba(0, 0, 0, 0.8) */
                }

                /* Number text (1/3 etc) */
                .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
                }

                /* Container for image text */
                .caption-container {
                text-align: center;
                background-color: #222;
                padding: 2px 0; /* Adjust the padding as needed */
                color: white;
                }

                .row:after {
                content: "";
                display: table;
                clear: both;
                }

                /* Six columns side by side */
                .column {
                float: left;
                width: 16.66%;
                }

                /* Add a transparency effect for thumnbail images */
                .demo {
                opacity: 0.6;
                }

                .active,
                .demo:hover {
                opacity: 1;
                }

                .row {
                max-height:100px !important;
                object-fit: cover !important;
                }

                .sub-image {
                max-height:100px !important;
                object-fit: cover !important;
                }

                .main-image {
                box-sizing: border-box;
                max-width: 100%;
                max-height: 100%;
                margin-right: auto;
                margin-left: auto;
                display: block; /* Make sure the images are displayed as block elements */
                margin: 0 auto;

                }

                .page-heading {
                    width: 100%;
                    height: 80px;
                }

                .descriptions{
                    height:100%;
                    width:90%;
                    margin-left:5vw;
                    padding-top: 10px;
                }

        

                .container {
                    max-width: 100%;
                    height:600px;
                    padding: 20px;
                    box-sizing: border-box;
                }

                .content {
                    display: flex;
                    flex-wrap: wrap;

                    /* Additional styling for your content */
                }

                .project-name {
                    font-size:25px;
                    font-weight: bold;
                }
                
                .links {
                    display: grid;
                    grid-template-columns: 80% 8% 12%;
                    gap: 5px;
                    align-items: center;
                    justify-content: center;
                }

                .link {
                    display: flex;
                }

        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                <div class="container">
                    <div class="content">
                        <div style="width:100%; height:55px; background-color:white;">
                            <h1 class="page-heading" style="font-size:x-large; padding-top: 10px; padding-left: 10px;"> Your Profile </h1>
                        </div>
                        <div class="example-grid">
                            <div class="gallery-example">
                                <div class="slideshow-container">
                                    @php $slideIndex = 1; @endphp
                                    @php $hasData = false; @endphp
                                    @foreach ($products as $data)
                                        @if ($data->created_by == auth()->user()->id)
                                            <div class="mySlides">
                                                <div class="numbertext">{{ $slideIndex }} / {{ count($products) }}</div>
                                                <img class="main-image" src="{{ asset('/storage/image/' . $data->image) }}" alt="Main Image">
                                            </div>
                                            @php $slideIndex++; @endphp
                                            @php $hasData = true; @endphp
                                        @endif
                                    @endforeach
                                    @if ($slideIndex > 1)
                                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                                        <a class="next" onclick="plusSlides(1)">❯</a>
                                    @endif
                                </div>
                            </div>
                            <div class="descriptions">
                            @foreach ($products as $data)
                                @if ($data->created_by == auth()->user()->id)
                                    <div class="project-description">
                                        <div class="project-name">{{ $data->projname }}</div>
                                        <div class="description-text">{{ $data->projdescription }}</div>
                                    </div>
                                @endif
                            @endforeach
                            @if (!$hasData)
                                <!-- Display a message when no data is available -->
                                <div class="project-description">
                                    <div class="project-name">No data available</div>
                                    <div class="description-text">You haven't posted any products yet.</div>
                                </div>
                            @endif
                            </div>
                        </div>




                        <script>
                            let slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                                showSlides((slideIndex += n));
                            }

                            function showSlides(n) {
                                let i;
                                let slides = document.getElementsByClassName("mySlides");
                                let projectDescriptions = document.getElementsByClassName("project-description");

                                if (n > slides.length) {
                                    slideIndex = 1;
                                }
                                if (n < 1) {
                                    slideIndex = slides.length;
                                }

                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }

                                for (i = 0; i < projectDescriptions.length; i++) {
                                    projectDescriptions[i].style.display = "none";
                                }

                                slides[slideIndex - 1].style.display = "block";
                                projectDescriptions[slideIndex - 1].style.display = "block";
                            }
                        </script>

                        <div style="width:100%; height:55px;">
                            <h1 style="font-size:x-large; padding-top: 10px; padding-left: 10px;"></h1>
                        </div>
                        <div class="container mt-5">
                            <div class="links">
                                <div class="link">
                                    <h2 class="h2 text-center">Project Schedule</h2>
                                </div>
                                <div class="link">
                                    <a href="dashboard" class="btn btn-primary my-2">Profile</a>
                                </div>
                                <div class="link">
                                    <a href="register-events" class="btn btn-primary my-2">Register Event</a>
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
                                    @if($event->user_id == auth()->user()->id)
                                    <tr>
                                        <td>{{ $event->employee_name }}</td>
                                        <td>{{ $event->project_name }}</td>
                                        <td>{{ $event->event_start }}</td>
                                        <td>{{ $event->event_end }}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
