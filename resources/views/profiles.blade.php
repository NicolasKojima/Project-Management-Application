<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{Project Management Site</title>

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

            .inside-table {
                    display:grid;
                    grid-template-columns:33% 33% 33%;
                }

            .slideshow{
                position: relative;
            }

            /* Style for the container */
            .submit-user-form {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
                background-color: #f2f2f2;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                max-width: 300px;
                margin: 0 auto;
                border-radius: 20px;
            }

            .submit-skill-form {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
                background-color: #f2f2f2;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                max-width: 300px;
                margin: 0 auto;
            }

            /* Style for the label */
            .user-selection label {
                font-weight: bold;
            }

            .skill-selection label {
                font-weight: bold;
            }

            /* Style for the select dropdown */
            .user-select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: white;
                font-size: 16px;
            }

            /* Style for the form */
            .user-form {
                width: 100%;
            }

            /* Style for the submit button */
            .submit-button {
                width: 100%;
                padding: 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s ease;
            }

            /* Hover effect for the submit button */
            .submit-button:hover {
                background-color: #0056b3;
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
            
                .block-container {
                margin-top:20px;
                outline: 2px solid black;
                display: inline-block;
                border-radius: 10px;
                box-shadow: 5px;
                background-color: white;
            }
            .example-grid {
                margin: 5vh;
                width: 90%;
                display: grid;
                grid-template-columns: 70% 30%; 
                height:40vw;
                /* margin-top: 5vh; */
            }

            .gallery-example {
                align-self: center;
                justify-content: center;
                margin-left: 2vw;
                width: 100%;
                height: 100%;
                /* margin-top: 5vh; */
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
                position: absolute;
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
                background-color:grey;
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

                .add-button{
                    right: 0;
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
                    justify-content: center;
                    align-items: center;
                }

                .project-name {
                    height: 30px;
                    font-size:20px;
                    font-weight: bold;
                    overflow-x: auto; 
                    overflow-y: hidden;
                }
                
                .links {

                    align-items: center;
                    justify-content: center;
                }

                .link {
                    display: flex;
                }

                .post-grid {
                    margin-top: 5vh;
                    display: grid;
                    grid-template-columns: 60% 40%; 
                    grid-template-rows: min-content; 
                    position: relative;
                }

                .card {
                    width: 300px;
                    margin-right: 30px;
                    margin-top: 40px;
                }
                
                .skill_information {
                    margin-top: 15px;
                }

                .user_name {
                    font-size: large;
                    font-weight: 800;
                }

                .other_skills_dropdown {
                    margin-top: 20px;
                }

                .skill_name{
                    font-weight: 800;
                }

                .email {
                    color: #0000EE;
                }

                .description_box {
                    height: auto; /* Default for screens less than 800px */
                    width: 80vw; /* Default for screens less than 800px */
                    border: black solid 2px;
                    border-radius: 20px;
                    margin: 10px; /* Default margin for screens less than 800px */
                }

                /* Media query for screens 800px and wider */
                @media (min-width: 800px) {
                    .description_box {
                        width: 44vw; /* Adjusted width for screens over 800px */
                        height: auto; /* Adjusted height for screens over 800px */
                        margin: 1vw; /* Adjusted margin for screens over 800px */
                    }
                }

                .description-text{
                    font-size: small;
                    max-height: 20vw; 
                    overflow: auto;
                    word-wrap: break-word;
                    margin-top: 3vw;
                    margin-right: 2vw;
                }

                
                .container {
                    /* Your container styles here */
                    align-items: center; /* Center vertically */
                    }

                .how_to_search {
                    width: auto;
                    height: 220px;
                    /* border: 1px solid black; */
                    justify-content: center; /* Center horizontally */
                    align-items: center;
                    margin:20px;
                    border-radius: 20px;
                    overflow: auto;
                    }
                
                .search_description {
                    margin:10px;
                    margin-top:20px;
                }

                body {
                    background-color: #f3f4f6
;
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
                        @if(isset($selectedUserId))
                            @foreach ($users as $user)
                                @if ($user -> id == $selectedUserId)
                                    <div style="width: 100%; height: 55px; background-color: white;">
                                        <h1 class="page-heading" style="font-size: x-large; padding-top: 10px; padding-left: 10px;"> {{$user -> name}} </h1>
                                    </div>
                                @endif
                            @endforeach
                            <div class="block-container">
                                <div class="example-grid" id="userDataContainer">
                                    <div class="gallery-example">
                                        <div class="slide-title">
                                            <h1 class="page-heading" style="font-size: x-large; padding-left: 10px;"> Projects </h1>
                                        </div>
                                        <div class="slideshow-container">
                                            @php $slideIndex = 1; @endphp
                                            @php $hasData = false; @endphp
                                            @foreach ($products as $data)
                                                @if ($data->created_by  == $selectedUserId)
                                                    <div class="mySlides">
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
                                        @if ($data->created_by  == $selectedUserId)
                                            <div class="project-description">
                                                <div class="project-name">{{ $data->projname }}</div>
                                                <div class="description-text">{{ $data->projdescription }}</div>
                                            </div>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>\
                            </div>

                        <div style="width:100%; height:55px;">
                            <h1 style="font-size:x-large; padding-top: 10px; padding-left: 10px;"></h1>
                        </div>
                            <div class="links">
                                <div class="link">
                                    <h2 class="h2" style="left:0;">Project Schedule</h2>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr class="inside-table">
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        @if ($event->user_id  == $selectedUserId)
                                        <tr class="inside-table">
                                            <td>{{ $event->project_name }}</td>
                                            <td>{{ $event->event_start }}</td>
                                            <td>{{ $event->event_end }}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="links">
                                <div class="link">
                                    <h2 class="h2" style="float:left;">Skills</h2>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr class="inside-table">
                                        <th>Name</th>
                                        <th>Allocated time</th>
                                        <th>Proficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($skills as $skill)
                                        @if ($skill->user_id  == $selectedUserId)
                                        <tr class="inside-table">
                                            <td>{{ $skill->name }}</td>
                                            <td>{{ $skill->allocated_time}}</td>
                                            <td>{{ $skill->proficiency_level}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>

                        @elseif(isset($selectedSkillId))
                        @foreach($skills as $skill)
                            @if($skill->name == $selectedSkillId)
                                <div class="individual_profile">
                                    @foreach($users as $user)
                                        @if($user->id == $skill->skill_id)
                                            <div class="col-md-4 mb-4"> <!-- Added 'col-md-4' class for column sizing and 'mb-4' for margin-bottom -->
                                                <div class="card box-shadow">
                                                    <div class="card-body">
                                                        <div class="post-grid">
                                                            <div class="user_name">{{$user->name}}</div>
                                                        </div>
                                                        <a href="mailto:{{$user->email}}" class="email">{{$user->email}}</a>
                                                        <div class="skill_information">
                                                            <div class="skill_name">{{$skill->name}}</div>
                                                            <p>{{$skill->allocated_time}} - {{$skill->proficiency_level}} </p>
                                                        </div>
                                                        <div class="other_skills_dropdown">
                                                            <label for="other_skills_{{ $user->id }}">Other Skills:</label>
                                                            @if ($user->skills)
                                                                <select name="other_skills_{{ $user->id }}" id="other_skills_{{ $user->id }}">
                                                                    @foreach ($user->skills as $userSkill)
                                                                        <option value="{{ $userSkill->name }}">{{ $userSkill->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endforeach

                        @else
                        <div class="description_box">
                            <div class="how_to_search">
                                <div class="search_description">
                                    <p style="font-weight: 600; font-size:Medium; margin:5px;">From the dropdown search option at the bottom of this box you are able to search for and look at the profiles of specific Employees.<br><br></p>
                                        <p>You will be able to see their:</p>
                                        <p> &emsp;&emsp;&emsp;Contact Information</p>
                                        <p> &emsp;&emsp;&emsp;Schedule</p>
                                        <p> &emsp;&emsp;&emsp;Skills / Languages Applicable </p>
                                        <p> &emsp;&emsp;&emsp;Past Projects</p>
                                </div>
                            </div>
                            <div class="submit-user-form">
                                <div class="user-selection">
                                    <label for="userSelect">Select User:</label>
                                    <select id="userSelect" onchange="loadUserData()">
                                        <option value="">Select an Employee</option>
                                        @foreach($users as $user)
                                            @if($user->hasRole('Employee'))
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <form id="yourForm" method="POST" action="{{ route('UserSelection') }}">
                                    @csrf <!-- Add a CSRF token for security -->
                                    
                                    <!-- Add a hidden input field to store the selected user's ID -->
                                    <input type="hidden" id="selectedUserId" name="selectedUserId">

                                    <!-- Your other form elements go here -->
                                    
                                    <button class="submit-button" type="submit" style="background-color:#fd721c;">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="description_box">
                            <div class="how_to_search">
                                <div class="search_description">
                                        <p style="font-weight: 600; font-size:Medium;  margin:5px;">From the dropdown search at the bottom of this box, you are able to search for a specific skill you are searching for, and a list of the employees that have registered that skill on their profiles will be displayed.<br><br></p>
                                        <p>List of skills include: JavaScript, MySQL, Python, HTML, CSS, Laravel</p>
                                    </div>
                            </div>
                            <div class="submit-skill-form">
                                <div class="skill-selection">
                                    <label for="skillSelect">Select Skill:</label>
                                    <select id="skillSelect" onchange="loadSkillData()">
                                        <option value="">Select a Skill or Language</option>
                                        @php
                                            $uniqueSkillNames = [];
                                        @endphp
                                        @foreach($skills as $skill)
                                            @if (!in_array($skill->name, $uniqueSkillNames))
                                                <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                                                @php
                                                    $uniqueSkillNames[] = $skill->name;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <form id="yourForm" method="POST" action="{{ route('UserSelection') }}">
                                    @csrf <!-- Add a CSRF token for security -->
                                    
                                    <!-- Add a hidden input field to store the selected user's ID -->
                                    <input type="hidden" id="selectedSkillId" name="selectedSkillId">

                                    <!-- Your other form elements go here -->
                                    
                                    <button class="submit-button" type="submit" style="background-color:#fd721c;" >Submit</button>
                                </form>
                            </div>
                        @endif
                        
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

                            function loadUserData() {
                                // Get the selected user's ID from the dropdown
                                selectedUserId = document.getElementById("userSelect").value;

                                // Set the value of the hidden input field
                                document.getElementById("selectedUserId").value = selectedUserId;
                            }

                            function loadSkillData() {
                                // Get the selected user's ID from the dropdown
                                selectedSkillId = document.getElementById("skillSelect").value;

                                // Set the value of the hidden input field
                                document.getElementById("selectedSkillId").value = selectedSkillId;
                            }

                        </script>
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
