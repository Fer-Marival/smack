@extends('layouts.app')

@section('content')

<div class="container">
		@include('admin.categories.create')
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
		<h2 class="inner-tittle">Categories</h2>
			<div class="graph">
				<div class="tables">
					<table class="table">
					  <thead>
					  	<div class="row">
						  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
							  + Categories
							</button>
					  	</div>
					    <tr>
					      <th><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th><strong>Acciones<strong></th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($categories as $category)
					    <tr>
					      <th>{{ $category->id }}</th>
					      <td>{{ $category->name }}</td>
					      <td>
						    <a href="{{ route('categories.edit', $category->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
					      	<form action="{{ route('categories.destroy', $category->id) }}" method="post">
				                  @csrf
				                  @method('DELETE')
				                  <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
				            </form>
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