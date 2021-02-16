<?php

namespace App\Http\Middleware;

use Closure;

class ChangeLang
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
        if (session()->has('lang')){
            App()->setLocale(session('lang'));
        } else {
            App()->setLocale('ar');
        }
        return $next($request);
    }
}
