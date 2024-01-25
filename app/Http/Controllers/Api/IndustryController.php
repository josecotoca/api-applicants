<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApiResource;

class IndustryController extends Controller
{

/**
     * @OA\Get(
     * path="/api/industry/me",
     * summary="Mi perfil",
     * tags={"industry"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     * @OA\MediaType(
     * mediaType="application/json"
     * )),
     * @OA\Response(
     * response=200,
     * description="Perfil"
     * ),
     * )
     */
    public function me(Request $request)
    {
        $auth_user = auth()->user();
        return (new ApiResource([]));
    }
}
