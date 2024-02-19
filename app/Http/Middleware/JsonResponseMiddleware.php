<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Resources\Api\ApiErrorResource;

class JsonResponseMiddleware{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->wantsJson())
            return (new ApiErrorResource('Do not have authorization', 401));

        return $next($request);
    }

}
