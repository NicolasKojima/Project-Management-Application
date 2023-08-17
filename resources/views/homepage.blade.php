
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
    </style>

    
  </head>
<body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">DC Department Introduction</h4>
              <p class="company-intro"> >include the DC teams goals as a department< </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact information</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
            <strong>Zeal Team</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <marquee>
              <h1 style="repeat:true">Digital Communications</h1>
            </marquee>
            <p>
              <a href="contact-form" class="btn btn-primary my-2" > Contact Us</a>
              <a href="about-us" class="btn btn-primary my-2" > About Us</a>
              <a href="post-project" class="btn btn-secondary my-2" > Post Project</a>
              <a href="registration" class="btn btn-secondary my-2" > Registration</a>
            </p>
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">
            @foreach ($forms as $form)
            <div class="col">
              <div class="margin">
                <div class="card shadow-sm">
                  <div class="test">
                    <div class="individual">
                      <div class="photo-name">
                        <img style="border-radius: 50%; width: 80px; height: 80px;" src="<?php echo asset('/storage/image/'.$form->profilepic)?>" alt="Profile Picture">
                      </div>
                      <div class="name">
                        <p>{{$form->name}}</p>
                      </div>
                      <div>
                        <a class="editlink" href="{{ route('edit', $form->id) }}">Edit Form {{ $form->id }}</a>
                        <small class="text-muted" >{{ $form->created_at->format('Y-m-d H:i:s') }}    </small>
                      </div>
                    </div>
                    <div class="post-grid">
                      <div class="image-box">
                        <img class="main-image" src="<?php echo asset('/storage/image/'.$form->image)?>" alt="Main Image"></img>
                      </div>
                      <div class="skills">
                        <h4 class="project-title"> {{$form->projname}} </h4>
                        <div class="project-description">
                          <p>{{$form->projdescription}}</p>
                        </div>
                      </div>
                    </div>  
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"/>                       
                    <div class="card-body">
                      <div class="post-bottom-grid">
                        <div class="skill-rele">
                          <h6 class="card-text">{{$form->skills}}</h6>
                          <p class="skill-desc"> {{$form->Relavance}}</p>
                          <div class="d-flex justify-content-between align-items-center"></div>
                        </div>  
                        <!-- <div class="delete-button">
                          <form action="{{ route('delete', $form->id) }}" method="POST" id="del-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" onclick="del()">Delete</button>
                            
                          </form>
                        </div> -->
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
    </script>
          <!-- <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const deleteButtons = document.querySelectorAll('.delete-btn');
                    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
                    let deleteForm;

                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function () {
                            deleteForm = button.closest('form');
                        });
                    });

                    confirmDeleteBtn.addEventListener('click', function () {
                        if (deleteForm) {
                            deleteForm.submit();
                        }
                    });
                });
          </script> -->
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