<?php

namespace Modules\CommonModule\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('applocale')) {
            App::setLocale(Session::get('applocale'));
        }
//        if ($request->segments(1)){
//            App::setLocale($request->segments(1));
//        }
        //$request->segments(1) == 'ar' ? App()->setLocale('ar'):App()->setLocale('en');
        //dd($request->segments(1));
        return $next($request);
    }
}
