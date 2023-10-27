@extends('components.permission')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts</h2>
            </div>
            <div class="pull-right">
                @if(auth()->user()->can('product-create'))
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Post </a>
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
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
	        <td class="table1">{{ ++$i }}</td>
	        <td class="table2">{{ $product->name }}</td>
	        <td class="table3">{{ $product->projdescription }}</td>
            <td>
                    @can('product-edit')
                        <a class="btn btn-info" href="{{ route('products.show', $product->id) }}"style="width:70px;">Show</a>
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}"style="width:70px;">Edit</a>
                    @endcan

                    @can('product-delete')
                        {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], 'style' => 'display:inline;width:70px;']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan

                @cannot('product-edit')
                    <span class="text-danger">You do not have permission to perform this action.</span>
                @endcannot
            </td>
	    </tr>
	    @endforeach
    </table>

    {!! $products->links() !!}

@endsection