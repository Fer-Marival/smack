  @extends('layout')
  @section('content')     
  <div class="container-fluid" id="acuatics">
      <div id="video">
        <video autoplay loop muted autoplay id="video-background" plays-inline>
            <source src="{!!asset('video/camera.mp4')!!}" type="video/mp4">
        </video>
        <div class="video-container">
         <div class="row justify-content-center align-self-center">
           <div class="col-md-6">
             <span>Enjoy the places</span>
             <p>and capture every moments</p>
           </div>
         </div>
      </div>
   </div>
  </div>
  <div class="clear"></div>
<div class="container-fluid">
    <div id="products">
      @foreach($articulos as $articulo)
      <div class="col shadow-flow">
          <div class="content">
           <img src="{{ asset($articulo->image) }}" class="img-fluid" alt="">
            {{ $articulo->name }}<br />
             <p>{{ $articulo->description }}</p><br />
            <a href="{{ route('cameras.show', $articulo->id) }}" class="rounder">Ver Más</a>
          </div>
      </div>
      @endforeach
  </div>
   <div class="row">
    <ul>
      <p>Ver Más</p> </span>{{ $articulos->links() }}
    </ul>
  </div>
</div>
  {{-- <div class="container">
      <div class="row" id="products">
        @foreach($articulos as $articulo)
          <div class="col-md-4 col-sm-6 shadow">
              <div class="content">
                <h4 class="card-title-article">{{ $articulo->name }}</h4>
                <img src="{{ asset($articulo->image) }}" height="300px" class="img-fluid" alt="">
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
          </div>
        @endforeach
      </div>
  </div> --}}

<section class="complements">
  <div class="container">
    <h1 class="complements">Complementos</h1>
    <div class="row">
        @foreach($complements as $complement)
          <div class="col">
            <div class="complement">
              <img src="{{ $complement->image }} " class="img-fluid" alt="">
              <p> {{ $complement->name }} </p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
        @endforeach 
    </div>
  </div>
</section>

@endsection