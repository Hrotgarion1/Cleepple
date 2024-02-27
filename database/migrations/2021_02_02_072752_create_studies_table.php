<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Study;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();

            $table->string('organization', 45)->nullable();
            $table->string('curso', 100)->nullable();
            $table->enum('status', [Study::PROPUESTO, Study::REVISION, Study::VERIFICADO, Study::DENEGADO])->default(Study::PROPUESTO);
            //El logro lo utilizo para hacer que sea posible por el usuario solicitar confirmación de logro, si está
            //en una centro estudiando, podrá ver el formulario y solicitar la confirmación de sus logros
            //al centro, si no está en un centro, no podrá ver el formulario y no podrá solicitar la confirmación
            //de estos logros, este campo se modifica automaticamente al enrrolarse a un curso (SIACTIVO)
            //y cambia a (NOACTIVO) cuando se deja el curso, cuando te echa el centro o cuando se indica que el curso a finalizado. Los logros quedan registrados en la profesión
            //indicada que marque el centro al enrrolarte en un curso.
            $table->enum('logro', [1,2])->default(1);
            $table->string('fechaIni', 25)->nullable();
            $table->string('fechaFin', 25)->nullable();

            $table->unsignedBigInteger('curriculo_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();

            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
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
        Schema::dropIfExists('studies');
    }
}
