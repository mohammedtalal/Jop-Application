@extends('layout')

@section('content')
	<form method="POST" action="{{ route('admin.store') }}">
	{{ csrf_field() }}
		<div class="form-group">
			<label >To:</label>
			<input type="email" name="email" id="email" class="form-control" value="example@hotmail.com" disabled="true" >
		</div>
		<div class="form-group">
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" >
		</div>
		<div class="form-group">
			<label for="subject">message:</label>
			<TEXTAREA type="text" name="message" id="message" class="form-control" value="{{ old('message') }}" rows="6" >

			</TEXTAREA>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
	</form>
@stop