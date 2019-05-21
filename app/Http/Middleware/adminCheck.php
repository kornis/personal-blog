<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class adminCheck
{
   

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::guard()->User()->admin())
        {
            return $next($request);
        }
        else
        {
            //return abort(401);
            dd("no tiene acceso a esta seccion");
        }
        
    }
}
