<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class studentaccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    
	  $user_type=auth()->user()->user_type;
	  $id=auth()->user()->id;
	
     if ($user_type!=="student") {
            return redirect()->route('login');
            }
        return $next($request);
    }
}
