@extends('layouts.app')

@section('content')

<div class="container">
<<<<<<< HEAD
		@include('admin.categories.create')
=======
>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
		
		@if(session()->has('success'))
		    <div class="alert alert-success">
		        {{ session()->get('success') }}
		    </div>
		@endif
<<<<<<< HEAD
		@if(session()->has('delete'))
		    <div class="alert alert-danger">
		        {{ session()->get('delete') }}
		    </div>
		@endif
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">Categories</h2>
=======

	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">List Categories</h2>
>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
			<div class="graph">
				<div class="tables">
					<table class="table">
					  <thead>
					  	<div class="row">
						  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
							  + Categories
							</button>
						  	<!--<a href="{{ route('products.create') }}" type="button" class="btn btn-primary" id="myModal"> + Product</a> -->
					  	</div>
					    <tr>
<<<<<<< HEAD
					      <th><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th><strong>Acciones<strong></th>
=======
					      <th ><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th colspan="4">Aciones<strong></th>
>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($categories as $category)
					    <tr>
					      <th>{{ $category->id }}</th>
					      <td>{{ $category->name }}</td>
<<<<<<< HEAD
					      <td>
					      	<div class="row">
						    <a href="{{ route('categories.edit', $category->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
					      	<form action="{{ route('categories.destroy', $category->id) }}" method="post">
				                  @csrf
				                  @method('DELETE')
				                  <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
				            </form>
				            </div>
=======
					      <td >
						    <a href="{{ route('categories.edit', $category->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>

						    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
								
								@csrf
                    			@method('DELETE')
						    	<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
						    </form>
						    {{-- <a href="{{ route('categories.destroy', $category->id) }}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> --}}
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