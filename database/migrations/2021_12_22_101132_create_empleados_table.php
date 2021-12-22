<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            
            $table->integer('employeeNumberEmployee');
            $table->string('employeeLastNameP');
            $table->string('employeeLastNameM');
            $table->string('employeeName');
            $table->string('employeeAdmissionDate');
            $table->string('employeePosition');
            $table->string('employeeNss');
            $table->string('employeeRfc');
            $table->string('employeeCurp');
            $table->string('employeeStreet');
            $table->string('employeeNumberHouse');
            $table->string('employeeColoni');
            $table->string('employeeMunicipio');
            $table->string('employeeCP');
            $table->string('employeeEstado');

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
        Schema::dropIfExists('empleados');
    }
}
