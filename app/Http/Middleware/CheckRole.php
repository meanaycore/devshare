<?php

namespace App\Http\Middleware;

use Closure;


use App\User;

use App\Role;

class CheckRole
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
        if($request->user() === null)
        {
            return response("Insufficient permissions", 401);
        }
        $actions = $reqquest->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if($request->user()->hasAnyRole($roles) || !$roles)
        {
            return $next($request);
        }
        return response("Insufficient persmissions", 401);
    }
}
