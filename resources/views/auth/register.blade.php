@extends('adminLayout')

@section('content')
<div class="col-sm-9 col-xs-10 content-margin-float">
	<h1>Register</h1
	<hr>

	<form method="POST" action="register">
	{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default">
		</div>
	</form>

	@include('error')
</div>
@stop