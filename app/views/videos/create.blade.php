{{ Form::open(['route' => ['videos.store'],'files'=> true]) }}

	{{ Form::label('title', 'Titulo') }}
	{{ Form::text('title') }} <br>
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description') }}
	{{ Form::label('file', 'File') }}
	{{ Form::file('file') }}
	asdasd

	{{ Form::submit('Guardar') }}

{{ Form::close() }}