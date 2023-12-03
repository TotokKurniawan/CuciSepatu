<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) return redirect('login')->with('error', "You are not authorized to access.");

        $user = Auth::user();
        foreach ($roles as $role) {
            if ($user->role === $role) return $next($request);
        }
        return redirect('login')->with('error', "You are not authorized to access.");
    }
}