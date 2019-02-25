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
<div id="combo" class="container">
    <div class="title">Paquetes Trips</div>
      <div class="slider" id="combo-slide">
        <div class="sp-slides">
          <div class="sp-slide">
            <div class="row shadow-flow">
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/product1.png')!!}"/><br>
                <strong>Camára</strong> +
              </div>
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/accesorios/1.jpg')!!}"/>
                <strong>Accesorio</strong> +
              </div>
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/accesorios/3.jpg')!!}"/>
                <strong>2 accesorio</strong> 
              </div>
            </div>
          </div>
          <div class="sp-slide">
            <div class="row shadow-flow">
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/product1.png')!!}"/>
              </div>
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/accesorios/1.jpg')!!}"/>
              </div>
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/accesorios/3.jpg')!!}"/>
              </div>
            </div>
          </div>
          <div class="sp-slide">
            <div class="row shadow-flow">
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/product1.png')!!}"/>
              </div>
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/accesorios/1.jpg')!!}"/>
              </div>
              <div class="col">
                <img class="img-fluid" src="{!!asset('img/accesorios/3.jpg')!!}"/>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
  <div class="clear"></div>
  <div class="container-fluid">
  <div class="title">Agrega una Cámara a tu aventura </div>
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
<section class="complements">
  <div class="title">nuestros accesorios:</div>
  <div class="container">
    <div class="row">
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/accesorios/1.jpg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/accesorios/2.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/accesorios/3.jpg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/accesorios/4.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/accesorios/1.jpg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
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
</section>

@endsection