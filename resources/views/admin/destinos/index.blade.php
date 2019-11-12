@extends('layouts.app')

@section('content')

<div class="container">
		@include('admin.destinos.create')
		
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
		<h2 class="inner-tittle">Destinos</h2>
			<div class="graph">
				<div class="tables">
					<table class="table">
					  <thead>
					  	<div class="row">
						  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDestino">
							  + Destinos
							</button>
					  	</div>
					    <tr>
					      <th ><strong>#<strong></th>
					      <th><strong>Name<strong></th>
					      <th>description</th>
					      <th>Locale</th>
					      <th>Editar</th>
					      <th>Eliminar</th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($destinos as $destino)
					    <tr>
					      <th>{{ $destino->id }}</th>
					      <td>{{ $destino->name }}</td>
					      <td>{{ $destino->locale }}</td>
					      <td >
						    <a href="{{ route('destinos.edit', $destino->id) }}" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
					      </td>
					      <td>
					      	<form action="{{ route('destinos.destroy', $destino->id) }}" method="post">
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