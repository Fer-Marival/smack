	@extends('layout')
	@section('content') 
    <div id="acuatics">
        <div id="video">
          <video autoplay loop muted autoplay id="video-background" plays-inline>
              <source src="{!!asset('video/diving.mp4')!!}" type="video/mp4">
          </video>
          <div class="video-container">
            <div class="row justify-content-center align-items-center">
              <div class="col animated fadeInDown text-center">
                  <div class="logo">
                    <a href="/"><img src="{!!asset('img/logo.svg')!!}" alt="" class="img-fluid"></a>
                  </div>
                  <span>trips, rent a camera & personal host</span>
                  {{-- <div id="slideToOpen">
                      <div id="dot"></div>
                      <div id="cache"></div> 
                      <a href="#" id="close"></a>
                  </div> --}}
                  <div class="bounce">
                    <a class="fa fa-arrow-down fa-2x" href="#"></a>
                  </div>
              </div>
            </div>
          </div>
        </div>  
    </div>    
    <div class="container-fluid bg-1">
      <h2 class="title m4">@lang('global.OurServices')</h2>
      <span class="big-t">@lang('global.OurServices')</span>
      <div class="row" id="services">
          <div class="col-md-4">
            <div class="services">
              <div class="service s-camera">
                {{-- <picture>
                  <img src="{!!asset('img/camara.jpg')!!}" class="img-fluid" alt="">
                </picture> --}}
                <div class="content gradient-up">
                  <p>@lang('global.rentAcamera')</p>
                  <a href="{{ route('cameras.index') }}" class="btn rounder">Ver Modelos</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="services">
              <div class="service s-trips">
                {{-- <picture>
                  <img src="{!!asset('img/snorkel.jpg')!!}" class="img-fluid" alt="">
                </picture> --}}
                <div class="content gradient-up">   
                  <p>@lang('global.trips')</p>
                  <a href="/tours-acuaticos" class="btn rounder">Know our trips</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="services">
              <div class="service s-host">
                {{-- <picture >
                  <img src="{!!asset('img/transport.jpg')!!}" class="img-fluid" alt="">
                </picture> --}}
                <div class="content gradient-up">
                    <p>@lang('global.personalHost')</p> 
                    <a href="#" class="btn rounder">See details</a>
                </div>
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
          @dd(( $product ))
          <div class="col shadow-flow">
              <div class="content">
                <img src="{{ $product->path }}" class="img-fluid" alt="">
                {{ $product->description }} <br />
                <a href="{{ route('cameras.show', $product->id) }}" class="rounder">Ver Más</a>
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
      <div class="title m4">@lang('global.ourDestiny')</div>
      <span class="big-t">@lang('global.ourDestiny')</span>
      <div class="slider" id="destiny-slide">
        <div class="sp-slides">
          <div class="sp-slide">
            <a data-fancybox="gallery" href="{!!asset('img/destiny/1.jpg')!!}"><img class="img-fluid" src="{!!asset('img/destiny/1.jpg')!!}"/></a>
            <div class="title">Las Ánimas </div>     
          </div>
          <div class="sp-slide">
            <a data-fancybox="gallery" href="{!!asset('img/destiny/2.jpg')!!}"><img class="img-fluid" src="{!!asset('img/destiny/2.jpg')!!}"/></a>
            <div class="title">Cerro del  Mono </div>    
          </div>
          <div class="sp-slide">
            <a data-fancybox="gallery" href="{!!asset('img/destiny/3.jpg')!!}"><img class="img-fluid" src="{!!asset('img/destiny/3.jpg')!!}"/></a>
            <div class="title">Palo María</div>    
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