<?php

namespace App\Http\Middleware;

use Closure;

class AbsensiMiddleware
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
        if ($request->user() && $request->user()->type != 'absensi')
        {
            return new Response(view('unauthorized')->with('role', 'ABSENSI'));
        }

        return $next($request);
    }
}
