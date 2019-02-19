	@extends('layout')
	@section('content')       
       <div class="container-fluid gradient-home">
           <div class="row align-items-end">
                <div class="col">
                  <div class="container text-center">
                    <h1>VDtrips</h1>
                    <p>Rent cameras and share beautifull moments </p>
                     <img src="{!!asset('img/bg2.png')!!}" alt="" class="img-fluid animated delay-1s fadeInUp">
                  </div>
                </div>
           </div>
       </div>
       <div class="container-fluid bg-1">
        <h2 class="title m4">Servicios de Calidad</h2>
          <div class="row" id="services">
              <div class="col shadow-flow">
              	 <img src="{!!asset('img/camera.jpeg')!!}" class="img-fluid" alt="">
                  <div class="content">
                    Cámaras<br />
                    <a href="#" class="btn rounder">Ver Modelos</a>
                  </div>
              </div>
              <div class="col shadow-flow">
              	 <img src="{!!asset('img/snorkel2.jpeg')!!}" class="img-fluid" alt="">
                <div class="content">   
                  Trips<br />
                  <a href="/tours-acuaticos" class="btn rounder">See details</a>
                </div>
              </div>
              {{-- <div class="col shadow-flow">
              	 <img src="{!!asset('img/hikings.jpeg')!!}" class="img-fluid" alt="">
                <div class="content">
         
                  Trips Terrestres <br />
                  <a href="/tours-terrestres" class="btn rounder">See details</a>
                </div>
              </div> --}}
              <div class="col shadow-flow">
              	<img src="{!!asset('img/transport.jpeg')!!}" class="img-fluid" alt="">
                <div class="content">
                    Traslados <br />
                    <a href="#" class="btn rounder">See details</a>
                </div>
              </div>
          </div>
       </div>
       <div class="clear"></div>
       <div class="container-fluid" id="forget">
          <div class="container">
             <div class="row align-items-center">
               <div class="col-md-6">
                 <span class="title">Capture a beautifull moments</span>
                 <p>Rent a Camera,</p>
               </div>
             </div>
          </div>
       </div>
        <div class="container-fluid">
          <div class="row" id="products">
              <div class="col shadow-flow">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                  </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="btn rounder">Add to my adveture</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="btn rounder">Add to my adventure</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                </div>
              </div>
          </div>
       </div>
       <div class="container-fluid" id="coach">
        <div class="gradient-bar"></div>
         <div class="container">
           <div class="row">
            <div class="col-md-12">
              <div class="title">Coaches</div>
              <p><em>our specialized couches</em></p>
            </div> 
             <div class="col-md-4">
                <section class="coach-card shadow">
                   <picture class="coach-pik">
                     <img src="{!!asset('img/coach/1.jpg')!!}" class="img-fluid" alt="">
                   </picture>
                   <div class="content">
                     <div class="name">Daniel Rodriguez</div>
                     <div class="social">
                       <a href="face">f</a>
                       <a href="insta">i</a>
                     </div>
                     <div class="description">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. At qui nesciunt incidunt ipsam nostrum vero ullam distinctio molestias odit eum, ad error ipsum reiciendis adipisci quae, maxime quisquam dolore! Excepturi!
                     </div>
                   </div>
               </section>
             </div>
             <div class="col-md-4">
              <section class="coach-card shadow">
               <picture class="coach-pik">
                 <img src="{!!asset('img/coach/2.jpg')!!}" class="img-fluid" alt="">
               </picture>
               <div class="content">
                 <div class="name">Maria Roma</div>
                 <div class="social">
                    <a href="face">f</a>
                    <a href="insta">i</a>
                 </div>
                 <div class="description">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ad magnam eum mollitia deleniti iste excepturi, id illo accusamus commodi perspiciatis laboriosam distinctio, amet minima numquam eligendi cum. Recusandae, error!
                 </div>
               </div>
               </section>
             </div>
             <div class="col-md-4">
              <section class="coach-card shadow">
               <picture class="coach-pik">
                 <img src="{!!asset('img/coach/3.jpg')!!}" class="img-fluid" alt="">
               </picture>
               <div class="content">
                 <div class="name">Juan Perez</div>
                 <div class="social">
                    <a href="face">f</a>
                    <a href="insta">i</a>
                 </div>
                 <div class="description">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur optio, rem rerum, nam exercitationem atque dolorum a. Porro ad eum accusantium alias amet, hic corporis. Itaque voluptatibus officiis nihil iusto.
                 </div>
               </div>
               </section>
             </div>
            </div>
         </div>
       </div>
       <div class="clear"></div>
       @endsection