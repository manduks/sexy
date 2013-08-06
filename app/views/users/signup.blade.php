@extends('master')
<div class="sexy">
	<div class="login signup">
		{{ Form::open(['route' => 'signup']) }}
			<div class="form-group">
				{{ Form::label('email', 'Email') }}
				{{ Form::text('email',null,array( 'placeholder' => "email" , 'class' => "form-control")) }}
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Contraseña') }}
				{{ Form::password('password', array( 'placeholder' => "Password", 'class' => "form-control")) }}
			</div>
			<div class="form-group">
				{{ Form::label('confirm_password', 'Confirm Password') }}
				{{ Form::password('password', array( 'placeholder' => "Password", 'class' => "form-control")) }}
			</div>
			{{ Form::submit('Enviar', array('class' => "btn btn-default")) }}
		{{ Form::close() }}
</div>
</div>