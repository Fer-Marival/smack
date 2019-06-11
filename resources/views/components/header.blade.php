<header>
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-2">
				<div class="logo">
					<a href="/"><img src="{!!asset('img/logo.svg')!!}" alt=""></a>
				</div>
			</div>
			<div class="col-md-8">
				<ul class="nav justify-content-end">
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
				  <li><a href="{{ url('lang', ['en']) }}">En</a></li>
				  <li><a href="{{ url('lang', ['es']) }}">Es</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>