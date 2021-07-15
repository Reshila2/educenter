<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;
use Closure;

class AdminMiddlware
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
    if(Auth::check()&& Auth::user()->is_admin){

        return $next($request);
        }
     
        //return redirect()->route();
    }
}
