@extends('layouts.app')

@section('content')

<div class="container">

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
		<h2 class="inner-tittle">Tours</h2>
			<div class="graph">
				<div class="tables">
					<table class="table">
					  <thead>
					  	<div class="row">
						  	<a href="{{ route('tours.create') }}" type="button" class="btn btn-primary">
							  + Tours
							</a>
					  	</div>
					    <tr>
					      <th><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th>description</th>
					      <th>Locale</th>
					      <th>Editar</th>
					      <th>Eliminar</th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($tours as $tour)
					    <tr>
					      <th>{{ $tour->id }}</th>
					      <td>{{ $tour->name }}</td>
					      <td>{{ $tour->locale }}</td>
					      <td >
						    <a href="{{ route('tours.edit', $tour->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
					      </td>
					      <td>
					      	<form action="{{ route('tours.destroy', $tour->id) }}" method="post">
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