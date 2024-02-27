<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Province;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
          'name' => 'Admin',//Nombre de usuario
          'email' => 'admin@admin.com',//Email
          'phone' => '93 762 69 70',
          'password' => bcrypt('12345678'),//con bcrypt paso una contraseña encriptada
          'role_id' => '1',//Rol
          'email_verified_at' => now(),
          ]);    // Y así podría seguir indicandole todos los campos que tenga la tabla users

        $user->assignRole('Admin');
        //Aqui le indico el rol que le otorgo en spatie y que sale en la tabla model_has_roles

        User::create([
          'name' => 'User',
          'email' => 'user@user.com',
          'phone' => '93 762 69 70',
          'password' => bcrypt('12345678'),
          'email_verified_at' => now(),
        ]);

        User::create([
          'name' => 'User1',
          'email' => 'user1@user.com',
          'phone' => '93 762 69 70',
          'password' => bcrypt('12345678'),
          'email_verified_at' => now(),
        ]);

        User::create([
          'name' => 'Empresa',
          'email' => 'empresa@user.com',
          'phone' => '93 762 69 70',
          'password' => bcrypt('12345678'),
          'role_id' => '4',
          'email_verified_at' => now(),
        ]);

        $user = User::create([
          'name' => 'Centro',
          'email' => 'centro@user.com',
          'phone' => '93 762 69 70',
          'password' => bcrypt('12345678'),
          'role_id' => '3',
          'email_verified_at' => now(),
        ]);

        $user->assignRole('Instructor');
        //Aqui le indico el rol que le otorgo en spatie y que sale en la tabla model_has_roles

        User::create([
          'name' => 'Entidad',
          'email' => 'entidad@user.com',
          'phone' => '93 762 69 70',
          'password' => bcrypt('12345678'),
          'role_id' => '5',
          'email_verified_at' => now(),
        ]);

        User::factory(3)->create();
    }
}
