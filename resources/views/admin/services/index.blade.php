@extends('layouts.app')

@section('content')
<div class="container">
	@include('admin.services.create')
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
						  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addService">
							  + Services
							</button>
						  	<!--<a href="{{ route('products.create') }}" type="button" class="btn btn-primary" id="myModal"> + Product</a> -->
					  	</div>
					    <tr>
					      <th ><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th>Image</th>
					      <th><strong>Locale</strong></th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($services as $service)
					    <tr>
					      <th>{{ $service->id }}</th>
					      <td>{{ $service->name }}</td>
					      <td>
					      	<img width="100px" height="50px" src="{{ asset($service->image) }}" alt="">
					      </td>
					      <td>{{ $service->locale }}</td>
					      <td >
						    <a href="{{ route('services.edit', $service->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
					      </td>
					      <td>
					      	<form action="{{ route('services.destroy', $service->id) }}" method="post">
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