<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->string('sector')->nullable();
            //Este campo status lo utilizaré para indicar si el usuario quiere que se mande este curriculo a una oferta laboral
            //es decir, será el curriculo activo de la profesión, si no indica nada, se enviarán todos los curriculos(por defecto).
            $table->enum('status', [1,2])->default(1);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('especializacion_id')->nullable();
            

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('especializacion_id')->references('id')->on('especializacions')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculos');
    }
}
