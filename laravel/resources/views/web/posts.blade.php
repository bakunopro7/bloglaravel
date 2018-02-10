@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-8 col-md-offset-2">

		<h2 class="text-center">PRUEBA</h2>
		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-headig">
				{{$post->name}}
			</div>
			<div class="panel-body">
				@if($post->file)
				<img src="{{ $post->file }}" alt="" class="img-fluid">
				@endif
				{{$post->excerpt}}
				<a href="#" class="pull-right">Leer mas..</a>
			</div>
		</div>
		@endforeach
		{{$posts->render()}}
	</div>

</div> 

@endsection