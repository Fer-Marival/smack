  @extends('layout')
  @section('content') 
 <div class="fluid-container" id="sin-exp">
  	<div class="exp-header">
  			<div class="slider-pro" id="exp-slider">
				<div class="sp-slides">
					<div class="sp-slide">
						<img class="sp-image" src="{!!asset('img/snorkel/slide1.jpg')!!}"/>
					</div>
          <div class="sp-slide">
            <img class="sp-image" src="{!!asset('img/snorkel/slide2.jpg')!!}"/>
          </div>
          <div class="sp-slide">
            <img class="sp-image" src="{!!asset('img/snorkel/slide3.jpg')!!}"/>
          </div>
				</div>
			</div>
  	</div>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8">
  				<div class="content">
  					<section>
  					<h3 class="title">Trip snorkel por la bahía</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque quae, eius corporis, alias tenetur dolores fugiat voluptate ducimus cum esse officia nesciunt. Cupiditate saepe beatae deleniti animi, ipsam modi. Blanditiis.</p>	
  					</section>
  					<section class="include">
  						<h6>Incluye</h6>
  						<ul>
  							<li>
                  <img src="#" alt=""><br />
                  Transporte
                </li>
  							<li>
                  <img src="#" alt=""><br />
                    Agua
                </li>
  							<li>
                  <img src="#" alt=""><br />
                    Equipo
                </li>
  							<li>
                  <img src="#" alt=""><br />
                    Guia
                </li>
  							<li>
                  <img src="#" alt=""><br />
                    Happy times
                </li>
  						</ul>
  					</section>
  					<section class="include">
  						<h6>Que llevar</h6>
  						<ul>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>lorem</li>
  							<li>loremlorem</li>
  						</ul>
  					</section>
  					<section class="include">
  						<h6>Fotos de los trips</h6>
  						<article class="exp-gallery">
  							 <a data-fancybox="gallery" href="{!!asset('img/snorkel/1.jpg')!!}">
                  <img src="{!!asset('img/snorkel/1.jpg')!!}" class="img-fluid" alt="">
                </a>
							   <a data-fancybox="gallery" href="{!!asset('img/snorkel/2.jpg')!!}">
                  <img src="{!!asset('img/snorkel/2.jpg')!!}" class="img-fluid" alt="">
                </a>
							   <a data-fancybox="gallery" href="{!!asset('img/snorkel/3.jpg')!!}">
                  <img src="{!!asset('img/snorkel/3.jpg')!!}" class="img-fluid" alt="">
                </a>
							   <a data-fancybox="gallery" href="{!!asset('img/snorkel/4.jpg')!!}">
                  <img src="{!!asset('img/snorkel/4.jpg')!!}" class="img-fluid" alt="">
                </a>
  						</article>
  					</section>
  				</div>
  			</div>
        @include('components.booking-trip')
  		</div>
  	</div>
</div>
@include('components.adds')

  @endsection