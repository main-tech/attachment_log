<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class dashboardController extends Controller

{
   public function index()
   {
    $id=auth()->user()->id;
     $student=User::find($id)->students;
	  
return view('dashboard',compact('student')); 
    }

	 
   }
   

