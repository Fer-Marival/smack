  
  <div class="suscribe">
    <form class="form" method="post" action="{{ route('newslater.store') }}">
      @csrf
    	<div class="row">
    		<div class="col col-sm">
    			<label for="email">@lang('global.newsmessage')</label>
    		</div>
    		<div class="col">	
      			<input type="text" placeholder="@lang('global.newsform')" name="email">
    		</div>
    		<div class="col">
    			<button class="rounder" type="submit">@lang('global.newsbtn') </button>
    		</div>
    	</div>
    </form>
  </div>
<footer>
	<div class="container">
		<div class="row">
			<div class="social-icons col">
				<p></p>
				<a href="fb"><i class="fab fa-facebook-square"></i></a>
				<a href="insta"><i class="fab fa-instagram"></i></a>
				<a href="airb"><i class="fab fa-airbnb"></i></a>
				<a href="trip"><i class="fab fa-tripadvisor"></i></a>
			</div>
			<div class="col">
				<p><i class="fas fa-phone"></i> <a href="tel:+5213221684772">322-168-4772</a></p>
				<p><i class="far fa-envelope"></i><a href="mailto:vdtrips.experiences@gmail.com"> hola@vdtrips.com</a></p>
			</div>
		</div>
	</div>
	<div class="copys">
		<p> @lang('global.copy')</p>
	 </div>
</footer>