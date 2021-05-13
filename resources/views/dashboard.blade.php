@extends('layouts.app')
@section('content')
dashboard
<br>
<form action="{{route('logout')}}" method="post">
@csrf
<button type="submit">Logout</button>
</form>
	<br>
	Student Name: {{$student['first_name']}} {{$student['last_name']}}
	<br>
	School: {{$student['school']}}
	<br>
	Course: {{$student['course']}}
	<br>
	
@endsection 