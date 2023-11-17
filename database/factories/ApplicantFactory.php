<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        $list_users = $users->pluck('id');
        $origins = ['Fotocasa', 'Origen', 'Extranjero', 'Local'];
        $data = [
            'name' => fake()->name(),
            'source' => fake()->randomElement($origins),
            'owner' => fake()->randomElement($list_users),
            'created_by' => fake()->randomElement($list_users),
        ];

        return $data;
    }
}
