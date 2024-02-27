<?php

namespace Database\Seeders;

use App\Models\Clasaccion;
use Illuminate\Database\Seeder;

class ClasaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clasaccion::create([
            'name' => 'Donativo',
            'value' => 1
        ]);

        Clasaccion::create([
            'name' => 'Apadrinar',
            'value' => 2
        ]);

        Clasaccion::create([
            'name' => 'Voluntariado',
            'value' => 3
        ]);
    }
}
