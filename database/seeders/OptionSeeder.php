<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Option::create([
            'name' => 'planilla de stock de productos',
            'route' => '/stock',
            'short_name' => 'stock',
        ]);

        Option::create([
            'name' => 'planilla de producción de productos',
            'route' => '/production',
            'short_name' => 'production',
        ]);

        Option::create([
            'name' => 'planilla de grano acopiado',
            'route' => '/soybean',
            'short_name' => 'acopio',
        ]);

        Option::create([
            'name' => 'planilla de precio cerrado de grano',
            'route' => '/priceclosing',
            'short_name' => 'priceclosing',
        ]);

        Option::create([
            'name' => 'planilla de harina solvente de soya',
            'route' => '/hss',
            'short_name' => 'hss',
        ]);

        Option::create([
            'name' => 'planilla de harina integral de soya',
            'route' => '/his',
            'short_name' => 'his',
        ]);

        Option::create([
            'name' => 'planilla de aceite crudo de soya',
            'route' => '/acs',
            'short_name' => 'acs',
        ]);

        Option::create([
            'name' => 'planilla de aceite refinado de soya',
            'route' => '/ars',
            'short_name' => 'ars',
        ]);

        Option::create([
            'name' => 'planilla de cascarilla de soya',
            'route' => '/cs',
            'short_name' => 'cs',
        ]);

        Option::create([
            'name' => 'planilla de expeller de soya',
            'route' => '/exp',
            'short_name' => 'exp',
        ]);
    }
}
