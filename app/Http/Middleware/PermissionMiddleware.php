<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Api\ApiErrorResource;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $permission)
    {
        $user = Auth::user();


        if (! is_null($permission)) {
            $permissions = is_array($permission)
                ? $permission
                : explode('|', $permission);
        }

        if ( is_null($permission) ) {
            $permission = $request->route()->getName();

            $permissions = array($permission);
        }

        $check = false;
        foreach ($permissions as $permission_) {
            $check = $user->hasPermissionTo($permission_, 'api');

            if ($check) {
                return $next($request);
            }
        }
        if (!$check) {
            $response = 'Permission Not Found : '.$permission;
            return (new ApiErrorResource($response));
        }
        return $next($request);
    }
}
