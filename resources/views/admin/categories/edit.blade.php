@extends('layouts.app')

@section('content')
	<div class="container">
	        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
<<<<<<< HEAD
	    	@csrf
=======
	    		@csrf
>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
			<div class="row">
	          <div class="form-group col-md-6">
			    <label for="name">Name</label>
			    {!! Form::text('name', null,['class' => 'form-control', 'id' => 'name' ]) !!}
			  </div>
<<<<<<< HEAD
		    </div> 
		    <button type="submit" class="btn btn-primary">Save</button>
	      	  
=======
			</div>
		        <button type="submit" class="btn btn-primary">Save</button>
>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
			{!! Form::close() !!}
	</dic>
@stop