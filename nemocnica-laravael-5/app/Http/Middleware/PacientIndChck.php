<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PacientIndChck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     */

public function handle($request, Closure $next)
    {
        if ( Auth::check() ) {
            $segments = explode('/', $request->getUri());
//            $id_1 = $segments[count($segments) - 1];    //pre url: xxx/cislo
            $id_2 = $segments[count($segments) - 2];    //pre url: xxx/cislo/edit
            dump($id_2);
            if (!Auth::user()->isPacient() || (is_numeric($id_2) && $id_2 != Auth::user()->id)) {
                dd('tuna');
                return redirect('/zamestnanec');
            }

        }
        return $next($request);
    }
}
