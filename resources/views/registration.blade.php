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
      <form name="registration" id="registration" method="post" action="{{url('store-form1')}}"  enctype="multipart/form-data">
       @csrf
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" required placeholder="Enter your name" value="{{ $user->name }}">
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="Enter your email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Introduction</label>
          <textarea name="introduction" class="form-control" required="" placeholder="enter a little introduction"></textarea>
        </div>
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