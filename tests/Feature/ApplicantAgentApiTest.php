<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\HelperTest;

class ApplicantAgentApiTest extends TestCase
{
    use HelperTest;

    /**
     * Example of candidate creation
     */
    public function test_create_applicant_error(): void
    {
        $user = User::where('username', 'agent')->first();

        $response = $this->actingAs($user, 'api')->postJson('/api/v1/lead', [
            'name' => 'prueba_testing',
            'source' => 'prueba_testing',
            'owner' => '1'
        ]);

        $response->assertStatus(401)->assertJson([
            'meta' => [
                'success' => false,
                'errors' => ['Permission Not Found : crear_candidato']
            ]
        ]);

    }

    /**
     * Example of getting a candidate
     */
    public function test_get_applicant_by_id_error(): void
    {
        $user = User::where('username', 'agent')->first();

        $response = $this->actingAs($user, 'api')->get('/api/v1/lead/1');

        $response->assertStatus(401)->assertJson([
            'meta' => [
                'success' => false,
                'errors' => ['Permission Not Found : obtener_candidatos']
            ]
        ]);
    }

    /**
     * Example of getting a candidates from agent
     */
    public function test_get_applicants_successfull(): void
    {
        $user = User::where('username', 'agent')->first();
        $response = $this->actingAs($user, 'api')->get('/api/v1/leads');
        $response->assertStatus(200)->assertJson([
            'meta' => [
                'success' => true,
                'errors' => []
            ]
        ]);
    }
}
