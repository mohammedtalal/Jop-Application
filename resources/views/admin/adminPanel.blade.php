@extends('adminLayout')

@section('content')
<div class="col-sm-9 col-xs-10 content-margin-float">
	<div class="table-responsive">
		<table class="table table-bordered table-triped">

			 <thead>
				<tr>
					<th class="span1">ID</th>
					<th class="span4">Name</th>
					<th class="span2">Email</th>
					<th class="span2">Age</th>
					<th class="span2">Job Type</th>
					<th class="span2">Pro.language</th>
					<th class="span2">Interview </th>
					<th class="span2">Phone</th>
					<th class="span1">Created At</th>
					<th class="span2">Action</th>
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
				      <td>{{ $person->created_at->diffForHumans() }}</td>
				      <!-- <td>
				      	 <form action="{{ url('admin',$person->id) }}" method="delete">
				      	 	<div class="form-group">
								<button class="btn btn-danger" type="submit">Delete App</button>
							</div>
				      	 </form>
				      </td> -->
				      <td><a href="{{ url('admin',$person->id) }}" class="btn btn-danger">Delete</a></td>
			      </tr>
				@endforeach
			 </tbody>
		</table>
		{!! str_replace('/?', '?', $employee->render()) !!}
	</div>
	@unless(count($employee))
		<h3>You haven't any applications yet!</h3>
	@endunless
</div>
@stop