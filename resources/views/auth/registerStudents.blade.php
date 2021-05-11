@extends('layouts.app')
@section('content')
Register Students

  <form action="{{route('registerstd')}}" method="post" >
  @csrf
   <input type="hidden" name="user_type" value="student">
         Passport or ID number: <input type = "text" name = "passport_or_id"  value="{{old('passport_or_id')}}">
        <br>
		@error('passport_or_id') 
		<span style="color:red">{{$message}}</span>
		@enderror
		<br><br>
		First name: <input type = "text" name = "first_name" value="{{old('first_name')}}" >
         <br>
		 @error('first_name')
		<span style="color:red">{{$message}}</span>
		@enderror 
		<br><br>
         Last name: <input type = "text" name = "last_name" value="{{old('last_name')}}"  >
		 <br>
		 @error('last_name')
		<span style="color:red">{{$message}}</span>
		@enderror 
		<br><br>
		 Email addres: <input type = "text" name = "email"  value="{{old('email_address')}}">
         <br>
		 @error('email_address')
		<span style="color:red">{{$message}}</span>
		@enderror  
		<br><br>
		 Password: <input type = "password" name = "password">
		 <br>
		 @error('password')
		<span style="color:red">{{$message}}</span>
		@enderror
		<br><br>
		 Password repeat: <input type = "password" name = "password_confirmation" >
		 <br>
		 @error('password_confirmation')
		<span style="color:red">{{$message}}</span>
		@enderror
		<br><br>
		 Registration number: <input type = "text" name = "registration_number" value="{{old('registration_number')}}" >
		 <br>
		 @error('registration_number')
		<span style="color:red">{{$message}}</span>
		@enderror 
		<br><br>
		 Course: <input type = "text" name = "course" value="{{old('course')}}" >
		 <br>
		 @error('course')
		<span style="color:red">{{$message}}</span>
		@enderror 
		<br><br>
		 School: <input type = "text" name = "school" value="{{old('school')}}" >
		  <br>
		  @error('school')
		<span style="color:red">{{$message}}</span>
		@enderror 
		<br><br>
		 Year of Study: <input type = "number" name = "study_year"  min="1" max="8" value="{{old('study_year')}}">
		 <br>
		 @error('study_year')
		<span style="color:red">{{$message}}</span>
		@enderror 
		<br><br>
		 <p> Select level of education</p>
		 @error('level')
		<span style="color:red">{{$message}}</span>
		@enderror
		<br><br>
		 <input type="radio" id="certificate" name="level" value="certificate">
<label for="certificate">Certificate</label><br>

<input type="radio" id="diploma" name="level" value="diploma">
<label for="diploma">Diploma</label><br>
<input type="radio" id="Degree" name="level" value="degree">
<label for="Degree">Degree</label><br>
<input type="radio" id="masters" name="level" value="masters">
<label for="masters">Masters</label><br>
<input type="radio" id="doctorate" name="level" value="doctorate">
<label for="doctorate">Doctorate</label><br>
<input type="radio" id="other" name="level" value="other">
<label for="other">Other</label> <br>
Phone number:<input  name="phone_number"  value="{{old('phone_number')}}">
<br>
@error('phone_number')
		<span style="color:red">{{$message}}</span>
		@enderror
		<br><br>
<input type="submit" value="Register">
      </form>
   </body>
@endsection