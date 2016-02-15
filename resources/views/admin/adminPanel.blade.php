@extends('layout')

@section('content')
<h1>All Applications</h1>
<!-- <a href="auth/logout">Logout</a> -->
<hr>
<div class="row">
	<div class="table-responsive">
		<table class="table table-bordered table-triped">
			 <thead>
				<tr>
					<td><strong>ID</strong></td>
					<td><strong>Name</strong></td>
					<td><strong>Email</strong></td>
					<td><strong>Age</strong></td>
					<td><strong>Job Type</strong></td>
					<td><strong>Prog Lang</strong></td>
					<td><strong>Interview Day</strong></td>
					<td><strong>Phone</strong></td>
					<td><strong>Created At</strong></td>
					<td><strong>Action</strong></td>
				</tr>
			 </thead>
			 <tbody>
				@foreach($employee as $person)
				  <tr>
				      <td>{{ $person->id }}</td>
				      <td>{{ $person->name }}</td>
				      <td>{{ $person->email }}</td>
				      <td>{{ $person->age }}</td>
				      <td>{{ $person->job_type }}</td>
				      <td>{{ $person->programming_lang }}</td>
				      <td>{{ $person->day }}</td>
				      <td>{{ $person->phone }}</td>
				      <td>{{ $person->created_at }}</td>
				      <td>
				      	
				      	 <form action="{{ route('admin.destroy',$person->id) }}" method="delete">
				      	 	<div class="form-group">
								<button class="btn btn-danger" type="submit">Delete App</button>
							</div>
				      	 </form>
				      </td>
			      </tr>
				@endforeach
			 </tbody>
		</table>
	</div>
</div>
<div class="row text-center">
	{!! str_replace('/?', '?', $employee->render()) !!}
</div>
@stop