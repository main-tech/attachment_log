<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class dashboardController extends Controller

{
   public function index()
   {
	  $user_type=auth()->user()->user_type;
	  $id=auth()->user()->id;
	  $student=User::find($id)->students;
	  switch ($user_type) {
  case "student":
     return view('dashboard',compact('student')); 
    break;
  case "school_supervisor":
    
    break;
  case "industry_supervisor":
    
    break;
	case "coordinator":
    
    break;

                             }

	 
   }
   
}
