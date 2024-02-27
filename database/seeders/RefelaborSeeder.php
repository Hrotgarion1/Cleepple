<?php

namespace Database\Seeders;

use App\Models\Refelabor;
use Illuminate\Database\Seeder;

class RefelaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refelabor::create([
            'review' => 'Muy mal',
            'rating' => 1
        ]);

        Refelabor::create([
            'review' => 'No está mal',
            'rating' => 2
        ]);

        Refelabor::create([
            'review' => 'Bueno',
            'rating' => 3
        ]);

        Refelabor::create([
            'review' => 'Muy bien',
            'rating' => 4
        ]);

        Refelabor::create([
            'review' => 'Excelente',
            'rating' => 5
        ]);
    }
}
