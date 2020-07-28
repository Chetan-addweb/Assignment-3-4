@extends('layouts.app')

@section('content')

<div class="col-sm-8 offset-sm-2">
<h1>Add new employee</h1>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
<form action="{{route ('employee.store')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" required>
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" required>
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" name="address" class="form-control" required>
	</div>
	
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>

</form>
</div>

@endsection