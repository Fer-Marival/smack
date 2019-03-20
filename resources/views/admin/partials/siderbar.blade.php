<!--/sidebar-menu-->
			<div class="sidebar-menu">
				<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
				<div class="down">	
					<a href="index.html"><img src="{{ asset('admin/images/admin.jpg') }}"></a>
					<a href="index.html"><span class=" name-caret">Gilberto Paredes</span></a>
					<p>System Administrator in Company</p>
					<ul>
						<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
						<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
						<li><a class="tooltips" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>Log out</span><i class="lnr lnr-power-switch"></i>
                                        
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </a></li>
					</ul>
				</div>
				<!--//down-->
                <div class="menu">
					<ul id="menu" >
						<li><a href="{{ route('home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
						<li id="menu-academico" ><a href="#"><i class="lnr lnr-user"></i> <span> Users &amp; Roles</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub" >
							<li id="menu-academico-avaliacoes" ><a href="{{ route('users.index') }}"> Users</a></li>
							<li id="menu-academico-boletim" ><a href="widget.html">Roles</a></li>
							<li id="menu-academico-avaliacoes" ><a href="calender.html">Permisos</a></li>
						</ul>
						</li>
						<li id="menu-academico" ><a href="#"><i class="fas fa-shopping-cart"></i> <span> Products &amp; Categories</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub" >
							<li id="menu-academico-avaliacoes" ><a href="{{ route('products.index') }}"> Products</a></li>
							<li id="menu-academico-boletim" ><a href="widget.html">Categories</a></li>
							<li id="menu-academico-avaliacoes" ><a href="calender.html">Permisos</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
<script>
	var toggle = true;
										
	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
									setTimeout(function() {
			$("#menu span").css({"position":"relative"});
			}, 400);
		}							
			toggle = !toggle;
		});
</script>