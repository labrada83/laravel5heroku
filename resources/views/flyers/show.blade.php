@extends('layout')

@section('content')
	<h1>{{ $flyer->street }}</h1>
	<h2>${!! number_format($flyer->price) !!}</h2>
	<hr>
	<div class="description">{!! nl2br($flyer->description) !!}</div>
@stop

@section('script.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
@stop	