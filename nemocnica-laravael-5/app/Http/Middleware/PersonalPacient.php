<?php

namespace App\Http\Middleware;

use App\Pobyt;
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
                $id = -1;
                if (count($segments) == 5) {
                    if ($segments[count($segments) - 2] == 'pobyt') {
                        $id = Pobyt::getPobytById($segments[count($segments) - 1])->getPacient()->id;
                    }elseif ($segments[count($segments) - 2] == 'pacient'){
                        $id = $segments[count($segments) - 1];
                    }
                }elseif(count($segments) == 6){
                    if ($segments[count($segments) - 3] == 'pobyt') {
                        $id = Pobyt::getPobytById($segments[count($segments) - 2])->getPacient()->id;
                    }elseif ($segments[count($segments) - 3] == 'pacient'){
                        $id = $segments[count($segments) - 2];
                    }
                }
                //ak niesi ani doktor ani sestra ani prijemca alebo ak si pacient a sa chces pozret na stranku ktora sa ta netyka
                if ((is_numeric($id_1) && $id != Auth::user()->id)
                    || (is_numeric($id_2) && $id != Auth::user()->id)) {
                    return redirect('/zamestnanec');
                }
            }
        return $next($request);
    }
}
