<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\Api\ApiErrorResource;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{

    public function handle($request, Closure $next)
    {
        try{
            $user = JWTAuth::parseToken()->authenticate();
        } catch(Exception $e){
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return (new ApiErrorResource(['Token is invalid.']));
            }

            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return (new ApiErrorResource(['Token is expired.']));
            }

            return (new ApiErrorResource(['Authorization token not found.']));
        }
        return $next($request);
    }
}
