  
  <div class="suscribe">
     @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
    <form class="form" method="post" action="{{route('newsletter')}}">
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