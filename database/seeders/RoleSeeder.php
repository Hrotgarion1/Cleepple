<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22]);
       
        // Esta es otra manera de asignar permisos a un rol

        $role = Role::create(['name' => 'Instructor']);
        $role->syncPermissions(['Crear cursos','Leer cursos','Actualizar cursos','Verificar cursos','Eliminar cursos',]);

        $role = Role::create(['name' => 'Encargado']);
        $role->syncPermissions(['Crear presupuestos','Leer presupuestos','Actualizar presupuestos','Verificar experiencia','Eliminar presupuestos',]);

        $role = Role::create(['name' => 'Delegado']);
        $role->syncPermissions(['Crear proyectos','Leer proyectos','Actualizar proyectos','Verificar voluntariado','Eliminar proyectos',]);
    }
}
