@inject('days','App\Http\Utilities\Day')
	{{ csrf_field() }}

	<div class="form-group" >
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
	</div>
	
	<div class="form-group">
		<label for="email">Email-Address:</label>
		<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
	</div>

	<div class="form-group">
		<label for="age">Age:</label>
		<input type="text" name="age" id"age" class="form-control" value="{{ old('age') }}" required>
	</div>
	
	<label>What type of job are you looking for ?</label>
	<div class="radio">
		<label>
			<input type="radio" name="job_type"  value="programming" checked="checked">Programming
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="job_type"  value="designer" >Designer
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="job_type"  value="manager" >Manager
		</label>
	</div>

	<label>Which programming language do you work with ? </label>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="programming_lang[]"  value="php" checked="checked">PHP
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="programming_lang[]"  value="html" > HTML
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="programming_lang[]"  value="javascript" > JavaScript
		</label>
	</div>

	<div class="form-group">
		<label for="days">Which days of the week are you available for an interview ?</label>
		<select class="form-control" name="day" >
			@foreach($days::all() as $day => $key)
				<option value="{{ $key }}"> {{ $day }} </option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="phone">phone number to Contact with you:</label>
		<input type="text" name="phone" class="form-control"  >
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Submit</button>
	</div>



	
