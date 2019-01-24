  @extends('layout')
  @section('content')     
  <div class="container-fluid" id="acuatics">
      <div id="video">
        <video autoplay loop muted autoplay id="video-background" plays-inline>
            <source src="{!!asset('video/diving.mp4')!!}" type="video/mp4">
        </video>
        <div class="video-container">
         <div class="row justify-content-center align-self-center">
           <div class="col-md-6">
             <span>Enjoy the Water in your trips…</span>
             <p>Underwater and Upwater activities</p>
           </div>
         </div>
      </div>
   </div>
 </div>
<div class="container-fluid">
          <div class="row" id="products">
              <div class="col shadow-flow">
                  <div class="content">
                    <img src="{!!asset('img/snorkel.png')!!}" class="img-fluid" alt="">
                    One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                  </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/snorkel2.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="btn rounder">Add to my adveture</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="btn rounder">Add to my adventure</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                    <img src="{!!asset('img/kayak2.jpg')!!}" class="img-fluid" alt="">One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                </div>
              </div>
               <div class="col shadow-flow">
                <div class="content">
                    <img src="{!!asset('img/paddle.png')!!}" class="img-fluid" alt="">One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                </div>
              </div>
               <div class="col shadow-flow">
                <div class="content">
                    <img src="{!!asset('img/paddle2.png')!!}" class="img-fluid" alt="">One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                </div>
              </div>
          </div>
     </div>

          @endsection