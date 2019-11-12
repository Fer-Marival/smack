@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'PUT']) !!}
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
      <div class="form-group col-md-6">
      <label for="locale">Idioma</label>
	      <select id="locale" name="locale" class="form-control">
	        <option value="en" selected>Inglés</option>
	        <option value="es">Español</option>
	      </select>
      </div> 
        <button type="submit" class="btn btn-primary">Save</button>
	{!! Form::close() !!}
</div>
@stop