<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street' => $this->faker->randomElement(['Garbi', 'Tramuntana', 'Barracks Road', 'Salvador Espriu', 'Triavala', 'Bellevue Road', 'Towers Road', 'Gran via', 'Diagonal']),
            'postcode' => $this->faker->randomElement(['08397', '08380', 'BH23 6B', 'BH1 12LA', '28080', '08370']),
            'town' => $this->faker->randomElement(['Pineda de Mar', 'Malgrat de Mar', 'Zafra', 'Valencia de Alcantara', 'Moraña', 'Espera']),
            'phone' => $this->faker->unique()->phoneNumber(),
            'user_id' => User::all()->random()->id,
            'province_id' => Province::all()->random()->id,
        ];
    }
}
