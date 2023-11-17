<?php

namespace App\Http\Controllers\Api;

use App\Contracts\UserRepositoryInterface;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApiResource;
use App\Http\Requests\Api\ApiLoginRequest;
use App\Http\Resources\Api\ApiErrorResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

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

        if(!$this->validateUserActive($request->username))
            return (new ApiErrorResource(['The username or password is incorrect'], 401));

        $this->updateLastLogin();

        $data = $this->getToken($token);

        return (new ApiResource($data));
    }

    protected function validateUserActive($username)
    {
        $user = $this->userRepository->getUserByUsername($username);

        if(is_null($user) || $user->is_active == false)
            return false;

        return true;
    }

    protected function updateLastLogin()
    {
        $auth_user = Auth::user();
        $user = User::find($auth_user->id);
        $user->last_login = date('Y-m-d h:i:s');
        $user->update();
    }

    protected function getToken($token)
    {
        return [
            "token" => $token,
            "minutes_to_expire" => auth()->factory()->getTTL()
        ];
    }

    public function refresh()
    {
        return $this->getToken(auth()->refresh());
    }
}
