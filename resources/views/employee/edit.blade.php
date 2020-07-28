@extends('layouts.app')
@section('title','Edit Employee')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a employee</h1>

       
<form action="{{route ('employee.update')}}" method="post">
   
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" value="{{$employee->name}}" id="name" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" value="{{$employee->email}}" id="email" class="form-control"  name="email" required>
    </div>
     <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" value="{{$employee->address}}" id="address" class="form-control"  name="address" required>
    </div>
    
    <input type="hidden" name="id" value="{{$employee->id}}">
     
    <button type="submit" class="btn btn-success">Submit</button>

</form>
</div>
</div>
@endsection
