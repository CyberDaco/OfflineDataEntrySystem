<?php

namespace App\Http\Middleware;

use App\Batch;

use Closure;

class RedirectIfBatchNoSet
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
       if (!session()->has('batch_name') || !session()->has('batch_details') || !session()->has('jobnumber')){
            session()->forget('jobnumber_id');
            session()->forget('batch_name');
            session()->forget('batch_details');
            return redirect('/dataentry');
       }
       return $next($request);
    }
}
