<?php

namespace App\Http\Middleware;

use Closure;

class CheckFinance
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

        if(Auth::guard($id) == 3){
            return $next($request);
        }
        else {
            return redirect ()->guest('login');
        }
    }
}
