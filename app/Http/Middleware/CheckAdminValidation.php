<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class CheckAdminValidation
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
        if(Session::get('admin-validation') && session('admin-validation')=="VALIDATED")
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }

    }
}
