<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Grano de Soya','short_name' => null
        ]);

        Product::create([
            'name' => 'Harina de soya solvente','short_name' => 'hss'
        ]);

        Product::create([
            'name' => 'Harina integral de soya','short_name' => 'his'
        ]);

        Product::create([
            'name' => 'Cascarilla de soya','short_name' => 'cs'
        ]);

        Product::create([
            'name' => 'Aceite Crudo de Soya','short_name' => 'acs'
        ]);

        Product::create([
            'name' => 'Aceite refinado de soya','short_name' => 'ars'
        ]);
    }
}
