<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogpostEspecializacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogpost_especializacion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('blogpost_id');
            $table->unsignedBigInteger('especializacion_id');

            $table->foreign('blogpost_id')->references('id')->on('blogposts')->onDelete('cascade');
            $table->foreign('especializacion_id')->references('id')->on('especializacions')->onDelete('cascade');

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
        Schema::dropIfExists('blogpost_especializacion');
    }
}
