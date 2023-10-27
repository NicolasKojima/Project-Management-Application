@extends('components.permission')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
            @if(auth()->user()->can('role-create'))
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role </a>
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
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            @can('role-edit')
                <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}"style="width:70px;">Show</a>
                <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}"style="width:70px;">Edit</a>
            @endcan

            @can('role-delete')
                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline; width:70px;']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan

            @cannot('role-edit', $role)
                <span class="text-danger">You do not have permission to perform this action.</span>
            @endcannot
        </td>
    </tr>
    @endforeach
</table>

{!! $roles->render() !!}

@endsection