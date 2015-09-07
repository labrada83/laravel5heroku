@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Register</h1>

			<form action="/auth/register" method="POST">
				{!! csrf_field() !!}	

				<div class="form-group">
					<label for="email">Name:</label>
					<input type="name" id="name" name="name" class="form-control" value="{{ old('name')}}" required>
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" class="form-control" value="{{ old('email')}}" required>
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="password_confirmation">Confirm Password:</label>
					<input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
				</div>

				<hr>

				<div class="form-group">
					<button type="submit" class="btn btn-default">Register</button>
				</div>

			</form>

			@include('errors')

		</div>
	</div>

@stop