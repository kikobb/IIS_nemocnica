<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminPersonalNoIndexCheck
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
        if ( Auth::check() )
            if (!Auth::user()->isAdmin() &&!Auth::user()->isDoktor() &&
                !Auth::user()->isSestra() && !Auth::user()->isPrijemca()){
                    return redirect('/zamestnanec');
            }
        return $next($request);
    }
}
