<?php

namespace Laravelir\Dashbaorder\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsDashboarderAdminMiddleware
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
        auth()->shouldUse(config('dashboarder.auth.guard'));

        if(auth()->guest()){
            return redirect(config('easy_panel.redirect_unauthorized'));
        }


        return $next($request);
    }
}
