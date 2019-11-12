  @extends('layout')
  @section('content')     
  <div class="container-fluid">
      <div id="video">
        <video autoplay loop muted autoplay id="video-background" plays-inline>
            <source src="{!!asset('video/camera.mp4')!!}" type="video/mp4">
        </video>
        <div class="video-container">
         <div class="row justify-content-center align-self-center">
           <div class="col-md-6">
             <span>@lang('global.cam-enjoy')</span>
             <p>@lang('global.capture')</p>
           </div>
         </div>
      </div>
   </div>
  </div>
  <div class="clear"></div>
  <div class="container">
      <div class="row" id="products">
        @foreach($articulos as $articulo)
          {{––<div class="col-md-4 col-sm-6 shadow">
              <div class="content">
                <h4 class="card-title-article">{{ $articulo->name }}</h4>
                <img src="{{ asset($articulo->path) }}" height="300px" class="img-fluid" alt="">
                <div class="row container dates-product">
                  <span class="badge badge-light col-6">Price: $ {{ $articulo->price }}</span>
                  <span class="badge badge-warning col-6">Disponibles: {{ $articulo->available }}</span>
                </div>
                <br>
                <p>{{ $articulo->description }}</p>
                <div class="links-items">
                  <a href="{{ route('cameras.show', $articulo->id) }}" class="btn rounder">Ver Más</a>
                  <!--<a href="#" class="btn rounder">Add to my adveture</a>-->
                </div>
              </div>
          </div>--}}
             <div class="col  col-md-3">
                  <div class="product">
                       <img src="{{ $articulo->path }}" class="img-fluid" alt="">
                    <div class="container">
                        <div class="title">{{ $articulo->name }}</div>
                        <p>{{ $articulo->description }} </p>
                        <div class="row container dates-product">
                            <span class="badge badge-light col-6">Price: $ {{ $articulo->price }}</span>
                            <span class="badge badge-warning col-6">Disponibles: {{ $articulo->available }}</span>
                        </div>
                        <a href="{{ route('cameras.show', $articulo->id) }}" class="rounder">@lang('global.addTo')</a>
                    </div>
                  </div>
              </div>
        @endforeach
      </div>
  </div>
@endsection