<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;


class LogLastUserActivity
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
        /**
         * reserve for caching
         */

        //if (Auth::check()) {
        //    $expiresAt = Carbon::now()->addMinutes(5);
        //    Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
       // }
        return $next($request);
    }
}
