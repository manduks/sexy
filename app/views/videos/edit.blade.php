{{ Form::model($video, ['route' => ['videos.update', $video->id],'files'=> true,'method'=>'PUT']) }}

	{{ Form::label('title', 'Titulo') }}
	{{ Form::text('title') }} <br>
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description') }}
	{{ Form::label('file', 'File') }}
	{{ Form::file('file') }}
	
	{{ Form::submit('Guardar') }}

{{ Form::close() }}