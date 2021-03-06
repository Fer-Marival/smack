 
   @extends('layout')
   @section('content')     
  <div class="container-fluid" id="acuatics">
      <div id="video">
        <video autoplay loop muted autoplay id="video-background" plays-inline>
           <!--  <source src="{!!asset('video/diving.mp4')!!}" type="video/mp4"> -->
        </video>
        <div class="video-container">
         <div class="row justify-content-center align-self-center">
           <div class="col-md-6">
             <span>Enjoy the Best trips…</span>
             <p>have fun width anithing and enjoy the places </p>
           </div>
         </div>
      </div>
   </div>
 </div>
 <div class="clear"></div>
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-2">
        <h3 class="title">
          Trips Acuaticos
        </h3>
        <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                <br />
                <strong>Our Destinations</strong>
                <ul>
                  <li>Puerto Vallarta DownTown &#8594;</li>
                  <li>La Marina &#8594;</li>
                  <li>Mismaloya beach &#8594;</li>
                  <li>Cerro del mono &#8594;</li>
                  <li>Cascadas de Mismaloya &#8594;</li>
                </ul>
              </div> 
      </div>
      <div class="col-md-8">
        <div class="trips">
            <div class="col snorkel">
                <div class="content">
                  <p>Trips Snorkel</p>
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
            </div>
            <div class="col paddle">
                <div class="content">
                  <p>Paddle Board session</p>
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
            </div>
            <div class="col kayak">
                <div class="content">
                  <p>Trips on Kayaks</p>
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row justify-content-center">
      <div class="col-md-2">
        <h3 class="title">
          Trips Terrestres
        </h3>
        <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br />
                <strong>Our Destinations</strong>
                <ul>
                  <li>Puerto Vallarta DownTown &#8594;</li>
                  <li>La Marina &#8594;</li>
                  <li>Mismaloya beach &#8594;</li>
                  <li>Cerro del mono &#8594;</li>
                  <li>Cascadas de Mismaloya &#8594;</li>
                </ul>
              </div> 
      </div>
      <div class="col-md-8">
        <div class="trips">
            <div class="col bicycle">
                <div class="content">
                  <p>One of three columns</p>
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
            </div>
            <div class="col hiking">
                <div class="content">     
                  <p>One of three columns</p>
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
            </div>
            <div class="col">
                <div class="content">
                  <p>One of three columns</p>
                  <a href="#" class="rounder">Add to my adveture</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid bg-2">
     <div id="products" class="justify-content-center ">
          <div class="col-md-12">
             <h3 class="title">Your best complements for you trips</h3>
          </div>
          <div class="col">
              <div class="content">
                <picture>
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                </picture>
                <p>One of three columns</p>
              </div>
              <div class="row">
                <a href="#" class="">+ Add</a>
                <a href="#" class="btn-info">See Details</a>
              </div>  
          </div>
          <div class="col">
            <div class="content">
              <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
              One of three columns <br />
            </div>
            <div class="row">
                <a href="#" class="">+ Add</a>
                <a href="#" class="btn-info">See Details</a>
              </div> 
          </div>
          <div class="col">
              <div class="content">
                <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                One of three columns <br />
              </div>
              <div class="row">
                  <a href="#" class="">+ Add</a>
                  <a href="#" class="btn-info">See Details</a>
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
  
<!--   <div class="tour section paddle">
    <div class="gradient-right">
      <div class="container">
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
            <div class="content">
              <div class="title">
                Paddle Board session
              </div>
              <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat velit quia impedit obcaecati maxime soluta sint tenetur. Amet dolore velit veniam.
                <ul>
                  <li>Puerto Vallarta DownTown &#8594;</li>
                  <li>La Marina &#8594;</li>
                  <li>Mismaloya beach &#8594;</li>
                  <li>Cerro del mono &#8594;</li>
                  <li>Cascadas de Mismaloya &#8594;</li>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
    <div class="tour section snorkel">
    <div class="gradient-left">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="content">
              <div class="title">
                Snorkel
              </div>
              <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat velit quia impedit obcaecati maxime soluta sint tenetur. Amet dolore velit veniam.
                <ul>
                  <li>Puerto Vallarta DownTown &#8594;</li>
                  <li>La Marina &#8594;</li>
                  <li>Mismaloya beach &#8594;</li>
                  <li>Cerro del mono &#8594;</li>
                  <li>Cascadas de Mismaloya &#8594;</li>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div> -->

@endsection