@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Login</h1>
			<hr>
			<form method="POST" action="login">
			{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember"> Remember me
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default">
				</div>
			</form>
			
			@include('error')
		</div>
	</div>
@stop