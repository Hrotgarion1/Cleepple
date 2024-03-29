<?php

namespace Database\Factories;

use App\Models\Autodidacta;
use App\Models\Autolevel;
use App\Models\User;
use App\Models\Curriculo;
use App\Models\Especializacion;
use App\Models\Organization;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutodidactaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Autodidacta::class;

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
            'status' => $this->faker->randomElement([Autodidacta::PROPUESTO, Autodidacta::REVISION, Autodidacta::VERIFICADO, Autodidacta::DENEGADO]),
            'url' => 'https://youtu.be/aNjuuLOVlwk',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/aNjuuLOVlwk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'curriculo_id' => Curriculo::all()->random()->id,
            'autolevel_id' => Autolevel::all()->random()->id,
            'especializacion_id' => Especializacion::all()->random()->id,
            'province_id' => Province::all()->random()->id,
        ];
    }
}
