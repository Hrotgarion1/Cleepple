<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Typepost;

class TypepostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typepost::create([
            'name' => 'Empleo',
            'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem'
        ]);

        Typepost::create([
            'name' => 'Comercial',
            'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem'
        ]);

        Typepost::create([
            'name' => 'Social',
            'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem'
        ]);
    }
}
