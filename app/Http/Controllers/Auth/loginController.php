<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index ()
	{
		
		return view('auth.login' );
	}
	
	public function store(Request $request)
	{
		$this->validate($request,[
	
	 'email'=>'required|email',
	 'password'=>'required',
	 ]);
	 
	 
	 //sign in 
	 if(!auth()->attempt($request->only('email','password'),$request->remember ))
	 {
		 return back()->with('status','invalid login details'); 
	 }
	 //redirect
	 else
	 {
	 return redirect()->route('dashboard');
	 }
	
	}
	
	
}
