@extends('layout')

@section('content')
	<h1>Job Application Form</h1>
	<hr>
	<div class="row">
			
	<form action="{{ Route('jobs.store') }}" method="POST" enctype="multipart/form-data"  class="col-md-8">
		@include('job.form')

		@if(count($errors) > 0 )
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

	</form>
	</div>
@stop