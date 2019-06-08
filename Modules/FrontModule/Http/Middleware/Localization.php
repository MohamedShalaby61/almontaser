<?php

namespace Modules\FrontModule\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class localization
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
   if(\Session::has('locale'))
   {
       \App::setlocale(\Session::get('locale'));
   }
   return $next($request);
}
}
