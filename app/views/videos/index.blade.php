<a href="{{ route('videos.create') }}">Agregar</a>

@foreach ($videos as $video)
	<li>
		{{$video->title}} | 
		{{$video->description}} | 
		<video width="320" height="240" controls>
		  <source src="{{ $video->file }}" type="video/mp4">
		  <!-- <source src="movie.ogg" type="video/ogg"> -->
		  Your browser does not support the video tag.
		</video>
		|
		<a href="{{ route('videos.edit', $video->id) }}">Editar</a>
		{{ Form::open(array('route' => array('videos.destroy', $video->id), 'method' => 'delete')) }}
          {{ Form::submit('Eliminar') }}
        {{ Form::close() }}
	</li>
@endforeach