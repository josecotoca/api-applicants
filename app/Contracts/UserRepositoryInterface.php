<?php

namespace App\Contracts;

interface UserRepositoryInterface
{
    public function getUserByUsername(String $username);
}
