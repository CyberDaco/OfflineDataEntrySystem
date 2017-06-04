<?php

namespace App\Http\Middleware;

use Closure;

class RedirectApplication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $application, $url)
    {
        if(session('batch_details')->application != $application){
           return redirect($url);
        }
        return $next($request);
    }
}
