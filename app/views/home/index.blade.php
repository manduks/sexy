@section('content')
	<div class="home">
		@for($i=0; $i < 18; $i++)
			<!-- <img src="http://global.dagfs.com/paysites/mediabuy/warning/dagfs/img9.jpg" alt=""> -->
			<img src="{{{ asset('assets/images/img9.jpg') }}}">
		@endfor
	</div>
	<div class="slogan">
		Amateur 		
	</div>
	<div class="slogan slogan2">
		Mexicano 		
	</div>
@stop