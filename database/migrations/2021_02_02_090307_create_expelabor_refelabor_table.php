<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpelaborRefelaborTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expelabor_refelabor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('expelabor_id');
            $table->unsignedBigInteger('refelabor_id');

            $table->foreign('expelabor_id')->references('id')->on('expelabors')->onDelete('cascade');
            $table->foreign('refelabor_id')->references('id')->on('refelabors')->onDelete('cascade');

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
        Schema::dropIfExists('expelabor_refelabor');
    }
}
