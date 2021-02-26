<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use App\Http\Models;
use  Illuminate\support\Facades\Auth;

class IsAdmin
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
       $user=Auth::user();
     
        if(!$user->isAdmin()){
      
          return redirect('/');
        }

        

      //   if (Auth::check()){

      //     if (!Auth::user()->isAdmin()){

      //       return redirect('/');

      //     }
      // }

      return $next($request);
    }
}
