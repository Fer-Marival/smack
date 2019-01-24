	@extends('layout')
	@section('content')       
       <div class="container-fluid gradient-home">
           <div class="row align-items-end">
                <div class="col">
                  <div class="container text-center">
                    <h1>CoolTourThings</h1>
                    <p>Rent cameras and share beautifull moments </p>
                     <img src="{!!asset('img/bg2.png')!!}" alt="" class="img-fluid animated delay-1s fadeInUp">
                  </div>
                </div>
           </div>
       </div>
       <div class="container-fluid">
        <h2>Servicios de Calidad</h2>
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
                  Tours Acuaticos<br />
                  <a href="/tours-acuaticos" class="btn rounder">See details</a>
                </div>
              </div>
              <div class="col shadow-flow">
              	 <img src="{!!asset('img/hikings.jpeg')!!}" class="img-fluid" alt="">
                <div class="content">
         
                  Tours Terrestres <br />
                  <a href="#" class="btn rounder">See details</a>
                </div>
              </div>
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
                 <span>Capture a beautifull moments</span>
                 <p>Rent a Camera,</p>
               </div>
             </div>
          </div>
       </div>
        <div class="container-fluid">
          <div class="row" id="products">
              <div class="col shadow-flow">
                  <div class="content">
                    <img src="{!!asset('img/kayak1.jpeg')!!}" class="img-fluid" alt="">
                    One of three columns <br />
                    <a href="#" class="btn rounder">Add to my adveture</a>
                  </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/kayak2.jpg')!!}" class="img-fluid" alt="">
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
          </div>
       </div>
       @endsection