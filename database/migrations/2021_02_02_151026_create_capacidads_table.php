<?php

use App\Models\Capacidad;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacidads', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');
            $table->string('organization');
            $table->enum('status', [Capacidad::PROPUESTO, Capacidad::REVISION, Capacidad::VERIFICADO, Capacidad::DENEGADO])->default(Capacidad::PROPUESTO);
            //El logro lo utilizo para hacer que sea posible por el usuario solicitar confirmación de logro, si está
            //en una organización de cualquier tipo enrrolado, podrá ver el formulario y solicitar la confirmación de sus logros
            //a la organización, si no está en una organización, no podrá ver el formulario y no podrá solicitar la confirmación
            //de estos logros, este campo se modifica automaticamente al enrrolarse a una organización (1 = SIACTIVO)
            //y cambia a (2 = NOACTIVO) cuando se deja la organización o cuando te echan de la organización. Los logros quedan registrados en la profesión
            //indicada que marque la organización al enrrolarte.
            $table->enum('logro', [1,2])->default(1);
            $table->string('url');
            $table->string('iframe');

            $table->unsignedBigInteger('nivel_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('curriculo_id');

            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('set null');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');
            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');

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
        Schema::dropIfExists('capacidads');
    }
}
