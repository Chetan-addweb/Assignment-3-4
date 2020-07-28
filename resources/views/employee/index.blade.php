@extends('layouts.app')
@section('title','Employee Index')
@section('content')
  <div class="row">
  	 <a class="btn btn-success" href="{{ route('employee.create') }}"> Add New employee</a>
    <div class="col-sm-12">

      <table class="table">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          
        </tr>
        @foreach($employee as $employee)   
          <tr class = "text-center">
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->address }}</td>
           
            <td><a href="{{ route ('employee.edit',$employee->id) }}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{ route ('employee.destroy',$employee->id) }}" class = "btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection