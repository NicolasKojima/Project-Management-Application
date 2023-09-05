@extends('components.permission')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Post</h2>
<<<<<<< HEAD
=======
            </div>
            <div class="pull-right">
>>>>>>> 3e292865c1d1f41486a3f27265541cf6cf90158a
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back </a>
            </div>
            
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form name="post-project" id="post-project" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
       @csrf
        <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
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
        <div class="submit-button-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
@endsection