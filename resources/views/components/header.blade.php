<header>
	<div class="container-fluid">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-2">
				<div class="logo">
					<a href="/"><img src="{!!asset('img/logo.svg')!!}" alt=""></a>
				</div>
			</div>
			<div class="col-md-8">
				<ul id="menu" class="nav justify-content-end">
				  <li class="nav-item">
				    <a class="nav-link active" href="/">@lang('global.home')</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="/trips">@lang('global.experiences')</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="/cameras">@lang('global.cameras')</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">@lang('global.contact')</a>
				  </li>
				 {{-- @if( url('lang', ['es']))
			            <a href="{{ url('lang', ['es']) }}" class="nav-top-link">
			                <i class="fas fa-globe-americas"></i> Español
			            </a>
			        @else
			            <a href="{{ url('lang', ['en']) }}" class="nav-top-link">
			                <i class="fas fa-globe-americas"></i> English
			            </a>
			        @endif --}}
				  <li class="nav-item">
				  	<a class="nav-link" href="{{ url('lang', ['en']) }}"><i class="fas fa-globe-americas"></i>En</a>
				  </li>
				  <li class="nav-item">
				 	<a class="nav-link" href="{{ url('lang', ['es']) }}"><i class="fas fa-globe-americas"></i>Es</a>
				 </li>
				</ul>
			</div>
			<nav id="mobile__menu">
				<a id="menu__open" href="#menu__open"></a>
				<a id="menu__close" href="#menu__close"></a>
		        <ul class="panel">
		          <li class="panel__item"><a class="panel__href" href="/"> <i class="fas fa-home"></i> @lang('global.home')</a></li>
		          <li class="panel__item"><a class="panel__href" href="/trips"><i class="fas fa-hiking"></i>  @lang('global.experiences')</a></li>
		          <li class="panel__item"><a class="panel__href" href="/cameras"> <i class="fas fa-camera-retro"></i>  @lang('global.cameras')</a></li>
		          <li class="panel__item"><a class="panel__href" href="mailto:vdtrips.experience@gmail.com"> <i class="fas fa-envelope-open-text"></i> @lang('global.contact')</a></li>
		        </ul>
	      	</nav>
		</div>
	</div>
</header>