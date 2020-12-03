<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::check()) {
            return redirect('home');
        }

        $user = Auth::user();
        if($user -> type == 1){
            return redirect('home');
        }

        return $next($request);
    }
}
