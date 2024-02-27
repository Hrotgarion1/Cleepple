<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blogpost;//Lo he llamado para signarle una imagen
use App\Models\Image;//Este modelo contiene las imagenes (url)


class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creo una variable para utilizarla en un foreach
        $blogposts = Blogpost::factory(54)->create();
        
        foreach ($blogposts as $blogpost) {
            //Aquí llamo al factory que tiene la url de la imagen
            //en este caso es ImagepostFactory
            //Tambien necesito que pase los campos imagepostable_id
            // e imagepostable_type, asi que dentro de los parentesis del metodo
            //create abro un array y defino los campos
            //y les paso la variable y les pido el id
            Image::factory(1)->create([
                'imageable_id' => $blogpost->id,
                //Este necesita el modelo, asi que se lo asigno
                'imageable_type' => Blogpost::class
            ]);
            //Por cada post(variable blogpost) voy a asignarle dos tags
            //para ello llamo a la relación que contiene el modelo Blogpost 
            //la que se llama tagpost que es muchos a muchos
            //este método escoge al azar entre los números indicados
            $blogpost->profesion()->attach([
                rand(1, 3)
                
            ]);
            //este método escoge al azar entre los números indicados
            $blogpost->especializacion()->attach([
                rand(1, 12)
                
            ]);
        }
    }
}
