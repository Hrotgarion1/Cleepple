<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudioProfesionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio_profesion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('estudio_id');
            $table->unsignedBigInteger('profesion_id');

            $table->foreign('estudio_id')->references('id')->on('estudios')->onDelete('cascade');
            $table->foreign('profesion_id')->references('id')->on('profesions')->onDelete('cascade');

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
        Schema::dropIfExists('estudio_profesion');
    }
}
