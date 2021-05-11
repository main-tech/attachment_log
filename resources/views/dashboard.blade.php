@extends('layouts.app')
@section('content')
dashboard
<br>
<form action="{{route('logout')}}" method="post">
@csrf
<button type="submit">Logout</button>
</form>
	{{dd(auth()->user())}}
@endsection