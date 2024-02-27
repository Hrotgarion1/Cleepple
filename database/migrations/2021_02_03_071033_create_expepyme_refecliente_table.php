<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpepymeRefeclienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expepyme_refecliente', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('expepyme_id');
            $table->unsignedBigInteger('refecliente_id');

            $table->foreign('expepyme_id')->references('id')->on('expepymes')->onDelete('cascade');
            $table->foreign('refecliente_id')->references('id')->on('refeclientes')->onDelete('cascade');

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
        Schema::dropIfExists('expepyme_refecliente');
    }
}
