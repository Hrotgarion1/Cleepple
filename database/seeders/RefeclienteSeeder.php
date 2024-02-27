<?php

namespace Database\Seeders;

use App\Models\Refecliente;
use Illuminate\Database\Seeder;

class RefeclienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refecliente::create([
            'review' => 'Muy mal',
            'rating' => 1
        ]);

        Refecliente::create([
            'review' => 'No está mal',
            'rating' => 2
        ]);

        Refecliente::create([
            'review' => 'Bueno',
            'rating' => 3
        ]);

        Refecliente::create([
            'review' => 'Muy bien',
            'rating' => 4
        ]);

        Refecliente::create([
            'review' => 'Excelente',
            'rating' => 5
        ]);
    }
}
