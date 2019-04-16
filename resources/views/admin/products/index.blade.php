@extends('layouts.app')

@section('content')

<div class="container">
		@include('admin.products.create')
		
		@if(session()->has('success'))
		    <div class="alert alert-success">
		        {{ session()->get('success') }}
		    </div>
		@endif

		@if(session()->has('delete'))
		    <div class="alert alert-danger">
		        {{ session()->get('delete') }}
		    </div>
		@endif
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">List Users</h2>
			<div class="graph">
				<div class="tables">
					<table class="table">
					  <thead>
					  	<div class="row">
						  	<h3>Products: {{ $total }}</h3>
						  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
							  + product
							</button>
						  	<!--<a href="{{ route('products.create') }}" type="button" class="btn btn-primary" id="myModal"> + Product</a> -->
					  	</div>
					    <tr>
					      <th ><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th>Image</th>
					      <th>Category</th>
					      <th>Locale</th>
					      <th>Editar</th>
					      <th>Eliminar</th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($products as $product)
					    <tr>
					      <th>{{ $product->id }}</th>
					      <td>{{ $product->name }}</td>
					      <td>
					      	<img width="100px" height="50px" src="{{ asset($product->image) }}" alt="">
					      </td>
					      <td>{{ $product->category_id }}</td>
					      <td>{{ $product->locale }}</td>
					      <td >
						    <a href="{{ route('products.edit', $product->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
<<<<<<< HEAD
					      </td>
					      <td>
					      	<form action="{{ route('products.destroy', $product->id) }}" method="post">
				                  @csrf
				                  @method('DELETE')
				                  <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
				            </form>
=======
						    
						    {{-- <a href="{{ route('products.destroy', $product->id) }}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> --}}
>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
					      </td>
					    </tr>
					  @endforeach
					  </tbody>
					</table>
			</div>								
		</div>
	</div>
</div>
@stop