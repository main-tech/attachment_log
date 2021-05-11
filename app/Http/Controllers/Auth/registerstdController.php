<?php

namespace App\Http\Controllers\Auth;

use App\Models\student;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class registerstdController extends Controller
{
   
	public function index()
	{
		return view('auth.registerStudents');
	}
	
	public function store(Request $request)
	{
	 //validate
	 $this->validate($request,[
	 'passport_or_id'=>'required',
	 'first_name'=>'required',
	 'last_name'=>'required',
	 'email'=>'required|email',
	 'password'=>'required|confirmed',
	 'registration_number'=>'required',
	 'course'=>'required',
	 'school'=>'required',
	 'study_year'=>'required',
	 'phone_number'=>'required',
	 'level'=>'required'
	 ]);
	 //store
	  User::create(
		 [
		  'email'=>$request->email,
		  'password'=>Hash::make($request->password),
		  'user_type'=>$request->user_type,
		 ]
		 );
		 
	 student::create(
		 [
			 'passport_or_ID_number'=>$request->passport_or_id,
			 'first_name'=>$request->first_name,
			 'last_name'=>$request->last_name,
			 'email_address'=>$request->email,
			 'registration_number'=>$request->registration_number,
			 'school'=>$request->school,
			 'course'=>$request->course,
			 'year_of_study'=>$request->study_year,
			 'phone_number'=>$request->phone_number,
			 'study_level'=>$request->level,
			 
			 ]
                     );

		 
		
	
	 //sign in 
	 auth()->attempt($request->only('email','password') ); 
	 //redirect
	 return redirect()->route('dashboard');
	}
}
       