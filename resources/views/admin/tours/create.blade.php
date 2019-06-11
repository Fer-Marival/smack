@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Tours</h1>
	<form action="{{ route('tours.store') }}" method="post" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group col-md-6">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name">
	  </div>
	  <div class="form-group col-md-6">
	    <label for="description">Description</label> 
	    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
	  </div>
	  <div class="form-group col-md-6">
	    <label for="image">Imagen</label>
	    <input type="file" class="form-control-file" name="image">
	  	</div>
	  <div class="form-group col-md-6">
	    <label for="duracion">duracion</label>
	    <input type="text" class="form-control" name="duracion">
	  </div>
	  <div class="form-group col-md-6">
	  <label for="locale">Idioma</label>
	      <select id="locale" name="locale" class="form-control">
	        <option value="en" selected>Inglés</option>
	        <option value="es">Español</option>
	      </select>
	  </div>
	  <div class="row"></div>
	  <h2 align="center">Destinos</h2>
	  @foreach($destinos as $destino)
	  <div class="form-group col-md-4">
	  	<label for="">{!! Form::checkbox('destinos[]', $destino->name) !!} {{ $destino->name }}</label>
	  </div>
	  @endforeach
	  <div class="modal-footer">
	    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	    <button type="submit" class="btn btn-primary">Save</button>
	  </div>
	</form>
</div>
@stop