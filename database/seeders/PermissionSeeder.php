<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos de Instructor
        Permission::create([
            'name' => 'Crear cursos',
        ]);

        Permission::create([
            'name' => 'Leer cursos',
        ]);

        Permission::create([
            'name' => 'Actualizar cursos',
        ]);

        Permission::create([
            'name' => 'Eliminar cursos',
        ]);

        Permission::create([
            'name' => 'Verificar cursos',
        ]);

        //Permisos de Administrador
        Permission::create([
            'name' => 'Ver dashboard',
        ]);

        Permission::create([
            'name' => 'Crear rol',
        ]);

        Permission::create([
            'name' => 'Listar rol',
        ]);

        Permission::create([
            'name' => 'Editar rol',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
        ]);

        Permission::create([
            'name' => 'Leer usuarios',
        ]);
        
        Permission::create([
            'name' => 'Editar usuarios',
        ]);

        //Permisos de Encargado
        Permission::create([
            'name' => 'Crear presupuestos',
        ]);

        Permission::create([
            'name' => 'Leer presupuestos',
        ]);

        Permission::create([
            'name' => 'Actualizar presupuestos',
        ]);

        Permission::create([
            'name' => 'Verificar experiencia',
        ]);

        Permission::create([
            'name' => 'Eliminar presupuestos',
        ]);

        //Permisos de Delegado
        Permission::create([
            'name' => 'Crear proyectos',
        ]);

        Permission::create([
            'name' => 'Leer proyectos',
        ]);

        Permission::create([
            'name' => 'Actualizar proyectos',
        ]);

        Permission::create([
            'name' => 'Verificar voluntariado',
        ]);

        Permission::create([
            'name' => 'Eliminar proyectos',
        ]);
    }
}
