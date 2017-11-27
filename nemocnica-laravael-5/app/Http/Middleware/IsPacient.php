<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Auth;

class IsPacient
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
        if ( Auth::check() && !Auth::user()->isPacient() ) {
            return redirect('/');
        }
        return $next($request);
    }
}
