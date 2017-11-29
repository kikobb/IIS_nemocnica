<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DoktorSestra
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
                return redirect('/zamestnanec');
        }
        return $next($request);
    }
}
