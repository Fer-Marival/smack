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
                {{ $articulo->description }}<br />
                <a href="{{ route('cameras.show', $articulo->id) }}" class="rounder">Add to my adveture</a>
              </div>
          </div>
          @endforeach
      </div>
  </div>
    <div id="product">
      <product-component></product-component>
      
      <div class="clear"></div>
  </div>
@endsection