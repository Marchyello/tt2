<?php

namespace tt2\Http\Middleware;

use Auth;
use Closure;
use Session;

class SetSessionLocale
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
        if(!Auth::user() || !Auth::user()->hasPreferences()){
            Session::put('locale', 'lv');
        }
        else {
            Session::put('locale', Auth::user()->preferences->language);
        }

        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}
