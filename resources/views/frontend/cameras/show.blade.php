@extends('layout')
@section('content')
<div class="container-fluid bg2">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="clear"></div>
			<h1>{{ $articulo->name }}</h1>
		    {{-- <p class="lead">{{ $articulo->description }}</p> --}}
		    <img src="{{ $articulo->path }}" alt="{{ $articulo->name }}" class="img-fluid">
		</div>
	</div>	    
</div>
	<div class="container" id="appProducts">
		<div class="row">
			<div class="col-md-8">
				<div class="clear"></div>
				<form action="" method="post">
					<div class="form-group">
					    <label for="name">@lang('global.name')</label>
					    <input type="text" class="form-control" name="name" placeholder="Full name">
					</div>
					<div class="form-group">
					    <label for="email">@lang('global.email')</label>
					    <input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
					    <label for="telephone">@lang('global.telephone')</label>
					    <input type="text" class="form-control" name="telephone" placeholder="10 digits">
					</div>
					<div class="form-group">
					    <label for="description">@lang('global.something')</label> 
					    <textarea class="form-control" name="description" rows="10" v-model="newKeep"></textarea>
					</div>
					<button type="submit" class="btn btn-secondary btn-lg btn-block  rounder">@lang('global.send')</button>
				</form>
				<div class="clear"></div>
			</div>
			<div class="col-md-4">
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
				<div id="destiny">
		          <div class="title">@lang('global.ourDestiny')</div>
		            <div class="slider" id="destiny-slide">
		              <div class="sp-slides">
		                <div class="sp-slide">
		                  <a data-fancybox="gallery" href="{!!asset('img/destiny/1.jpg')!!}"><img class="img-fluid" src="{!!asset('img/destiny/1.jpg')!!}"/></a>
		                  <div class="title">Las Animas </div>     
		                </div>
		                <div class="sp-slide">
		                  <a data-fancybox="gallery" href="{!!asset('img/destiny/2.jpg')!!}"><img class="img-fluid" src="{!!asset('img/destiny/2.jpg')!!}"/></a>
		                  <div class="title">Cerro del  Mono </div>    
		                </div>
		                <div class="sp-slide">
		                  <a data-fancybox="gallery" href="{!!asset('img/destiny/3.jpg')!!}"><img class="img-fluid" src="{!!asset('img/destiny/3.jpg')!!}"/></a>
		                  <div class="title">Palo Maria</div>    
		                </div>
		              </div>
		            </div>
		      </div>
			</div> 
		</div>
	</div>
	
@stop