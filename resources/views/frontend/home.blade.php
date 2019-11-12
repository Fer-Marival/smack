	@extends('layout')
	@section('content') 
    <div id="home">
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
                      <div><p>@lang('global.bestPlace')</p></div>
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
                    <p>@lang('global.rentAcamera')</p>
                    <a href="{{ route('cameras.index') }}" class="btn rounder">Ver Modelos</a>
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
                    <a href="/tours-acuaticos" class="btn rounder">Know our trips</a>
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
            @foreach($products as $product)
               <div class="col-12 col-md-3">
                  <div class="product">
                       <img src="{{ $product->path }}" class="img-fluid" alt="">
                    <div class="container">
                        <div class="title">{{ $product->name }}</div>
                        <p>{{ $product->description }} </p>
                        <a href="{{ route('cameras.show', $product->id) }}" class="rounder">@lang('global.addTo')</a>
                    </div>
                  </div>
              </div>
            @endforeach
          </div>
       </div>
      <div class="gradient-bar" id="brages">
        <div class="container">
          <div class="row">
            @foreach($services as $service)
            <div class="col">
              <img src="{{ $service->path }}" class="img-fluid" alt="">
              <p class="text-center">{{ $service->name }}</p>
            </div>
            @endforeach
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