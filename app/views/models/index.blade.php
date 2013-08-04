@foreach ($models as $model)
	<li>{{$model->name}} : {{$model->age}}</li>
@endforeach