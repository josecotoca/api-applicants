<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 * title="Swagger",
 * version="0.0.1",
 * )
 * @OA\SecurityScheme(
 * type="http",
 * securityScheme="bearer_token",
 * scheme="bearer",
 * type="http"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
