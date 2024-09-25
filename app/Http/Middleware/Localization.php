<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
use App;
use Illuminate\Support\Facades\Log;
class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //     Log::info('22 changed to: '. Session::get('lang'));
        // // if (Session::get('lang')) {
        //     Session::put('lang', Session::get('lang'));
        //     Log::info('11 changed to: '. Session::get('lang'));
        //    App::setLocale('en');
        // }
        if (Session::has('lang')) {
            App::setLocale(Session::get('lang'));
        }
        return $next($request);
    }
}
