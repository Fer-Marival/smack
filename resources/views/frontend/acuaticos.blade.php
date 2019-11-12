 
   @extends('layout')
   @section('content')     
  <div class="" id="acuatics">
      <div id="video">
          <video autoplay loop muted autoplay id="video-background" plays-inline>
              <source src="{!!asset('video/diving.mp4')!!}" type="video/mp4">
          </video>
        <div class="video-container">
           <div class="row justify-content-center align-self-center">
             <div class="col-md-6">
               <h3 class="title"> Trips </h3>
             </div>
           </div>
        </div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12">
          
          <div class="description">
           <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat velit quia impedit obcaecati maxime soluta sint tenetur. Amet dolore velit veniam.
            <ul>
              <li>Puerto Vallarta DownTown &#8594;</li>
              <li>La Marina &#8594;</li>
              <li>Mismaloya beach &#8594;</li>
              <li>Cerro del mono &#8594;</li>
              <li>Cascadas de Mismaloya &#8594;</li>
            </ul> -->
          </div> 
        </div>
        <div class="col-md-12">
          <div class="trips" id="services">
            @foreach($tours as $tour)
                <div class="col-md-4">
                  <div class="service">
                     <picture>
                       <img src="{{$tour->image}}" class="img-fluid" alt="">
                    </picture>
                    <div class="content gradient-up">
                      <p>{{ $tour->name }}</p>
                      <a href="{{ route('trips.show', $tour->id) }}" class="btn rounder">@lang('global.book')</a>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
  </div>


@foreach($product as $productos)
  <p>{{$productos->name}}</p>
@endforeach
{{--@foreach($tours as $tour)
  <div class="tour section paddle">
    <div class="gradient-right">
      <div class="container">
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
            <div class="content">
              <div class="title">
                {{ $tour->name }}
              </div>
              <div class="description">
                {{ $tour->description }}
                <ul>
                  @foreach(json_decode($tour->destinos, true) as $key => $value)
                    <li>{{ $value }}</li>
                  @endforeach
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
@endforeach--}}
@endsection