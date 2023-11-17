<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => User::ROLE_MANAGER,
            'password' => Hash::make(User::ROLE_MANAGER),
            'role' => User::ROLE_MANAGER,
            'is_active' => true,
        ]);

        User::create([
            'username' => User::ROLE_AGENT,
            'password' => Hash::make(User::ROLE_AGENT),
            'role' => User::ROLE_AGENT,
            'is_active' => true
        ]);

        User::factory()->count(5)->create();

        $manager = Role::where('name', User::ROLE_MANAGER)->first();
        $agent = Role::where('name', User::ROLE_AGENT)->first();

        $users = User::all();

        foreach($users as $user){
            if($user->role == User::ROLE_MANAGER){
                $user->assignRole($manager);
                $user->givePermissionTo([
                    User::PERMISSION_CREATE_AGENT,
                    User::PERMISSION_GET_AGENTS
                ]);
            }

            if($user->role == User::ROLE_AGENT){
                $user->assignRole($agent);
                $user->givePermissionTo([
                    User::PERMISSION_GET_AGENTS_BY_OWNER
                ]);
            }
        }
    }
}
