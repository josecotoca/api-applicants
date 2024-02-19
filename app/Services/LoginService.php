<?php

namespace App\Services;

use App\Repositories\UserRepository;

class LoginService
{
    private $repository_user;

    public function __construct(UserRepository $repository_user)
    {
        $this->repository_user = $repository_user;
    }

    public function getToken($token)
    {
        return [
            "token" => $token,
            "token_type" => 'Bearer',
            "minutes_to_expire" => auth()->factory()->getTTL(),
        ];
    }

    public function refreshToken()
    {
        return $this->getToken(auth()->refresh());
    }

    public function updateLastLogin($user_id)
    {
        $user = $this->repository_user->get($user_id);
        $user->last_login = date('Y-m-d h:i:s');
        $this->repository_user->update($user);
    }

    public function isUserActive($username)
    {
        $user = $this->repository_user->getUserByUsername($username);

        if (is_null($user) || $user->is_active == false)
            return false;

        return true;
    }

    public function getUserById($id)
    {
        $user = $this->repository_user->get($id);
        return [
            'username' => $user->username,
            'role' => $user->role,
        ];
    }
}
