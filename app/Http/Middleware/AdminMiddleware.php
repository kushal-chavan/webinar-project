<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;

use Closure;

class AdminMiddleware
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

    if ($request->user() && $request->user()->Role != 1)
    {
    return redirect('/login');
    }
    return $next($request);

    }
}
