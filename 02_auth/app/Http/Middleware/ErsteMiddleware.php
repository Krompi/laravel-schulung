<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ErsteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ( $request->user()->email != 'test@test.de' ) {
            return redirect()->to('/')->withErrors(["msg" => "Fehler"]);
        }
        return $next($request);
    }
}
