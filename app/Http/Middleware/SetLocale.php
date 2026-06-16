<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;


class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = Session::get('locale', config('app.locale'));
        // Set the locale for the current request
        App::setLocale($locale);
        $dir = $locale=='ar' ? 'rtl' : 'ltr';
        Session::put('dir', $dir);

        return $next($request);
    }
}
