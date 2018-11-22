<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="{!!asset('css/app.css')!!}">
    </head>
    <body>
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
        <h2>Check our models to get</h2>
          <div class="row" id="products">
              <div class="col shadow-flow">
                  <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                    One of three columns <br />
                    <a href="#" class="btn rounder">See details</a>
                  </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="btn rounder">See details</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                  <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">
                  One of three columns <br />
                  <a href="#" class="btn rounder">See details</a>
                </div>
              </div>
              <div class="col shadow-flow">
                <div class="content">
                    <img src="{!!asset('img/product1.png')!!}" class="img-fluid" alt="">One of three columns <br />
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
    </body>
</html>
