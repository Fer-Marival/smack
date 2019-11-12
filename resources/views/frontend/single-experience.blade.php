  @extends('layout')
  @section('content') 
  {{-- <div class="container-fluid" id="acuatics">
      <div id="video">
        <video autoplay loop muted autoplay id="video-background" plays-inline>
            <source src="{!!asset('video/diving.mp4')!!}" type="video/mp4">
        </video>
        <div class="video-container">
         <div class="row justify-content-center align-self-center">
           <div class="col-md-6">
             <span>Enjoy the Water in your trips…</span>
             <p>Underwater and Upwater activities</p>
           </div>
         </div>
      </div>
   </div>
 </div>  --}}
 <div class="fluid-container" id="sin-exp">
  	<div class="exp-header">
  			<div class="slider-pro" id="exp-slider">
				<div class="sp-slides">
					<!-- Slide 1 -->
					<div class="sp-slide">
						<img class="sp-image" src="{!!asset('img/snorkel.jpeg')!!}"/>
					</div>
					
					<!-- Slide 2 -->
					<div class="sp-slide">
						<p>Lorem ipsum dolor sit amet</p>
					</div>
					
					<!-- Slide 3 -->
					<div class="sp-slide">
						<h3 class="sp-layer">Lorem ipsum dolor sit amet</h3>
						<p class="sp-layer">consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
  	</div>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8">
  				<div class="content">
  					<section>
  						<h3>Trip snorkel por la bahía</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque quae, eius corporis, alias tenetur dolores fugiat voluptate ducimus cum esse officia nesciunt. Cupiditate saepe beatae deleniti animi, ipsam modi. Blanditiis.</p>	
  					</section>
  					<section>
  						<h6>Incluye</h6>
  						<ul>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>loremlorem</li>
  						</ul>
  					</section>
  					<section>
  						<h6>Que llevar</h6>
  						<ul>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>loremlorem</li>
  						</ul>
  					</section>
  					<section>
  						<h6>Fotos de los trips</h6>
  						<article class="exp-gallery">
  							<a data-fancybox="gallery" href="{!!asset('img/kayak1.jpeg')!!}"><img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt=""></a>
							<a data-fancybox="gallery" href="{!!asset('img/kayak1.jpeg')!!}"><img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt=""></a>
							<a data-fancybox="gallery" href="{!!asset('img/kayak1.jpeg')!!}"><img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt=""></a>
							<a data-fancybox="gallery" href="{!!asset('img/kayak1.jpeg')!!}"><img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt=""></a>
  						</article>
  					</section>
  				</div>
  			</div>
  		</div>
  	</div>
</div>
    <div class="container-fluid">
      <div class="row" id="products">
          <div class="col shadow-flow">
              <div class="content">
                <img src="{!!asset('img/hikings.jpeg')!!}" class="img-fluid" alt="">
                Mountain Hikings to quimixto<br />
                <a href="#" class="btn rounder">Add to my adveture</a>
              </div>
          </div>
          <div class="col shadow-flow">
            <div class="content">
              <img src="{!!asset('img/kayak2.jpg')!!}" class="img-fluid" alt="">
              One of three columns <br />
              <a href="#" class="btn rounder">Add to my adveture</a>
            </div>
          </div>
          <div class="col shadow-flow">
            <div class="content">
              <img src="{!!asset('img/hikings.jpeg')!!}" class="img-fluid" alt="">
              One of three columns <br />
              <a href="#" class="btn rounder">Add to my adventure</a>
            </div>
          </div>
          <div class="col shadow-flow">
            <div class="content">
                <img src="{!!asset('img/kayak2.jpg')!!}" class="img-fluid" alt="">One of three columns <br />
                <a href="#" class="btn rounder">Add to my adveture</a>
            </div>
          </div>
      </div>
   	</div>
   <div class="container-fluid">
    <h2>Check our models to get</h2>
      <div class="row" id="products">
          <div class="col shadow-flow">
              <div class="content">
                <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                One of three columns <br />
                <a href="#" class="btn rounder">See details</a>
              </div>
          </div>
          <div class="col shadow-flow">
            <div class="content">
              <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
              One of three columns <br />
              <a href="#" class="btn rounder">See details</a>
            </div>
          </div>
          <div class="col shadow-flow">
            <div class="content">
              <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
              One of three columns <br />
              <a href="#" class="btn rounder">See details</a>
            </div>
          </div>
          <div class="col shadow-flow">
            <div class="content">
                <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">One of three columns <br />
                <a href="#" class="btn rounder">See details</a>
            </div>
          </div>
      </div>
   </div>
  @endsection