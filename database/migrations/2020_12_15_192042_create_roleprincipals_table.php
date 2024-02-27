<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleprincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roleprincipals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('guard_name')->nullable();
            $table->timestamps();
        });

        $roles = ['Administrador', 'Particular', 'Centro', 'Empresa', 'Entidad', 'Instructor', 'Encargado'];
        foreach ($roles as $role) {
            \App\Models\Roleprincipal::create(['name' => $role]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roleprincipals');
    }
}
