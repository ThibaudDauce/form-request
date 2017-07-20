<?php

namespace App\Http\Middleware;

use Closure;

class AMiddleware
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
        if (! method_exists($request, 'filters')) {
            return $next($request);
        }

        // Never executed
        dump("Execute the filters in $request->filters()");

        return $next($request);
    }
}
