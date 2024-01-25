<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Period::create([
            'name' => 'Semana 1-Enero-2023',
            'year'  => 2023,
            'month' => 1,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_ACTIVE
        ]);

        Period::create([
            'name' => 'Semana 2-Enero-2023',
            'year'  => 2023,
            'month' => 1,
            'biweekly' => 2,
            'date_start' => '2023-01-22',
            'date_end' => '2023-02-02',
            'date_limit' => '2023-02-06',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Febrero-2023',
            'year'  => 2023,
            'month' => 2,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Febrero-2023',
            'year'  => 2023,
            'month' => 2,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Marzo-2023',
            'year'  => 2023,
            'month' => 3,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Marzo-2023',
            'year'  => 2023,
            'month' => 3,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Abril-2023',
            'year'  => 2023,
            'month' => 4,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Abril-2023',
            'year'  => 2023,
            'month' => 4,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Mayo-2023',
            'year'  => 2023,
            'month' => 5,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Mayo-2023',
            'year'  => 2023,
            'month' => 5,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Junio-2023',
            'year'  => 2023,
            'month' => 6,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Junio-2023',
            'year'  => 2023,
            'month' => 6,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Julio-2023',
            'year'  => 2023,
            'month' => 7,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Julio-2023',
            'year'  => 2023,
            'month' => 7,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Agosto-2023',
            'year'  => 2023,
            'month' => 8,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Agosto-2023',
            'year'  => 2023,
            'month' => 8,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Septiembre-2023',
            'year'  => 2023,
            'month' => 9,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Septiembre-2023',
            'year'  => 2023,
            'month' => 9,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Octubre-2023',
            'year'  => 2023,
            'month' => 10,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Octubre-2023',
            'year'  => 2023,
            'month' => 10,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Noviembre-2023',
            'year'  => 2023,
            'month' => 11,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Noviembre-2023',
            'year'  => 2023,
            'month' => 11,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 1-Diciembre-2023',
            'year'  => 2023,
            'month' => 12,
            'biweekly' => 1,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);

        Period::create([
            'name' => 'Semana 2-Diciembre-2023',
            'year'  => 2023,
            'month' => 12,
            'biweekly' => 2,
            'date_start' => '2023-01-01',
            'date_end' => '2023-01-15',
            'date_limit' => '2023-01-21',
            'status' => Period::STATUS_PENDING
        ]);
        Period::create([
            'name' => 'Semana 1-Enero-2024',
            'year'  => 2024,
            'month' => 1,
            'biweekly' => 1,
            'date_start' => '2024-01-01',
            'date_end' => '2024-01-15',
            'date_limit' => '2024-01-21',
            'status' => Period::STATUS_PENDING
        ]);
    }
}
