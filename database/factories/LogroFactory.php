<?php

namespace Database\Factories;

use App\Models\Logro;
use App\Models\Logrovalue;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Logro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'url' => 'logros/' . $this->faker->image('public/storage/logros', 640, 480, null, false),
            'description' => $this->faker->text(2000),
            //El campo status lo relleno con una variable entre los números 1 y 2 de fomra aleatoria
            //el status 1 será borrador y el 2 publicado
            'status' => $this->faker->randomElement([1, 2]),
            'logrovalue_id' => Logrovalue::all()->random()->id,

        ];
    }
}
