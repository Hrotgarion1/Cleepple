<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogpostProfesionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogpost_profesion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('blogpost_id');
            $table->unsignedBigInteger('profesion_id');

            $table->foreign('blogpost_id')->references('id')->on('blogposts')->onDelete('cascade');
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
        Schema::dropIfExists('blogpost_profesion');
    }
}
