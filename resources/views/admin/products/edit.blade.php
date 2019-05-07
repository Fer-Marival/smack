@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
		@csrf
	<div class="row">
      <div class="form-group col-md-6">
	    <label for="name">Name</label>
	    {!! Form::text('name', null,['class' => 'form-control', 'id' => 'name' ]) !!}
	  </div>
	  <div class="form-group col-md-6">
	    <label for="image">Image</label>
	    <input type="file" class="form-control-file" id="image" name="image">
	  </div>
	</div>
	  <div class="form-group">
	    <label for="description">Description</label> 
	    {!! Form::textarea('description', null,['class' => 'form-control', 'id' => 'description', 'row' => '3']) !!}
	  </div>
	<div class="row">
	  <div class="form-group col-md-6">
	    <label for="price">Price</label>
	    {!! Form::text('price', null,['class' => 'form-control', 'id' => 'price' ]) !!}
	  </div>
	  <div class="form-group col-md-6">
	    <label for="available">Available</label>
	    {!! Form::text('available', null,['class' => 'form-control', 'id' => 'available' ]) !!}
	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-6">
	  	<label for="category">Category</label>
	  	{!!Form::select('category_id', $categories->pluck('name','id'), ['class' => 'form-control'])!!}
      </div>
      <div class="form-group col-md-6">
      <label for="locale">Idioma</label>
	      <select id="locale" name="locale" class="form-control">
	        <option value="en" selected>Inglés</option>
	        <option value="es">Español</option>
	      </select>
      </div>
    </div> 
        <button type="submit" class="btn btn-primary">Save</button>
	{!! Form::close() !!}
</dic>
@stop