@extends('components.permission')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
        @if(auth()->user()->hasRole('Admin'))
            <a class="btn btn-success" href="{{ route('users.create') }}" style="margin-bottom:10px;">Create New User</a>
        @endif
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th >No</th>
   <th >Name</th>
   <th >Email</th>
   <th >Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
 @if (!auth()->user()->hasRole('unapproved'))
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
        @if(auth()->user()->hasRole('Admin'))
        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}" style="width:70px;">Show</a>
        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"style="width:70px;">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline; width:70px;']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-display']) !!}
            {!! Form::close() !!}
        @else
            <span class="text-danger">You do not have permission to perform this action.</span>
        @endif
    </td>
  </tr>
  @endif
 @endforeach 
</table>

{!! $data->render() !!}

@endsection