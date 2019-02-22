 
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
  <div class="tour section paddle">
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
  </div>

          @endsection