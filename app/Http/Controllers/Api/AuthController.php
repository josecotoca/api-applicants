<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Traits\ApiAuthenticable;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApiResource;
use App\Http\Requests\Api\ApiLoginRequest;
use App\Http\Resources\Api\ApiErrorResource;
use App\Services\LoginService;

class AuthController extends Controller
{
    private $service;

    public function __construct(LoginService $login_service)
    {
        $this->service = $login_service;
    }
    /**
     * Iniciar token
     * @OA\Post (
     *     path="/api/auth/login",
     *     tags={"auth"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="username",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="password",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "username":"industria",
     *                     "password":"industria"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Autenticado",
     *          @OA\JsonContent()
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable content",
     *          @OA\JsonContent()
     *      )
     * )
     */
    public function login(ApiLoginRequest $request)
    {
        $credentials = [
            "username" => $request->username,
            "password" => $request->password
        ];

        $token = JWTAuth::attempt($credentials);
        if (empty($token)) {
            return (new ApiErrorResource(['The username or password is incorrect'], 401));
        }

        if (!$this->service->isUserActive($request->username))
            return (new ApiErrorResource(['The username or password is incorrect'], 401));

        $auth_user = auth()->user();

        $this->service->updateLastLogin($auth_user->id);

        $data = $this->service->getToken($token);
        $data['user'] = $this->service->getUserById($auth_user->id);

        return (new ApiResource($data));
    }

    /**
     * Finalizar token
     * @OA\Post (
     *     path="/api/auth/logout",
     *     tags={"auth"},
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Cierre de session",
     *          @OA\JsonContent()
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable content",
     *          @OA\JsonContent()
     *      )
     * )
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $data = ["Cierre de sesión exitoso"];

        return (new ApiResource($data));
    }

    /**
     * Refrescar nuevo token
     * @OA\Post (
     *     path="/api/auth/refresh",
     *     tags={"auth"},
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Autenticado",
     *          @OA\JsonContent()
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable content",
     *          @OA\JsonContent()
     *      )
     * )
     */
    public function refresh(Request $request)
    {
        $data = $this->service->refreshToken();

        return (new ApiResource($data));
    }

    /**
     * mi perfil
     * @OA\Get(
     * path="/api/auth/me",
     * summary="Mi perfil",
     * tags={"auth"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     * @OA\MediaType(
     * mediaType="application/json"
     * )),
     * @OA\Response(
     * response=200,
     * description="Perfil",
     * @OA\JsonContent()
     * ),
     * )
     */
    public function me()
    {
        $auth_user = auth()->user();
        $data = $this->service->getUserById($auth_user->id);

        return (new ApiResource($data));
    }
}
