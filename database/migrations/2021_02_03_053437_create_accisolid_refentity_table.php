<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccisolidRefentityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accisolid_refentity', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('accisolid_id');
            $table->unsignedBigInteger('refentity_id');

            $table->foreign('accisolid_id')->references('id')->on('accisolids')->onDelete('cascade');
            $table->foreign('refentity_id')->references('id')->on('refentities')->onDelete('cascade');

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
        Schema::dropIfExists('accisolid_refentity');
    }
}
