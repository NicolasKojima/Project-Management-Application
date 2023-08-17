
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <style>

    .time-stamp {
      padding-left: 5px;
    }

    .profilepicture  {
      width: 300px; /* Set the desired container width */
      height: 200px; /* Set the desired container height */
      border: 1px solid #ccc; /* Optional: Add a border for visualization */
      overflow: hidden; /* Hide any image overflow */
      justify-content: center;
    }

    .introduction {
        font-size: small;
        height: 50px; /* Adjust the height as per your requirements */
        overflow: auto;
        word-wrap: break-word;
        margin-top: 5vh;
        margin-right: 2vw;
    }

    .profilepicture img {
      width: 100%; /* Occupy the full width of the container */
      height: 100%; /* Occupy the full height of the container */
      object-fit: cover; /* Scale the image to cover the entire container while maintaining aspect ratio */
    }

    .post-grid {
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 60% 40%; 
        grid-template-rows: min-content; 
        position: relative;
      }


    </style>
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Zeal Team</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Meet the DC team</h1>
          <p>
            <a href="homepage" class="btn btn-primary my-2" > Homepage</a>            
            <a href="Registration" class="btn btn-secondary my-2"> Registration</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center"> <!-- Center the boxes horizontally -->
      @csrf
      @foreach ($indivs as $indiv)
      <div class="col-md-4 mb-4"> <!-- Added 'col-md-4' class for column sizing and 'mb-4' for margin-bottom -->
        <div class="card box-shadow">
          <div class="profilepicture">
            <img class="card-img-top mx-auto" src="<?php echo asset('/storage/image/'.$indiv->profilepic)?>" alt="Card image cap">
          </div>
          <div class="card-body">
            <div class="post-grid">
              <h6>{{$indiv->name}}</h6>
              <small class="time-stamp" style="padding-left: 2px;">{{ $indiv->created_at->format('Y-m-d H:i:s') }}</small>
            </div>
            <!-- <p class="card-text">{{$indiv->email}}</p> -->
            <a href="mailto:{{$indiv->email}}">{{$indiv->email}}</a>
            <p class="introduction">{{$indiv->introduction}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Skills</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Project History</button>
              </div>
              <div class="delete-button">
                <form action="{{ route('delete', $indiv->id) }}" method="POST" id="del-form">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn btn-danger" onclick="del()">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
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
    </script>

      </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
