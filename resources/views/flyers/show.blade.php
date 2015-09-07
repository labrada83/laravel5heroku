@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-5">
			<h1>{{ $flyer->street }}</h1>
			<h2>${!! number_format($flyer->price) !!}</h2>
			<hr>
			<div class="description">{!! nl2br($flyer->description) !!}</div>
		</div>
		<div class="col-md-4">
			@foreach($flyer->photos as $photo)
				<img src="/{{ $photo->path }}" alt="">
			@endforeach
		</div>

	</div>

	<hr>
	<h2>Add Your Photos</h2>

	<form action="/{{$flyer->zip}}/{{$flyer->street}}/photos" method="POST" class="dropzone">
		{{ csrf_field() }}
	</form>
	
@stop

@section('script.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
@stop