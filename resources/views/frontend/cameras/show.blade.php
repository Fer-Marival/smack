@extends('layout')
@section('content')
	<div class="container">
		<div class="jumbotron jumbotron-fluid" style="background-image: url({{ $articulo->image }}); background-repeat: no-repeat;">
		  <div class="container">
		    <h1 class="display-4">{{ $articulo->name }}</h1>
		    <p class="lead">{{ $articulo->description }}</p>
		  </div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p align="justify">{{ $articulo->content }}</p>
				<h1>Agregar complementos</h1>
				<div class="row">
					@foreach($articulo->accessories as $accessorie)
						<div class="col">
				            <div class="complement">
				              <img width="100px" height="100px" src="{{ $accessorie->image }}" class="img-fluid" alt="">
				              <h4>{{ $accessorie->name }}</h4>
				              <p class="description-complement">{{ $accessorie->description }}</p>
				              <a href="#" class="btn rounder">+ add </a>
				            </div>
			          	</div>
					@endforeach
				</div>
			</div>
			<div class="col-md-6">
					<h1 class="form-title">Cotizar Artículos</h1>
					<form action="" method="post">
						<div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
						</div>
						<div class="form-group">
						    <label for="email">Email</label>
						    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group">
						    <label for="telephone">Telephone</label>
						    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="10 digits">
						</div>
						<div class="form-group">
						    <label for="description">Tus productos</label> 
						    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
						</div>
						<button type="submit" class="btn btn-secondary btn-lg btn-block">Enviar cotización</button>
					</form>
					<div class="clear"></div>
			</div>
		</div>
	</div>
	

@stop