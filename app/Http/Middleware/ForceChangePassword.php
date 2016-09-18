<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ForceChangePassword
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
        if ( (Auth::check()) && (!Auth::user()->ForceChangePassword()))
        {
            return $next($request);
        }
        return redirect('/force-change-password');
    }
}
