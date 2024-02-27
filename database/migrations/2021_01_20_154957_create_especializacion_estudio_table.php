<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecializacionEstudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especializacion_estudio', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('especializacion_id');
            $table->unsignedBigInteger('estudio_id');

            $table->foreign('especializacion_id')->references('id')->on('especializacions')->onDelete('cascade');
            $table->foreign('estudio_id')->references('id')->on('estudios')->onDelete('cascade');

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
        Schema::dropIfExists('especializacion_estudio');
    }
}
