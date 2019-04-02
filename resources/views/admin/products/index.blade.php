@extends('layouts.app')

@section('content')

	<div class="container">
		@include('admin.products.create')
		{{ $products->links() }}
		@if(session()->has('success'))
		    <div class="alert alert-success">
		        {{ session()->get('success') }}
		    </div>
		@endif
		<table class="table table-bordered">
		  <thead>
		  	<div class="row">
			  	<h3>Products: {{ $total }}</h3>
			  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
				  + product
				</button>
			  	<!--<a href="{{ route('products.create') }}" type="button" class="btn btn-primary" id="myModal"> + Product</a> -->
		  	</div>
		    <tr>
		      <th scope="col"><strong>#<strong></th>
		      <th scope="col"><strong>Name<strong></th>
		      <th scope="col"><strong>Image<strong></th>
		      <th scope="col"><strong>Description<strong></th>
		      <th scope="col"><strong>Price<strong></th>
		      <th scope="col"><strong>Available<strong></th>
		      <th scope="col"><strong>Category<strong></th>
		      <th scope="col"><strong>Locale<strong></th>
		      <th scope="col" width="100px">Aciones<strong></th>
		    </tr>
		  </thead>
		  <tbody>
		  @foreach($products as $product)
		    <tr>
		      <th scope="row">{{ $product->id }}</th>
		      <td>{{ $product->name }}</td>
		      <td><img width="100px" height="50px" src="{{ $product->image }}" alt=""></td>
		      <td>{{ $product->description }}</td>
		      <td>{{ $product->price }}</td>
		      <td>{{ $product->available }}</td>
		      <td>{{ $product->category }}</td>
		      <td>{{ $product->locale }}</td>
		      <td>
		      	<div class="row">
			      	<a href="{{ route('products.edit', $product->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
			      	<a href="{{ route('products.destroy', $product->id) }}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
				</div>
		      </td>
		    </tr>
		  @endforeach
		  </tbody>
		</table>
		{{ $products->links() }}
	</div>
@stop