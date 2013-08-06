@extends('master')
<div class="sexy">
	<div class="login">
		{{ Form::open(['route' => 'login']) }}
			<div class="form-group">
				{{ Form::label('email', 'Email') }}
				{{ Form::text('email',null,array( 'placeholder' => "email" , 'class' => "form-control")) }}
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Contraseña') }}
				{{ Form::password('password', array( 'placeholder' => "Password", 'class' => "form-control")) }}
			</div>
			{{ Form::submit('Enviar', array('class' => "btn btn-default")) }}
		{{ Form::close() }}
	</div>
</div>