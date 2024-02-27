<?php

namespace Database\Seeders;

use App\Models\Logrovalue;
use Illuminate\Database\Seeder;

class LogrovalueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logrovalue::create([
            'name' => 'Buen trabajo!',
            'value' => 5
        ]);

        Logrovalue::create([
            'name' => 'Muy buen trabajo!',
            'value' => 10
        ]);

        Logrovalue::create([
            'name' => 'Un trabajo excelente!',
            'value' => 15
        ]);

        Logrovalue::create([
            'name' => 'Realmente excepcional!',
            'value' => 25
        ]);
    }
}
