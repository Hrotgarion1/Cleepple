<?php

namespace Database\Factories;

use App\Models\Blogpost;
use App\Models\Categoriapost;
use App\Models\Country;
use App\Models\Province;
use App\Models\User;
use App\Models\Typepost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogpostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blogpost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Relleno los campos de la tabla create_blogposts_table
        //Este código hara que se rellene con una sentencia única
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            //texto con un máximo de 250 caracteres
            'extract' => $this->faker->text(250),
            //texto con un máximo de 2000 caracteres
            'body' => $this->faker->text(2000),
            //El campo status lo relleno con una variable entre los números 1 y 2 de fomra aleatoria
            //el status 1 será borrador y el 2 publicado
            'status' => $this->faker->randomElement([1, 2]),
            //Aquí llamo al modelo Categoriapost para que escoja entre los id de las categorías que he generado
            //recupero todos los registros de Categoriapost con all()
            //y una vez recuperados, le pido que escoja uno al azar con el metodo random
            //y entoces le pido que me retorne el id
            'categoriapost_id' => Categoriapost::all()->random()->id,
            //Con el user_id hago igual que con el anterior
            'user_id' => User::all()->random()->id,
            //Con la typepost_id hago igual que con el anterior
            'typepost_id' => Typepost::all()->random()->id,
            //Con la province_id hago igual que con el anterior
            'province_id' => Province::all()->random()->id,
        ];
    }
}
