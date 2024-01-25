<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Period;
use App\Models\Resume;
use App\Models\IndustryUser;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Api\ApiResource;
use App\Contracts\UserRepositoryInterface;
use App\Http\Requests\Api\ApiLoginRequest;
use App\Http\Resources\Api\ApiErrorResource;

class AuthController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Login
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
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="UNPROCESSABLE CONTENT"
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

        if (!$this->validateUserActive($request->username))
            return (new ApiErrorResource(['The username or password is incorrect'], 401));

        $this->updateLastLogin();

        $data = $this->getToken($token);
        $data['user'] = $this->getUser();

        return (new ApiResource($data));
    }

    /**
     * Login
     * @OA\Post (
     *     path="/api/auth/logout",
     *     tags={"auth"},
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Cierre de session",
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="UNPROCESSABLE CONTENT"
     *      )
     * )
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $data = "Cierre de sesión exitoso";

        return (new ApiResource($data));
    }

    /**
     * Login
     * @OA\Post (
     *     path="/api/auth/refresh",
     *     tags={"auth"},
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Autenticado",
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="UNPROCESSABLE CONTENT"
     *      )
     * )
     */
    public function refresh(Request $request)
    {
        $token = $this->refreshToken();
        $data = $this->getToken($token);

        return (new ApiResource($data));
    }

    /**
     * @OA\Get(
     * path="/api/auth/reconection",
     * summary="Reconection",
     * tags={"auth"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     * @OA\MediaType(
     * mediaType="application/json"
     * )),
     * @OA\Response(
     * response=200,
     * description="Reconection"
     * ),
     * )
     */
    public function reconection()
    {
        $data['industry'] = $this->getIndustry();
        $data['period'] = $this->getPeriodActive();
        $data['resume'] = $this->getResumePeriod($data['industry']->id);

        return (new ApiResource($data));
    }

    public function getIndustry()
    {
        $auth_user = auth()->user();
        $industry = IndustryUser::where('user_id', $auth_user->id)->with('industry')->first();
        return !is_null($industry) && !is_null($industry->industry) ? $industry->industry : null;
    }

    public function getPeriodActive()
    {
        $period = Period::where('status', Period::STATUS_ACTIVE)->first();
        return $period;
    }

    public function getResumePeriod($industry_id)
    {
        $year_current = date('Y');
        $resume = Resume::query()
            ->where('year', $year_current)->where('industry_id', $industry_id)
            ->select(['id', 'stock', 'production', 'acopio', 'priceclosing', 'hss', 'his', 'acs', 'ars', 'cs', 'exp', 'period_id'])
            ->with(['period:id,name,year,month,biweekly,date_start,date_end,date_limit,status'])
            ->get();
        return $resume;
    }

    /**
     * @OA\Get(
     * path="/api/me",
     * summary="Mi perfil",
     * tags={"users"},
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
    public function me()
    {
        $data = $this->getUser();

        return (new ApiResource($data));
    }

    protected function validateUserActive($username)
    {
        $user = $this->userRepository->getUserByUsername($username);

        if (is_null($user) || $user->is_active == false)
            return false;

        return true;
    }

    protected function updateLastLogin()
    {
        $auth_user = auth()->user();
        $user = User::find($auth_user->id);
        $user->last_login = date('Y-m-d h:i:s');
        $user->update();
    }


    protected function getToken($token)
    {
        return [
            "token" => $token,
            "token_type" => 'Bearer',
            "minutes_to_expire" => auth()->factory()->getTTL(),
        ];
    }

    protected function getUser()
    {
        $auth_user = auth()->user();
        $user = User::where('id', $auth_user->id)->first();
        return [
            'username' => $user->username,
            'role' => $user->role,
        ];
    }

    public function refreshToken()
    {
        return $this->getToken(auth()->refresh());
    }
}
