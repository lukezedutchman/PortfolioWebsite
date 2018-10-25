<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        $id = Auth::User()->id;

        if(Auth::guard($id) == 1){
            return $next($request);
        }
        else {
            return redirect ()->guest('login');
        }

    }
}