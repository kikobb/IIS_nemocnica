<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PersonalPacient
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
            if (!Auth::user()->isDoktor() && !Auth::user()->isSestra() && !Auth::user()->isPrijemca()) {
                $segments = explode('/', $request->getUri());
                $id_1 = $segments[count($segments) - 1];    //pre url: xxx/cislo
                $id_2 = $segments[count($segments) - 2];    //pre url: xxx/cislo/edit alebo xxx/cislo/(vysetrenia/lieky/...)
                //ak niesi ani doktor ani sestra ani prijemca alebo ak si pacient a sa chces pozret na stranku ktora sa ta netyka
                if ((is_numeric($id_1) && $id_1 != Auth::user()->id) || (is_numeric($id_2) && $id_2 != Auth::user()->id)) {
                    return redirect('/zamestnanec');
                }
            }
        return $next($request);
    }
}
