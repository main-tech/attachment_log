@extends('layouts.app')
@section('content')
@if(session('status'))
{{session('status')}}
@endif
<form action="{{route('login')}}" method="post" >
@csrf
   Email <input type = "text" name = "email" >
    @error('email')
		<span style="color:red">{{$message}}</span>
		@enderror 
   <br>
   Password <input type="password" name="password">
    @error('password')
		<span style="color:red">{{$message}}</span>
		@enderror 
   <br>
   <input type="submit">
 </form>

@endsection