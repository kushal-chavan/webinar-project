<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use Closure;

class MemberMiddleware
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

    if ($request->user() && $request->user()->Role != 0)
    {
    return redirect('/adminarea');
    }
    return $next($request);

    }
}
