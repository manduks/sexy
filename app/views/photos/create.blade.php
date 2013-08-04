{{ Form::open(['route' => ['photos.store'],'files'=> true]) }}

	{{ Form::label('title', 'Titulo') }}
	{{ Form::text('title') }} <br>
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description') }}
	{{ Form::label('file', 'File') }}
	{{ Form::file('file') }}

	{{ Form::submit('Guardar') }}

{{ Form::close() }}