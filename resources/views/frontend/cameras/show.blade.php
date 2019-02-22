@extends('layout')
@section('content')

	
		<div class="jumbotron jumbotron-fluid" style="background-image: url({{ $articulo->image }}); background-repeat: no-repeat;">
		  <div class="container">
		    <h1 class="display-4">{{ $articulo->name }}</h1>
		    <p class="lead">{{ $articulo->description }}</p>
		  </div>
		</div>
	

@stop