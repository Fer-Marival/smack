  
  <div class="suscribe">
    <form class="form" method="post" action="{{ route('newslater.store') }}">
      @csrf
    	<div class="row">
    		<div class="col">
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
   <div class="copy">smack® 2019</div>
</footer>