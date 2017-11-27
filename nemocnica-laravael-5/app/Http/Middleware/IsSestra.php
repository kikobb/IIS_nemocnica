<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsSestra
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
        if ( Auth::check() ) {
            if (!Auth::user()->isDoktor() && !Auth::user()->isSestra())
                return redirect('/');
        }
        return $next($request);
    }
}
