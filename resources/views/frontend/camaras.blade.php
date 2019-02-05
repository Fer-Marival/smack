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
  <div class="clear"></div>
  <div class="container">
      <div class="row" id="products">
          <div class="col shadow">
              <div class="content">
                <img src="{!!asset('img/snorkel.png')!!}" class="img-fluid" alt="">
                One of three columns <br />
                <a href="#" class="btn rounder">Add to my adveture</a>
              </div>
          </div>
          <div class="col shadow">
            <div class="content">
              <img src="{!!asset('img/snorkel2.png')!!}" class="img-fluid" alt="">
              One of three columns <br />
              <a href="#" class="btn rounder">Add to my adveture</a>
            </div>
          </div>
          <div class="col shadow">
            <div class="content">
              <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
              One of three columns <br />
              <a href="#" class="btn rounder">Add to my adventure</a>
            </div>
          </div>
      </div>
  </div>
  <div class="clear"></div>
<section class="complements">
  <div class="container">
    <div class="row">
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          <div class="col">
            <div class="complement">
              <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
              <p>Float Sticky</p>
              <a href="#" class="btn rounder">+ add complements</a>
            </div>
          </div>
          
      </div>
  </div>
</section>

@endsection