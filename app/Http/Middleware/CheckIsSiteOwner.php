<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsSiteOwner
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
        if(Auth::user()->email == 'jason@bdfi.com.au'){
            return $next($request);
        }
        return response()->json([
            "message" => "You tried to use a API route that is restricted to the site owner. Contact the owner if you think this is a mistake."
        ], 201);

    }
}
