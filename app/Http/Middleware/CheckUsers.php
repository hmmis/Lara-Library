<?php

namespace App\Http\Middleware;

use Closure;

class CheckUsers
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
        if ($request->session()->has('usersname')==false) {

            $request->session()->flash('message', 'Please Log In First');
            return redirect('/');
        }
        
        return $next($request);
    }
}
