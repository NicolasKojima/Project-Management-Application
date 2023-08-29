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
      Registration form
    </div>
    <div class="card-body">
      <form name="tesimg-upload" id="testimg-upload" method="post" action="{{url('store-form2')}}"  enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <input type="file" name="image1" placeholder="Choose image" id="image1">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname1" name="projname1" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription1" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="image2" placeholder="Choose image" id="image2">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname2" name="projname2" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription2" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="image3" placeholder="Choose image" id="image3">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname3" name="projname3" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription3" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="image4" placeholder="Choose image" id="image4">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname4" name="projname4" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription4" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>

        <div class="form-group">
          <input type="file" name="image5" placeholder="Choose image" id="image5">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname5" name="projname5" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription5" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="image6" placeholder="Choose image" id="image6">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="string" id="projname6" name="projname6" class="form-control" required="" placeholder="enter project name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="projdescription6" class="form-control" required="" placeholder="enter a description of your project; what did you do? how did you do it? what resources did you use?"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>