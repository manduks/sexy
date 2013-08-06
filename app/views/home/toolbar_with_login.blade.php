<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
	<div class="container">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="../" class="navbar-brand">Amateur Mexicano</a>
		<div class="nav-collapse collapse bs-navbar-collapse">
			<ul class="nav navbar-nav pull-right">
				@if(!Auth::check())
					<li>
						<a href="{{URL::to('login')}}">Entrar</a>
					</li>
					<li>
						<a href="{{URL::to('signup')}}">Registrarse</a>
					</li>
				@else
					<li>
						<a href="{{URL::to('logout')}}">Salir</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</div>