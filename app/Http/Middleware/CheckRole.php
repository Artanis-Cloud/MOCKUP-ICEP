<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        if (auth()->user()->roles == '1' || auth()->user()->roles == '2') {
            return $next($request);
        }

        // dd(auth()->user()->roles);
        return redirect()->route('homepage');


    }
}
