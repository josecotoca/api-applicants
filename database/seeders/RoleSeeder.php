<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['guard_name' => 'api', 'name' => User::PERMISSION_CREATE_AGENT]);
        Permission::create(['guard_name' => 'api', 'name' => User::PERMISSION_GET_AGENTS]);
        Permission::create(['guard_name' => 'api', 'name' => User::PERMISSION_GET_AGENTS_BY_OWNER]);

        $manager = Role::create(['name' => User::ROLE_MANAGER, 'guard_name' => 'api']);
        $agent = Role::create(['name' => User::ROLE_AGENT, 'guard_name' => 'api']);

        $manager->givePermissionTo([
            User::PERMISSION_CREATE_AGENT,
            User::PERMISSION_GET_AGENTS
        ]);

        $agent->givePermissionTo([
            User::PERMISSION_GET_AGENTS_BY_OWNER
        ]);
    }
}
