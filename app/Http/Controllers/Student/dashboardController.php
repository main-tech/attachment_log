<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class dashboardController extends Controller

{
   public function index()
   {
    $id=auth()->user()->id;
     $student=User::find($id)->students;
	  
return view('student/dashboard',compact('student')); 
    }

	 
   }
   

