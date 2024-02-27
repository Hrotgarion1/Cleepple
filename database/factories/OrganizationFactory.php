<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Especializacion;
use App\Models\Organization;
use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Estructuras Sian', 'Malcon', 'Omnes Laborant', 'Dragados', 'Google', 'Amazon', 'Redid Steel']),
            'url' => 'logos/' .$this->faker->image('public/storage/logos', 640, 480, null, false),
            'cif' => $this->faker->randomElement(['B-62758198', 'B-78823961', 'G-37597412', 'A-23568912', 'G-4635987', 'A-12893561']),
            'town' => $this->faker->randomElement(['Pineda de Mar', 'Malgrat de Mar', 'Zafra', 'Valencia de Alcantara', 'Moraña', 'Espera']),
            'street' => $this->faker->unique()->sentence(),
            'number'=> $this->faker->randomElement([1,48,72,96,23,37,12,46,55,91,108]),
            'postcode' => $this->faker->randomElement(['08397', '08380', 'BH23 6B', 'BH1 12LA', '28080', '08370']),
            'phone' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail,
            'bio' => $this->faker->text(250),
            'user_id' => User::all()->random()->id,
            'empleado_id' => Empleado::all()->random()->id,
            'province_id' => Province::all()->random()->id,
            'especializacion_id' => Especializacion::all()->random()->id,
        ];
    }
}
