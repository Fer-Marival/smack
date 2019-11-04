  @extends('layout')
  @section('content') 
  <div class="clear gradient"></div>
  <div class="clear"></div>
  <div class="container">
  	<div class="row booking-trip">
  		<div class="col-md-8">
			<section>
				<form>
					<div class="form-group">
				    <div class="title">Aparta tu lugar</div>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nombre:</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Apellido</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Día:</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Teléfono:</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email:</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Personas:</label>
				    Adultos: <select name="" id=""></select>
				    Niños: <select name="" id=""></select>
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				</form>
			</section>
		</div>
  		<div class="col-md-4 gray">
  			<div class="row">
  				<div class="col"></div>
  				<div class="col">
  					<p><strong>Días:</strong> 5</p>
  				</div>
  				<div class="col-1">X</div>
  			</div>
  			<div class="row">
  				<div class="col-3">
  					<img src="{!!asset('img/product1.png')!!}" width="63" alt="">
  				</div>
  				<div class="col">
  					<strong>Camara:</strong><p>Go Pro 7 Black +</p><br />
  					<p></p>
  				</div>
  				<div class="col-1">X</div>
  			</div>
  			<div class="row">
  				<div class="col-3">
  					<img src="{!!asset('img/accesorios/1.jpg')!!}" width="63" alt="">
  				</div>
  				<div class="col">
  					<strong>Accesorio:</strong><p>Vista media</p><br />
  					<p></p>
  				</div>
  				<div class="col-1">X</div>
  			</div>
  			<div class="row">
  				<div class="col-3">
  					<img src="{!!asset('img/accesorios/3.jpg')!!}" width="63" alt="">
  				</div>
  				<div class="col">
  					<strong>Accesorio:</strong><p>Snorkel con base</p><br />
  					<p></p>
  				</div>
  				<div class="col-1">X</div>
  			</div>
  			<div class="row">
  				<div class="col-3"></div>
  				<div class="col">
  					<strong>Total</strong><p>$100 USD</p><br />
  					<p></p>
  				</div>
  			</div>
  			<button type="submit" class="rounder">Apartar</button>
  		</div>
  	</div>
  </div>
  @endsection