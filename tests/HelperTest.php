<?php

namespace Tests;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

trait HelperTest
{

    public function actingAs($user, $driver = null)
    {
        $token = JWTAuth::fromUser($user);
        $this->withHeader('Authorization', "Bearer {$token}");
        parent::actingAs($user);

        return $this;
    }
}
