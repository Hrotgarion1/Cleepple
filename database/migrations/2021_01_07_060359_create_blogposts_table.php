<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('extract')->nullable();
            $table->longtext('body')->nullable();
        // El tipo enum permite que se le especifiquen sus valores, le asigno el nombre y en un array le pongo los valores, 1 indicará borrador
            $table->enum('status', [1, 2])->default(1);
            // Ahora relaciono la tabla con Categoriapost y con los usuarios
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categoriapost_id');
            //Vigilar el nombre, pasan de singular a plural
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categoriapost_id')->references('id')->on('categoriaposts')->onDelete('cascade');
            
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
        Schema::dropIfExists('blogposts');
    }
}
