@extends('master')
<div class="row show-grid pattern">
	@for($i=0; $i < 8; $i++)
		<div class="col-lg-6 video">
			<div class="video-contanier">
				<video width="560" height="300" controls>
				  <source src="uploads/Z0eyo8r0/Yo no fui - YouTube.mp4" type="video/mp4">
				  <!-- <source src="movie.ogg" type="video/ogg"> -->
				  Your browser does not support the video tag.
				</video>
				<div class="video-description">Chica en el metro, a esta zorra le gusta que le den por todos lados.</div>
			</div>
		</div>
		<div class="col-lg-6 video">
			<div class="video-contanier">
				<video width="560" height="300" controls>
			  <source src="uploads/Z0eyo8r0/Yo no fui - YouTube.mp4" type="video/mp4">
			  <!-- <source src="movie.ogg" type="video/ogg"> -->
			  Your browser does not support the video tag.
			</video>
			<div class="video-description">Chica en el metro, a esta zorra le gusta que le den por todos lados.</div>
			</div>
		</div>
	@endfor
</div>