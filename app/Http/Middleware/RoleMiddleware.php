<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Api\ApiErrorResource;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role, $guard = null)
    {
        $user = Auth::user();
        if (! is_null($role)) {
            $roles = is_array($role)
                ? $role
                : explode('|', $role);
        }

        if ( is_null($role) ) {
            $role = $request->route()->getName();

            $roles = array($role);
        }

        $check = false;
        foreach ($roles as $role_) {
            $check = $user->hasRole($role_);

            if ($check)
                return $next($request);
        }
        if (!$check) {
            $response = 'Unauthorized';
            return (new ApiErrorResource($response));
        }
        return $next($request);
    }
}
