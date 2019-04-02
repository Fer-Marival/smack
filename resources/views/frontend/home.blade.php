	@extends('layout')
	@section('content') 
      <div id="acuatics">
          <div id="video">
            <video autoplay loop muted autoplay id="video-background" plays-inline>
                <source src="{!!asset('video/diving.mp4')!!}" type="video/mp4">
            </video>
            <div class="video-container">
             <div class="row justify-content-center align-items-center">
                 <div class="col-md-6">
                     <div id="slider">
                        <div><section class="title">Rent<section></div>
                        <div><section class="title">Enjoy<section></div>
                        <div><section class="title">Know</section></div>
                        <div><section class="title">Confort</section></div>
                    </div>
                 </div>
                  <div class="col-md-6">
                     <div id="slider-right">
                        <div><p>a camera</p></div>
                        <div><p>beautifull moments</p></div>
                        <div><p>best place </p></div>
                        <div><p>your traslate</p></div>
                    </div>
                 </div>
             </div>
          </div>
       </div>
     </div>      
     <!--   <div class="gradient-home">
           <div class="row align-items-end">
                <div class="col">
                  <div class="container text-center">
                    <h1 class="title">VDtrips</h1>
                    <p>Rent cameras and share beautifull moments </p>
                     <img src="{!!asset('img/bg2.png')!!}" alt="" class="img-fluid animated delay-1s fadeInUp">
                  </div>
                </div>
           </div>
       </div> -->
       <div class="container-fluid bg-1">
        <h2 class="title m4">Servicios de Calidad</h2>
          <div class="row" id="services">
              <div class="col">
                <div class="card shadow-flow">
                   <picture>
                     <img src="{!!asset('img/camara.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">
                    <p>Cámaras</p>
                    <a href="{{ route('cameras.index') }}" class="btn rounder">Ver Modelos</a>
                  </div>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="card">
                   <picture>
                    <img src="{!!asset('img/snorkel.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content">   
                    <p>Trips</p>
                    <a href="/tours-acuaticos" class="btn rounder">See details</a>
                  </div>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="card">
                  <picture >
                    <img src="{!!asset('img/transport.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">
                      <p>Traslados</p> 
                      <a href="#" class="btn rounder">See details</a>
                  </div>
                </div>
              </div>
          </div>
       </div>
       <div class="clear"></div>
       <div class="container-fluid" id="forget">
          <div class="container">
             <div class="row align-items-center">
               <div class="col-md-6">
                 <span class="title">Capture a beautifull moments</span>
                 <p>Rent a Camera,</p>
               </div>
             </div>
          </div>
       </div>
        <div class="container-fluid">
          <div id="products">
              <div class="col shadow-flow">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    One of three columns <br />
                    <a href="#" class="rounder">Add to my adveture</a>
                  </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="rounder">Add to my adventure</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">One of three columns <br />
                    <a href="#" class="rounder">Add to my adveture</a>
                </div>
              </div>
          </div>
       </div>
      <div class="gradient-bar" id="brages">
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="{!!asset('img/icons/1.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Staff capacitado</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/2.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Amabilidad y amigables</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/3.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Traslado incluido</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/4.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Calidad en el servicio</p>
            </div>
          </div>
        </div>
      </div>
      <div id="destiny">
          <div class="title">Conoce nuestros destinos</div>
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
      <div class="reviews">
        <div class="title">Clientes satisfechos</div>
        <hr>
        <div class="slider">
          <div class="sp-slides">
            <div class="sp-slide">
              <div class="row">
                <div class="col-2"><div class="title">"</div></div>
                <div class="col"><img class="shadow-flow" src="{!!asset('img/reviews/1.jpg')!!}" alt=""> <h3>La mejor experiencia que pude vivir en puerto vallarta,   servicio muy bueno y muy amable...</h3>
              <p>Diana Rosas  -  Peru</p></div>
                <div class="col-2"><div class="title">"</div></div>
              </div>
            </div>
            <div class="sp-slide">
             <div class="row">
                <div class="col-2"><div class="title">"</div></div>
                <div class="col"> <img class="shadow-flow" src="{!!asset('img/reviews/2.jpg')!!}" alt=""> <h3>La pasamos increible con los organizadores y todo my profesional </h3>
              <p>Edith - Canada</p></div>
                <div class="col-2"><div class="title">"</div></div>
              </div>
            </div>
            <div class="sp-slide">
              <div class="row">
                <div class="col-2"><div class="title">"</div></div>
                <div class="col">
                  <img  class="shadow-flow"src="{!!asset('img/reviews/82.jpg')!!}" alt="">
                  <h3>Experiencia increible con nuestros amigos y la pasamos genial todo fue  muy bien y el traslado excelente,  comodo y esncial</h3>
                  <p>Mark  - USA</p>
                </div>
                <div class="col-2"><div class="title">"</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
       @endsection