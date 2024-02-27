<?php

namespace Database\Seeders;

use App\Models\Especializacion;
use App\Models\Profesion;
use App\Models\ProfesionCurriculo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;//Necesario para crear las carpetas de las imagenes

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*Este metodo primero elimina la carpeta courses si existe (es para que no se llene innecesariamente) y despues la crea*/   
        Storage::deleteDirectory('courses');
        Storage::makeDirectory('courses');
/*Este metodo primero elimina la carpeta posts si existe (es para que no se llene innecesariamente) y despues la crea*/   
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
/*Este metodo primero elimina la carpeta logros si existe (es para que no se llene innecesariamente) y despues la crea*/   
        Storage::deleteDirectory('logros');
        Storage::makeDirectory('logros');
/*Este metodo primero elimina la carpeta logros si existe (es para que no se llene innecesariamente) y despues la crea*/   
        Storage::deleteDirectory('logos');
        Storage::makeDirectory('logos');
        

        // Profesion::factory(8)->create();
        // Especializacion::factory(8)->create();
        

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(ClasaccionSeeder::class);
        $this->call(LogrovalueSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(AutolevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(RefelaborSeeder::class);
        $this->call(RefentitySeeder::class);
        $this->call(RefeclienteSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(EspecializacionSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(CategoriapostSeeder::class);
        $this->call(CategoriaProfesionalSeeder::class);
        $this->call(JornadaSeeder::class);
        $this->call(HorasExtraSeeder::class);
        $this->call(TypepostSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ProvincesTableSeeder::class);
       //Estos tienen que ser los últimos debido a sus dependencias de otros seeders
        $this->call(UserSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(CurriculoSeeder::class);
        $this->call(EstudioSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(BlogpostSeeder::class);
        
        
        
        
        
        
    }
}
