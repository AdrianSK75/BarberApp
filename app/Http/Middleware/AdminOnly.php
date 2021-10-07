<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{

    public function handle(Request $request, Closure $next) {
        if (auth()->user()->status !== 2 ) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
