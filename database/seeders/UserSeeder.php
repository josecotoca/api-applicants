<?php

namespace Database\Seeders;

use App\Models\Configuration;
use App\Models\ConfigurationOption;
use App\Models\Industry;
use App\Models\IndustryUser;
use App\Models\Option;
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
            'username' => User::ROLE_ADMIN,
            'password' => Hash::make(User::ROLE_ADMIN),
            'role' => User::ROLE_ADMIN,
            'is_active' => true,
        ]);

        User::create([
            'username' => 'etasa',
            'password' => Hash::make('etasa'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'prolega',
            'password' => Hash::make('prolega'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'iol',
            'password' => Hash::make('iol'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'nutrioil',
            'password' => Hash::make('nutrioil'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'granos',
            'password' => Hash::make('granos'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'cargill',
            'password' => Hash::make('cargill'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'gravetal',
            'password' => Hash::make('gravetal'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'intagro',
            'password' => Hash::make('intagro'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'granalimento',
            'password' => Hash::make('granalimento'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'cainsa',
            'password' => Hash::make('cainsa'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        User::create([
            'username' => 'inolsa',
            'password' => Hash::make('inolsa'),
            'role' => User::ROLE_INDUSTRY,
            'is_active' => true
        ]);

        //User::factory()->count(5)->create();

        $admin = Role::where('name', User::ROLE_ADMIN)->first();
        $industry = Role::where('name', User::ROLE_INDUSTRY)->first();

        $users = User::all();

        foreach($users as $user){
            if($user->role == User::ROLE_ADMIN){
                $user->assignRole($admin);
                // $user->givePermissionTo([
                //     User::PERMISSION_CREATE_AGENT,
                //     User::PERMISSION_GET_AGENTS
                // ]);
            }

            if($user->role == User::ROLE_INDUSTRY){
                $user->assignRole($industry);

                Industry::create([
                    'name' => $user->username
                ]);

                $industtry_insert = Industry::where('name', $user->username)->first();
                IndustryUser::create([
                    'user_id' => $user->id,
                    'industry_id' => $industtry_insert->id
                ]);


                Configuration::create([
                    'description' => "Configuracion ".date('Y')." ".strtoupper($user->username),
                    'year' => date('Y'),
                    'industry_id' => $industtry_insert->id,
                    'status' => 'vigente'
                ]);

                // $user->givePermissionTo([
                //     User::PERMISSION_GET_AGENTS_BY_OWNER
                // ]);
            }
        }

        $options = Option::all();
        $configurations = Configuration::all();

        foreach($configurations as $item){
            foreach($options as $option){
                ConfigurationOption::create([
                    'configuration_id' => $item->id,
                    'option_id' =>$option->id,
                ]);
            }
        }

    }
}
