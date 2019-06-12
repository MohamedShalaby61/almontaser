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
        if (!Session::has('aside_lang')) {
            Session::put('aside_lang','ar');
        }
        return $next($request);
    }
}