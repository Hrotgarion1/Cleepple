<?php

use App\Models\Expepyme;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpepymesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expepymes', function (Blueprint $table) {
            $table->id();

            $table->string('organization', 100);
            //El status lo utilizo para indicar si la experiencia mercantil fué en el pasado, lo cual genera un registro
            //con el calculo de días entre las dos fechas indicadas en los inputs de fechaIni y fechaFin
            //o es actual, y genera un calculo entre la fechaIni y la fecha actual, ademas de ser indicado actual, 
            //tendré que hacer que se calculen los eps diariamente para este registro. Estos calculos utilizan
            //como factor de multiplicación la jornada más las horas extras por los diás y los multiplica por la tabla empleados.
            $table->enum('status', [Expepyme::PASADO, Expepyme::ACTUAL])->default(Expepyme::PASADO);
            $table->text('description');
            $table->integer('volunego');
            $table->string('cif')->length(12);
            $table->string('fechaIni', 25);
            $table->string('fechaFin', 25);

            
            $table->unsignedBigInteger('curriculo_id');
            $table->unsignedBigInteger('especializacion_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('empleado_id')->nullable();
            $table->unsignedBigInteger('jornada_id')->nullable();
            $table->unsignedBigInteger('hora_extra_id')->nullable();
            

            
            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
            $table->foreign('especializacion_id')->references('id')->on('especializacions')->onDelete('set null');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('set null');
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
        Schema::dropIfExists('expepymes');
    }
}
