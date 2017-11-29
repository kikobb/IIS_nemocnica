<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminPersonal
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
            if (!Auth::user()->isAdmin()){
                $url = $request->getUri();
                $id = substr($url, strrpos($url, '/') + 1);
                if (!Auth::user()->isDoktor() && !Auth::user()->isSestra() && !Auth::user()->isPrijemca() ||
                    (is_numeric($id) && $id != Auth::user()->id)) {
                    return redirect('/zamestnanec');
                }
            }
        return $next($request);
    }
}
