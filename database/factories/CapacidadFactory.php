<?php

namespace Database\Factories;

use App\Models\Capacidad;
use App\Models\User;
use App\Models\Curriculo;
use App\Models\Nivel;
use App\Models\Organization;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class CapacidadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capacidad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->sentence(),
            'description' => $this->faker->paragraph(),
            'organization' => Organization::all()->random()->name,
            'status' => $this->faker->randomElement([Capacidad::PROPUESTO, Capacidad::REVISION, Capacidad::VERIFICADO, Capacidad::DENEGADO]),
            'logro' => $this->faker->randomElement(['1', '2']),
            'url' => 'https://youtu.be/aNjuuLOVlwk',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/aNjuuLOVlwk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'nivel_id' => Nivel::all()->random()->id,
            'curriculo_id' => Curriculo::all()->random()->id,
            'province_id' => Province::all()->random()->id,
        ];
    }
}
