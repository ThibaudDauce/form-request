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
        // Dump "Illuminate\Http\Request" and not "App\Http\Requests\MyRequest"
        dump(get_class($request));

        return $next($request);
    }
}
