<header>
		<div class="top-bar">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-2 phone">
						<a href="tel:013222243171"><i class="fas fa-phone-alt"></i> 322-289-9180</a>
					</div>
					<div class="col-md-8"></div>
					<div class="col-md-2 languaje">
						<a href="{{ url('lang', ['en']) }}" class="@lang('global.show-ing')"><i class="fas fa-globe-americas"></i> En</a>
						<a href="{{ url('lang', ['es']) }}" class="@lang('global.show-esp')"><i class="fas fa-globe-americas"></i> Es</a>
					</div>
				</div>
			</div>		
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-8">
					<ul id="menu" class="nav justify-content-center">
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
