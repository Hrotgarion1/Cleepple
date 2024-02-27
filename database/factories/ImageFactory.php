<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'courses/' .$this->faker->image('public/storage/courses', 640, 480, null, false),
            //Almaceno en el campo url la imagen descargada
            //en image() le indico la dirección de dónde quiero que sea guardada
            //como segundo parametro le indico el ancho en pixeles
            //y como tercer parametro el alto de la imagen en pixeles
            //el cuarto parametro a desaparecido(categoria) así que le indico null
            //quinto parametro true o false
            //true pasa este parametro public/storage/posts/imagen.jpg 
            //false pasa solo imagen.jpg 
            //yo quiero que lo guarde así:posts/imagen.jpg entoces cambio el código de:
            //'url' => $this->faker->image('public/storage/posts', 640, 480, null, false), a lo que queda
            'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, null, false),
        ];
    }
}
