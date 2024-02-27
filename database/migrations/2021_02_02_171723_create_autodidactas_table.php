<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Autodidacta;

class CreateAutodidactasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autodidactas', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');
            //En organization puede poner el nombre del canal de donde obtuvo el video
            $table->string('organization');
            $table->enum('status', [Autodidacta::PROPUESTO, Autodidacta::REVISION, Autodidacta::VERIFICADO, Autodidacta::DENEGADO])->default(Autodidacta::PROPUESTO);
            $table->string('url');
            $table->string('iframe');

            $table->unsignedBigInteger('curriculo_id');
            $table->unsignedBigInteger('autolevel_id')->nullable();
            $table->unsignedBigInteger('especializacion_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();

            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
            $table->foreign('autolevel_id')->references('id')->on('autolevels')->onDelete('set null');
            $table->foreign('especializacion_id')->references('id')->on('especializacions')->onDelete('set null');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');

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
        Schema::dropIfExists('autodidactas');
    }
}
