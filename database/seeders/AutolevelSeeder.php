<?php

namespace Database\Seeders;

use App\Models\Autolevel;
use Illuminate\Database\Seeder;

class AutolevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autolevel::create([
            'name' => 'Video corto (hasta 10 minutos)',
            'value' => 1
        ]);

        Autolevel::create([
            'name' => 'Video medio (hasta 30 minutos)',
            'value' => 2
        ]);

        Autolevel::create([
            'name' => 'Video largo (más de 30 minutos)',
            'value' => 3
        ]);
    }
}
