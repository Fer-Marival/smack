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
                        <div><section class="title">@lang('global.rent')<section></div>
                        <div><section class="title">@lang('global.enjoy')<section></div>
                        <div><section class="title">@lang('global.know')</section></div>
                        <div><section class="title">@lang('global.confort')</section></div>
                    </div>
                 </div>
                  <div class="col-md-6">
                     <div id="slider-right">
                        <div><p>@lang('global.rentCamera')</p></div>
                        <div><p>@lang('global.beautifullMoment')</p></div>
                        <div><p>@lang('global.bestPlace') </p></div>
                        <div><p>@lang('global.yourTraslate')</p></div>
                    </div>
                 </div>
             </div>
          </div>
       </div>
     </div>      
    <div class="container-fluid bg-1">
        <h2 class="title m4">@lang('global.OurServices')</h2>
          <div class="row" id="services">
              <div class="col-md-4">
                <div class="service">
                   <picture>
                     <img src="{!!asset('img/camara.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">
                    <p>@lang('global.home')</p>
                    <a href="{{ route('cameras.index') }}" class="btn rounder">@lang('global.seeModel')</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service">
                   <picture>
                    <img src="{!!asset('img/snorkel.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">   
                    <p>@lang('global.trips')</p>
                    <a href="/tours-acuaticos" class="btn rounder">@lang('global.seeMore')</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="service">
                  <picture >
                    <img src="{!!asset('img/transport.jpg')!!}" class="img-fluid" alt="">
                  </picture>
                  <div class="content gradient-up">
                      <p>@lang('global.personalHost')</p> 
                      <a href="#" class="btn rounder">@lang('global.seeMore')</a>
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
                 <span class="title">@lang('global.capture')</span>
                 <p>@lang('global.rent') @lang('global.rentCamera')</p>
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
                    <a href="{{ route('cameras.index') }}" class="rounder">@lang('global.addTo')</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 7 Silver <br />
                    <a href="{{ route('cameras.index') }}" class="rounder">@lang('global.addTo')</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 6 Black <br />
                    <a href="{{ route('cameras.index') }}" class="rounder">@lang('global.addTo')</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                      <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">GoPro 7 Session <br />
                      <a href="{{ route('cameras.index') }}" class="rounder">@lang('global.addTo')</a>
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
              <p class="text-center">@lang('global.staff')</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/2.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">@lang('global.friendly')</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/3.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">@lang('global.transferIncluded')</p>
            </div>
            <div class="col">
              <img src="{!!asset('img/icons/4.svg')!!}" class="img-fluid" alt="">
              <p class="text-center">@lang('global.quality')</p>
            </div>
          </div>
        </div>
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
      <div class="reviews">
        <div class="title">@lang('global.opinion')</div>
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