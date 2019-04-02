@extends('layouts.app')

@section('content')
	<div class="container">
	        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
	    		@csrf
			<div class="row">
	          <div class="form-group col-md-6">
			    <label for="name">Name</label>
			    {!! Form::text('name', null,['class' => 'form-control', 'id' => 'name' ]) !!}
			  </div>
			</div>
		        <button type="submit" class="btn btn-primary">Save</button>
			{!! Form::close() !!}
	</dic>
@stop