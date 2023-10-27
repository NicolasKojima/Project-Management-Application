<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUnapprovedRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // app/Http/Middleware/CheckUnapprovedRole.php

    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->hasRole('unapproved')) {
            // User has the "unapproved" role, deny access
            return redirect()->route('waitingpage')->with('error', 'Access denied.');
        }

        return $next($request);
    }

}
