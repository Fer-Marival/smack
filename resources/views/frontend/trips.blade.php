 
   @extends('layout')
   @section('content')     
<div class="clear"></div>
<div class="container-fluid">
    <div class="row justify-content-center bg-1">
      <div class="col-md-4">
        <h3 class="title">
          AquaTrips
        </h3>
        <div class="description">
                Rent our aquatic equipment and immerse yourself in the beautiful beaches of Puerto Vallarta, Riviera Nayarit and Cabo Corrientes, discover underwater beauty, enjoy the water and the marine fauna.
                <ul>
                  <li>Los arcos of mismaloya &#8594;</li>
                  <li>Colomitos Beach &#8594;</li>
                  <li>Animas beach &#8594;</li>
                  <li>Punta de Mita &#8594;</li>
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
      <div class="col-md-4">
        <h3 class="title">
          Hikings Trips
        </h3>
        <div class="description">
                Travel the city or discover wonderful places, visit the hidden beaches or just walk through the city knowing the culture enjoying every magical moment.
                <ul>
                  <li>Puerto Vallarta DownTown Bicycle tour &#8594;</li>
                  <li>Hiking to Cerro del Mono &#8594;</li>
                  <li>Hiking to Colomitos beach to Animas beach &#8594;</li>
                  <li>Cerro del mono &#8594;</li>
                  <li>Mismaloya Waterfalls &#8594;</li>
                </ul>
              </div> 
      </div>
      <div class="col-md-8">
        <div class="trips">
            <div class="col bicycle">
                <div class="content">
                  <p>Bicycle tour on city</p>
                  <a href="#" class="rounder">Go to trip</a>
                </div>
            </div>
            <div class="col hiking">
                <div class="content">     
                  <p>Hiking trip</p>
                  <a href="#" class="rounder">Go to trip</a>
                </div>
            </div>
            <div class="col">
                <div class="content">
                  <p>One of three columns</p>
                  <a href="#" class="rounder">Go to trip</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  <div class="container-fluid">
          <div id="products">
            <div class="col-md-12"><h3 class="title">Your best complements for you trips</h3></div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 7 Black<br />
                    <a href="#" class="rounder">Add to my adveture</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 7 Silver <br />
                    <a href="#" class="rounder">Add to my adveture</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    GoPro 6 Black <br />
                    <a href="#" class="rounder">Add to my adventure</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="product">
                  <div class="content">
                      <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">GoPro 7 Session <br />
                      <a href="#" class="rounder">Add to my adveture</a>
                  </div>
                </div>
              </div>
          </div>
       </div>
  
{{-- <div class="tour section paddle">
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
                <div class="title">Snorkel</div>
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
    --}}

@endsection