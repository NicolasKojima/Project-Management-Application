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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .margin{
        margin-bottom: 25px;
      }

      .post-bottom-grid {
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 90% 10%; 
        grid-template-rows: min-content; 
        position: relative;
      }
  

      .card {
        margin-bottom: 6vh;
        border-radius:10px;
      }

      .image-box {
        max-width: 100%; /* Ensure the div doesn't overflow the viewport */
        overflow-x: auto; /* Add horizontal scrolling when the content overflows */
        white-space: nowrap; /* Prevent line breaks */
    }

      .main-image {
          max-width: 100%; /* Ensure the image doesn't exceed the container width */
          height: auto;
          margin-left:10px;
      }

      /* Original styles for .photo-name */
.photo-name {
  max-width: 80px; 
  max-height: 80px; 
  width: auto; 
  height: auto; 
  border-radius: 50%;
  object-fit: cover; 
}

@media (max-width: 800px) {
  .photo-name {
    display: none;
  }
}

      


      .col {
        padding-bottom: 3vh;
      }

      .bd-placeholder-img {
        object-fit: cover;
        margin-left: 1vw;
      }
      
      .individual {
          display: grid;
          grid-template-columns: 10% 50% 40%;
          height: 80px;
        }


      .name {
          font-size: xx-large;
          grid-column: 2;
          display: flex;
          align-items: center;
          padding-top: 10px;
          
        }

      .skills {
        margin-left:2vw;
        margin-right:1vw;
        margin-bottom:1vw;
        height: auto;
        width: 95%;
      }

      .project-description {
        font-size: small;
        max-height: 20vw; 
        overflow: auto;
        word-wrap: break-word;
        margin-top: 5vw;
        margin-right: 2vw;
      }

      .project-title{
        margin: 0;
        position: relative;
        font-size: 3vw;
      }

      .header-grid {
        padding: 10px;
        display: grid;
        grid-template-columns: 60% 40%; 
        grid-template-rows: min-content; 
        position: relative;
        background-color: white;
      }

      .post-grid {
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 60% 40%; 
        grid-template-rows: min-content; 
        position: relative;
      }

      .navbar-grid {
        width: 90vw;
        display: grid;
        grid-template-columns: 90% 10%; 
        grid-template-rows: min-content; 
        position: relative;
      }

      .project-description {
        font-size: small;
      }
       
      .editlink {
        text-align: center;
        grid-column: 3;
        padding-top: 25;
        display: flex; 
        justify-content: flex-end;
        margin-right: 3vw;
        margin-top: 5vh;
      }

      .text-muted {
        text-align: center;
        grid-column: 3;
        padding-top: 25;
        display: flex; 
        justify-content: flex-end;
        margin-right: 3vw;
        margin-top: 5vh;
      }

      .text-center {
        padding:0!important;
      }

      .company-intro{
        text-align: left;
        color: white;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .btn-primary {
      width:120px;
      background-color: #316FF6;
    }

    .btn-secondary {
      width:120px;
    }

    .links {
      display: flex;
      gap: 5px;
      justify-content: center;
      align-items: center; 
    }

    .project-blog {
      justify-content: center;
      align-items: center; 
    }


    </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
            <section class="">
            <div class="header-grid" >
              <div class="project-blog">
                <h1 class="page-heading" style="font-size:x-large; padding-top: 12px; padding-left: 10px; color: black;     text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);"> DC Project Blog </h1>
              </div>
              @if (!auth()->user()->hasRole('Guest'))
              <div class="links">
                <p>
                  <div class="link">
                    <a  href="post-project" class="btn btn-secondary my-2" style="background-color: #eb5c02;"> Post Project</a>
                  </div>
                </p>
              </div>
              @endif
            </div>
            </section>

      <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">
            @foreach  ($products->reverse() as $product)
              <div class="margin">
                <div class="card shadow-sm">
                  <div class="test">
                    <div class="individual">
                      <div class="photo-name">
                        <img style="border-radius: 50%; width: 80px; height: 80px;" src="<?php echo asset('/storage/image/'.$product->profilepic)?>" alt="Profile Picture">
                      </div>
                      <div class="name">
                        <p>{{$product->name}}</p>
                      </div>
                      <div>
                        <!-- <a class="editlink" href="{{ route('edit', $product->id) }}">Edit Form </a> -->
                        <small class="text-muted" >{{ $product->created_at->format('Y-m-d H:i:s') }}    </small>
                      </div>
                    </div>
                    <div class="post-grid">
                      <div class="image-box">
                        <img class="main-image" src="<?php echo asset('/storage/image/'.$product->image)?>" alt="Main Image"></img>
                      </div>
                      <div class="skills">
                        <h4 class="project-title"> {{$product->projname}} </h4>
                        <div class="project-description">
                          <p>{{$product->projdescription}}</p>
                        </div>
                      </div>
                    </div>  
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"/>                       
                    <!-- <div class="card-body">
                      <div class="post-bottom-grid">
                        <div class="skill-rele">
                          <h6 class="card-text">{{$product->skills}}</h6>
                          <p class="skill-desc"> {{$product->Relavance}}</p>
                        <div class="d-flex justify-content-between align-items-center"></div>
                        </div>  
                      </div>                    
                    </div> -->
                  <!-- <div class="card-header">Post to Facebook</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post-to-facebook') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                Post to Facebook
                            </button>
                        </form>
                    </div>
                  </div> -->
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>

    <script>

      function del(){

        let text;
          if (confirm("Are you sure to delete ?") == true) {
              document.getElementById("del-form").submit();
          } else {
              return false;
          }
      }

      document.addEventListener("DOMContentLoaded", function() {
        const logoutForm = document.getElementById("logout-form");
        const logoutButton = document.getElementById("logout-button");

        logoutButton.addEventListener("click", function(event) {
            event.preventDefault();
            logoutForm.submit();
        });
    });
    </script>
                     
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
