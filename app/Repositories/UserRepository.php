<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getUserByUsername(String $username)
    {
        return $this->model->where('username', $username)->first();
    }
}
