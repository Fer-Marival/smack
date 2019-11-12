  
  <div class="suscribe">
    <form class="form" method="post" action="{{ route('newslater.store') }}">
      @csrf
    	<div class="row">
    		<div class="col col-sm">
    			<label for="email">Recibe nuestras promociones  y actividades :</label>
    		</div>
    		<div class="col">	
      			<input type="text" placeholder="Please put your email" name="email">
    		</div>
    		<div class="col">
    			<button class="rounder" type="submit">Suscribirme </button>
    		</div>
    	</div>
    </form>
  </div>
<footer>
	<div class="container">
		<div class="row">
			<div class="social-icons col">
				<p>Síguenos en nuestras redes sociales</p>
				<a href="fb"><i class="fab fa-facebook-square"></i></a>
				<a href="insta"><i class="fab fa-instagram"></i></a>
				<a href="airb"><i class="fab fa-airbnb"></i></a>
				<a href="trip"><i class="fab fa-tripadvisor"></i></a>
			</div>
			<div class="col">
				<strong>Information:</strong> <br>
				<p>Contact us to : <a href="tel:+5213221684772">322-168-4772</a></p>
				<p>Email us to <a href="mailto:hola@vdtrips.com">hola@vdtrips.com</a></p>
			</div>
		</div>
	</div>
	<div class="copys">
		<p>Todos los derechos reservados para Vallarta Daniel´s Trips Puerto Vallarta y Bah&iacute;a de Banderas </p>
	 </div>
</footer>