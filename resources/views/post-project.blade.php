<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Project Post form
    </div>
    <div class="card-body">
      <form name="post-project" id="post-project" method="post" action="{{url('store-form')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Your Name</label>
          <input type="string" id="name" name="name" class="form-control" required="" placeholder="enter your name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname" name="projname" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Relavance</label>
          <input type="string" id="Relavance" name="relavance" class="form-control" required="" placeholder="what relavance does this project have with the company?">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">skills</label>
          <input type="string" id="skills" name="skills" class="form-control" required="" placeholder="e.g. HTML, CSS, Python, Laravel, CMS">
        </div>
        <div class="form-group">
          <p> Project Image </p>
          <input type="file" name="image" placeholder="Choose image" id="image">
        </div>
          <p> Image of Self</p>
        <div class="form-group">
          <input type="file" name="profilepic" placeholder="Choose image" id="profilepic">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>