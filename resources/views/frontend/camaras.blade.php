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
  <div class="container-fluid">
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
          <div class="col shadow">
            <div class="content">
                <img src="{!!asset('img/kayak2.jpg')!!}" class="img-fluid" alt="">One of three columns <br />
                <a href="#" class="btn rounder">Add to my adveture</a>
            </div>
          </div>
          <div class="col shadow">
            <div class="content">
                <img src="{!!asset('img/paddle.png')!!}" class="img-fluid" alt="">One of three columns <br />
                <a href="#" class="btn rounder">Add to my adveture</a>
            </div>
          </div>
          <div class="col shadow">
            <div class="content">
                <img src="{!!asset('img/paddle2.png')!!}" class="img-fluid" alt="">One of three columns <br />
                <a href="#" class="btn rounder">Add to my adveture</a>
            </div>
          </div>
      </div>
  </div>
  <div class="clear"></div>
  <div class="section tour hiking">
    <div class="gradient-left">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="content">
              <div class="title">
                Hiking
              </div>
              <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat velit quia impedit obcaecati maxime soluta sint tenetur. Amet dolore velit veniam, nesciunt asperiores aliquid a quo ipsum voluptatibus laboriosam ex!
                <ul>
                  <li>Colomitos &#8594;</li>
                  <li>Las animas &#8594;</li>
                  <li>Palo maria &#8594;</li>
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
  <div class="tour section bicycle">
    <div class="gradient-right">
      <div class="container">
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
            <div class="content">
              <div class="title">
                Bicycle city Tour
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