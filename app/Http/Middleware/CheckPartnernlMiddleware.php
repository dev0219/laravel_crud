<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckPartnernlMiddleware
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
        error_log("=======partner===========");
        if(Auth::user()->is_admin == 1){
            return redirect()->route('admin.dashboard');
        }
        
        return $next($request);
    }
}
