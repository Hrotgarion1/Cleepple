<?php

namespace Database\Seeders;

use App\Models\Refentity;
use Illuminate\Database\Seeder;

class RefentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refentity::create([
            'review' => 'Muy mal',
            'rating' => 1
        ]);

        Refentity::create([
            'review' => 'No está mal',
            'rating' => 2
        ]);

        Refentity::create([
            'review' => 'Bueno',
            'rating' => 3
        ]);

        Refentity::create([
            'review' => 'Muy bien',
            'rating' => 4
        ]);

        Refentity::create([
            'review' => 'Excelente',
            'rating' => 5
        ]);
    }
}
