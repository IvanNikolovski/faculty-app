<?php

namespace App\Http\Middleware;

use App;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Session;
class Localization
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
        if ( Session::has('locale')) {
            App::setLocale(Session::get('locale'));

            // You also can set the Carbon locale
            Carbon::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
}
