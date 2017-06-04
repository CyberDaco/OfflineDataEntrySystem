<?php

namespace App\Http\Middleware;

use Closure;

use Carbon\Carbon;

class SetEntryStartTime
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
        session()->put('start',Carbon::now());
        return $next($request);
    }
}
