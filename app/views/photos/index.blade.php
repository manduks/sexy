<a href="{{ route('photos.create') }}">Agregar</a>

@foreach ($photos as $photo)
	<li>
		{{$photo->title}} | 
		{{$photo->description}} | 
		<img src="{{ $photo->file }}" width="48" height="48"> |
		<a href="{{ route('photos.edit', $photo->id) }}">Editar</a>
		{{ Form::open(array('route' => array('photos.destroy', $photo->id), 'method' => 'delete')) }}
          {{ Form::submit('Eliminar') }}
        {{ Form::close() }}
	</li>
@endforeach