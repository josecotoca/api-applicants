<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\HelperTest;

class ApplicantManagerApiTest extends TestCase
{
    use HelperTest;
    /**
     * Example of candidate creation
     */
    public function test_create_applicant_successfull(): void
    {

        $user = User::where('username', 'manager')->first();

        $response = $this->actingAs($user, 'api')->postJson('/api/v1/lead', [
            'name' => 'prueba_testing',
            'source' => 'prueba_testing',
            'owner' => '1'
        ]);

        $response->assertStatus(201)->assertJson([
            'meta' => [
                'success' => true,
                'errors' => []
            ]
        ]);
    }

    /**
     * Example of getting a candidate
     */
    public function test_get_applicant_by_id_successfull(): void
    {

        $user = User::where('username', 'manager')->first();

        $response = $this->actingAs($user, 'api')->get('/api/v1/lead/1');

        $response->assertStatus(200)->assertJson([
            'meta' => [
                'success' => true,
                'errors' => []
            ]
        ]);
    }

    public function test_get_applicant_by_id_not_found(): void
    {

        $user = User::where('username', 'manager')->first();

        $response = $this->actingAs($user, 'api')->get('/api/v1/lead/10000000');

        $response->assertStatus(404)->assertJson([
            'meta' => [
                'success' => false,
                'errors' => ['No lead found']
            ]
        ]);
    }

    /**
     * Example of getting a candidates from manager
     */
    public function test_get_applicants_successfull(): void
    {

        $user = User::where('username', 'manager')->first();

        $response = $this->actingAs($user, 'api')->get('/api/v1/leads');

        $response->assertStatus(200)->assertJson([
            'meta' => [
                'success' => true,
                'errors' => []
            ]
        ]);
    }
}
