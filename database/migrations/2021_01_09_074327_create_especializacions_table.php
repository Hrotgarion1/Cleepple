<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecializacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especializacions', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            // $table->string('slug')->nullable();
            $table->foreignId('profesion_id')->constrained();
            $table->text('extract')->nullable();
            $table->string('color')->nullable();
            
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
        Schema::dropIfExists('especializacions');
    }
}
