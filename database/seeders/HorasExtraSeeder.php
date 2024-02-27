<?php

namespace Database\Seeders;

use App\Models\HorasExtra;
use Illuminate\Database\Seeder;

class HorasExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HorasExtra::create([
            'name' => 'Sin horas extras',
            'value' => 0,
        ]);

        HorasExtra::create([
            'name' => '1 Hora extra',
            'value' => 1,
        ]);

        HorasExtra::create([
            'name' => '2 Horas extra',
            'value' => 2,
        ]);

        HorasExtra::create([
            'name' => '3 Horas extra',
            'value' => 3,
        ]);
    }
}
