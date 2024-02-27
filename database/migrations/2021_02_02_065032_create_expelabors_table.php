<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Expelabor;

class CreateExpelaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expelabors', function (Blueprint $table) {
            $table->id();

            $table->string('organization', 100);
            //El status lo utilizo para indicar si la experiencia laboral fué en el pasado, lo cual genera un registro
            //con el calculo de días entre las dos fechas indicadas en los inputs de fechaIni y fechaFin
            //o es actual, y genera un calculo entre la fechaIni y la fecha actual, ademas de ser indicado actual, 
            //tendré que hacer que se calculen los eps diariamente para este registro. Estos calculos utilizan
            //como factor de multiplicación la jornada más las horas extras por los diás y los multiplica por la categoria profesional.
            $table->enum('status', [Expelabor::PASADO, Expelabor::ACTUAL])->default(Expelabor::PASADO);
            $table->text('description');
            //El logro lo utilizo para hacer que sea posible por el usuario solicitar confirmación de logro, si está
            //en una organización trabajando, podrá ver el formulario y solicitar la confirmación de sus logros
            //a la organización, si no está en una organización, no podrá ver el formulario y no podrá solicitar la confirmación
            //de estos logros, este campo se modifica automaticamente al enrrolarse a una organización (SIACTIVO)
            //y cambia a (NOACTIVO) cuando se deja la organización. Los logros quedan registrados en la profesión con la 
            //categoría indicada que marque la organización.
            $table->enum('logro', [1,2])->default(1);
            $table->integer('salary')->length(8);
            $table->string('fechaIni', 25);
            $table->string('fechaFin', 25);

            
            $table->unsignedBigInteger('curriculo_id');
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('cat_prof_id')->nullable();
            $table->unsignedBigInteger('jornada_id')->nullable();
            $table->unsignedBigInteger('hora_extra_id')->nullable();
            

            
            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');
            $table->foreign('cat_prof_id')->references('id')->on('categoria_profesionals')->onDelete('set null');
            $table->foreign('jornada_id')->references('id')->on('jornadas')->onDelete('set null');
            $table->foreign('hora_extra_id')->references('id')->on('horas_extras')->onDelete('set null');

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
        Schema::dropIfExists('expelabors');
    }
}
