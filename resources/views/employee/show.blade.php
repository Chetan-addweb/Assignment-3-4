@extends('layouts.app')
@section('content')

<h1>Showing employee {{ $employee->name }}</h1>
<div class="jumbotron text-center">
    <p>
        <strong>name:</strong> {{ $employee->name }}<br>
        <strong>email:</strong> {{ $employee->email }}<br>
        <strong>Address</strong>{{$emloyee->address}}

    </p>
</div>
@endsection