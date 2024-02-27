<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsEmpresaMiddleware
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
        if (auth()->user()->is_empresa || auth()->user()->is_admin) {
            
        }else{
            abort(403);
        }

        return $next($request);
    }
}
