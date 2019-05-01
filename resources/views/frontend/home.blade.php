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
    <div class="container-fluid bg-1">
        <h2 class="title m4">Our services</h2>
          <div class="row" id="services">
              <div class="col col-md-4">
                <div class="service">
                   <picture>
                     <img src="{!!asset('img/camara.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">
                    <p>Rent a Camera</p>
                    <a href="{{ route('cameras.index') }}" class="btn rounder">Ver Modelos</a>
                  </div>
                </div>
              </div>
              <div class="col col-md-4">
                <div class="service">
                   <picture>
                    <img src="{!!asset('img/snorkel.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">   
                    <p>Trips</p>
                    <a href="/tours-acuaticos" class="btn rounder">Know our trips</a>
                  </div>
                </div>
              </div>
              <div class="col col-md-4">
                <div class="service">
                  <picture >
                    <img src="{!!asset('img/transport.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">
                      <p>Personal Host</p> 
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
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 7 Black<br />
                    <a href="#" class="rounder">Add to my adveture</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 7 Silver <br />
                    <a href="#" class="rounder">Add to my adveture</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 6 Black <br />
                    <a href="#" class="rounder">Add to my adventure</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                      <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">GoPro 7 Session <br />
                      <a href="#" class="rounder">Add to my adveture</a>
                  </div>
                </div>
              </div>
          </div>
       </div>
      <div class="gradient-bar" id="brages">
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="{!!asset('img/icons/1.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Professional Staff</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/2.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Kindness and friendly</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/3.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Transfer included</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/4.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">Quality in the service</p>
            </div>
          </div>
        </div>
      </div>
      <div id="destiny">
          <div class="title">Our Destiny</div>
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
        <div class="title">what people say?</div>
        <hr>
        <div class="slider">
          <div class="sp-slides">
            <div class="sp-slide">
              <div class="row">
                <div class="col-2"><div class="title">"</div></div>
                <div class="col"><img class="shadow-flow" src="{!!asset('img/reviews/1.jpg')!!}" alt=""> <h3>best experience I could live in puerto vallarta, very good and very friendly service ...</h3>
              <p>Diana Rosas  -  USA</p></div>
                <div class="col-2"><div class="title">"</div></div>
              </div>
            </div>
            <div class="sp-slide">
             <div class="row">
                <div class="col-2"><div class="title">"</div></div>
                <div class="col"> <img class="shadow-flow" src="{!!asset('img/reviews/2.jpg')!!}" alt=""> <h3>We had an incredible time with the organizers and all my professional </h3>
              <p>Edith - Canada</p></div>
                <div class="col-2"><div class="title">"</div></div>
              </div>
            </div>
            <div class="sp-slide">
              <div class="row">
                <div class="col-2"><div class="title">"</div></div>
                <div class="col">
                  <img  class="shadow-flow"src="{!!asset('img/reviews/82.jpg')!!}" alt="">
                  <h3>Amazing experience with our friends and we had a great time everything was very good and the transfer excellent, comfortable and essential</h3>
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