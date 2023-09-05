
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>DC Department · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-xxxxx" crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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
      }

      .image-box {
        width: 50vw;
        height: 50vh;
        object-fit: contain;
        display: flex;
        justify-content: center;
      }

      .photo-name {
        max-width: 80px;  /* Set maximum width */
        max-height: 80px; /* Set maximum height */
        width: auto;      /* Allow automatic width adjustment */
        height: auto;     /* Allow automatic height adjustment */
        border-radius: 50%;
        object-fit: cover; /* Maintain aspect ratio and cover container */
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
          font-size: 7vh;
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
        max-height: 200px; 
        overflow: auto;
        word-wrap: break-word;
        margin-top: 5vh;
        margin-right: 2vw;
      }

      .project-title{
        margin: 0;
        position: relative;
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
    }

    .btn-secondary {
      width:120px;
    }

    .links {
      display: flex;
      gap: 5px;
      align-items: center;
      justify-content: center;
    }


    </style>

    
  </head>
<body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">DC Department Introduction</h4>
              <p class="company-intro"> The Digital Communications Department (DC) is a department which focuses on the monitoring, analysis, and distribution of Data, as well as the creation, update and maintenance of Digital Websites, Tech Related Material, and EC Sites </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact information</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Phone: 03-6452-9977</a></li>
                <li><a href="#" class="text-white">Fax: 03-6452-9988</a></li>
                <li><a href="#" class="text-white">Email: DigitalCommunication@e-zeal.jp</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark shadow-sm"  style="background-color: black;">
        <div class="container">
          <div class="navbar-grid">
            <a href="#" class="navbar-brand d-flex align-items-center">
              <img src="{{ asset('storage/image/ZEALTEAM_logo.jpg') }}" alt="Image" class="image-size" style ="width:250px; height:50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1>DC Project Blog</h1>
            <p>
              <div class="links">
                <div class="link">
                  <a href="dashboard" class="btn btn-primary my-2" > Profile</a>
                </div>
                <div class="link">
                  <a href="post-project" class="btn btn-secondary my-2" > Post Project</a>
                </div>
              </div>
            </p>
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">
            @foreach ($products as $product)
            <div class="col">
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
                        <a class="editlink" href="{{ route('edit', $product->id) }}">Edit Form </a>
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
                    <div class="card-body">
                      <div class="post-bottom-grid">
                        <div class="skill-rele">
                          <h6 class="card-text">{{$product->skills}}</h6>
                          <p class="skill-desc"> {{$product->Relavance}}</p>
                          <div class="d-flex justify-content-between align-items-center"></div>
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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

    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>
  <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>