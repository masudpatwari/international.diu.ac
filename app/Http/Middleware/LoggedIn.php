<?php

namespace App\Http\Middleware;

use Closure;

class LoggedIn
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
        if( !empty(auth()->user()) )
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('/');
        }
    }
}
