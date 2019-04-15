@extends('layout')
@section('content')
	<div class="container">
		<div class="jumbotron jumbotron-fluid" style="background-image: url({{ $articulo->path }}); background-repeat: no-repeat;">
		  <div class="container">
		    <h1 class="display-4">{{ $articulo->name }}</h1>
		    <p class="lead">{{ $articulo->description }}</p>
		  </div>
		</div>

		<div class="row" id="appProducts">
			<div class="col-md-6">
				<p align="justify">{{ $articulo->content }}</p>
				<h1>Complementos</h1>
				<div class="row">
					@foreach($articulo->accessories as $accessorie)
						<div class="col">
				            <div class="complement">
				              <img src="{{ asset($articulo->path) }}" width="100px" height="100px" class="img-fluid" alt="">
				              <h4>{{ $accessorie->name }}</h4>
				              <input type="text" name="name" v-bind="{{ $accessorie->name }}">
				              <button v-on:clickt></button>
				              <p class="description-complement">{{ $accessorie->description }}</p>
				              <button v-on:click="AgregarProducto" class="btn rounder">+ add</button>
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
						    <input type="text" class="form-control" name="name" placeholder="Full name">
						</div>
						<div class="form-group">
						    <label for="email">Email</label>
						    <input type="email" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="form-group">
						    <label for="telephone">Telephone</label>
						    <input type="text" class="form-control" name="telephone" placeholder="10 digits">
						</div>
						<div class="form-group">
						    <label for="description">Tus productos</label> 
						    <textarea class="form-control" name="description" rows="10" v-model="newKeep"></textarea>
						</div>
						<button type="submit" class="btn btn-secondary btn-lg btn-block">Enviar cotización</button>
					</form>
					<div class="clear"></div>
			</div>
		
		</div>
	</div>
	
@stop