<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginApiTest extends TestCase
{

    public function test_login_successfull(): void
    {
        $response = $this->post('/api/v1/login', [
            'username' => 'manager',
            'password' => 'manager'
        ]);

        $response->assertStatus(200);
    }

    public function test_login_user_error(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->post('/api/v1/login', [
            'username' => 'manager',
            'password' => 'managers'
        ]);

        $response->assertStatus(401)->assertJson([
            'meta' => [
                'success' => false,
                'errors' => ["The username or password is incorrect"]
            ]
        ]);
    }
}
