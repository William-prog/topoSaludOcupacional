<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->id();

            $table->string('form1EncargadoArea')->nullable();
            $table->string('form1HoraAviso')->nullable(); //
            $table->string('form1Lugar')->nullable(); //
            $table->string('form1Departamento')->nullable(); //
            $table->string('form1Ubicacion')->nullable(); //
            $table->string('form1Area')->nullable(); //

            $table->string('form1NumeroEmpleado')->nullable(); //
            $table->string('form1Nombre')->nullable(); //
            $table->string('form1PrimerApellido')->nullable(); //
            $table->string('form1SegundoApellido')->nullable(); //
            $table->string('form1Genero')->nullable(); //
            $table->string('form1Telefono')->nullable(); //
            $table->string('form1EstadoCivil')->nullable(); //
            $table->string('form1Edad')->nullable(); //
            $table->string('form1Curp')->nullable(); //
            $table->string('form1Rfc')->nullable(); //

            $table->string('form1NivelEstudios')->nullable(); //
            $table->string('form1PersonasDependen')->nullable(); //
            $table->string('form1AntiguedadEmpresa')->nullable(); //
            $table->string('form1AntiguedadPuesto')->nullable(); //
            $table->string('form1OcupacionHabitual')->nullable(); //
            $table->string('form1OcupacionDesempeñaba')->nullable(); //
            $table->string('form1ClaseTrabajador')->nullable(); //
            $table->string('form1NumeroSeguro')->nullable(); //
            $table->string('form1NumeroAfiliacion')->nullable(); //
            $table->string('form1SalarioMensual')->nullable(); //
            $table->string('form1CodigoPostal')->nullable(); //
            $table->string('form1Numero')->nullable(); //
            $table->string('form1Calle')->nullable(); //
            $table->string('form1Colonia')->nullable(); //
            $table->string('form1Municipio')->nullable(); //
            $table->string('form1MunicipioEntidadFederativa')->nullable(); //

            $table->string('form2LugarEvento')->nullable(); //
            $table->string('form2Fecha')->nullable(); //
            $table->string('form2Hora')->nullable(); //
            $table->string('form2Turno')->nullable(); //
            $table->string('form2HorasTrabajo')->nullable(); //
            $table->string('form2EspecificacionLugar')->nullable(); //
            $table->string('form2AccionesAtencion')->nullable(); //

            $table->string('form3TipoRiesgo')->nullable(); //
            $table->string('form3ActoInseguro')->nullable(); //
            $table->string('form3DescribaCausa')->nullable(); //
            $table->string('form3CondicionesInseguras')->nullable(); //
            $table->string('form3FactorPersonal')->nullable(); //
            $table->string('form3Estado')->nullable(); //
            $table->string('form3EquipoProteccion')->nullable(); //
            $table->string('form3RegistroAnalista')->nullable(); //

            $table->string('form4TipoIncapacidad')->nullable(); //
            $table->string('form4DiagnosticoInicial')->nullable(); //
            $table->string('form4TratamientoInicial')->nullable(); //
            $table->string('form4DiagnosticoDependencia')->nullable(); //
            $table->string('form4TratamientoDependencia')->nullable(); //
            $table->string('form4DiasIncapacidad')->nullable(); //
            $table->string('form4ImporteCuracion')->nullable(); //
            $table->string('form4AreaCabeza')->nullable(); //
            $table->string('form4AreaCuello')->nullable(); //
            $table->string('form4AreaHombro')->nullable(); //
            $table->string('form4AreaBrazoIzquierdo')->nullable(); //
            $table->string('form4AreaBrazoDerecho')->nullable(); //
            $table->string('form4AreaManoIzquierda')->nullable(); //
            $table->string('form4AreaManoDerecha')->nullable(); //
            $table->string('form4AreaPecho')->nullable(); //
            $table->string('form4AreaTorax')->nullable(); //
            $table->string('form4AreaEstomago')->nullable(); //
            $table->string('form4AreaGenital')->nullable(); //
            $table->string('form4AreaPiernaIzquierda')->nullable(); //
            $table->string('form4AreaPiernaDerecha')->nullable(); //
            $table->string('form4AreaPieIzquierdo')->nullable(); //
            $table->string('form4AreaPieDerecho')->nullable(); //
            $table->string('form4SinLesion')->nullable(); //
            $table->string('form4DescripcionAreaAfectada')->nullable(); //

            $table->string('form5HorasHombresInvolucrado')->nullable(); //
            $table->string('form5HorasHombresProceso')->nullable(); //
            $table->string('form5ImporteSalarios')->nullable(); //
            $table->string('form5ImporteDaños')->nullable(); //
            $table->string('form5Indemnizacion')->nullable(); //
            $table->string('form5ImporteIndemnizacion')->nullable(); //
            $table->string('form5AumentoPrima')->nullable(); //
            $table->string('form5Total')->nullable(); //
            
            $table->string('form5CostosDirectos')->nullable(); //

            $table->string('form5CostosDirectosTiempoDias')->nullable(); //
            $table->string('form5CostosDirectosTiempoCostos')->nullable(); //
            $table->string('form5CostosDirectosTiempoTrabajador')->nullable(); //

            $table->string('form5CostosDirectosIncapacidadDias')->nullable(); //
            $table->string('form5CostosDirectosIncapacidadCostos')->nullable(); //
            $table->string('form5CostosDirectosIncapacidadTrabajador')->nullable(); //

            $table->string('form5CostosDirectosIndemnizacionDias')->nullable(); //
            $table->string('form5CostosDirectosIndemnizacionCostos')->nullable(); //
            $table->string('form5CostosDirectosIndemnizacionTrabajador')->nullable(); //

            $table->string('form5CostosDirectosOtrosDias')->nullable(); //
            $table->string('form5CostosDirectosOtrosCostos')->nullable(); //
            $table->string('form5CostosDirectosOtrosTrabajador')->nullable(); //
            
            $table->string('form5CostosDirectosTotal')->nullable(); //
            $table->string('form5CostosDirectosIndemnizacionMuerteDias')->nullable(); //
            $table->string('form5CostosDirectosIndemnizacionMuerteCostos')->nullable(); //
            $table->string('form5CostosDirectosIndemnizacionMuerteTrabajador')->nullable(); //
            $table->string('form5CostosDirectosGastosFunerariosDias')->nullable(); //
            $table->string('form5CostosDirectosGastosFunerariosCostos')->nullable(); //
            $table->string('form5CostosDirectosGastosFunerariosTrabajador')->nullable(); //
            $table->string('form5CostosDirectosOtrosMuerteDias')->nullable(); //
            $table->string('form5CostosDirectosOtrosMuerteCostos')->nullable(); //
            $table->string('form5CostosDirectosOtrosMuerteTrabajador')->nullable(); //
            $table->string('form5CostosDirectosTotalMuerte')->nullable(); //
            
            $table->string('form5CostosIndirectos')->nullable(); //
            $table->string('form5CostosIndirectosMaquinariaDias')->nullable(); //
            $table->string('form5CostosIndirectosMaquinariaCostos')->nullable(); //
            $table->string('form5CostosIndirectosMaquinariaTrabajador')->nullable(); //
            $table->string('form5CostosIndirectosEquipoDias')->nullable(); //
            $table->string('form5CostosIndirectosEquipoCostos')->nullable(); //
            $table->string('form5CostosIndirectosEquipoTrabajador')->nullable(); //
            $table->string('form5CostosIndirectosProductoDias')->nullable(); //
            $table->string('form5CostosIndirectosProductoCostos')->nullable(); //
            $table->string('form5CostosIndirectosProductoTrabajador')->nullable(); //
            $table->string('form5CostosIndirectosSubTotalAseguranza')->nullable(); //
            $table->string('form5CostosIndirectosRecursosHumanosDias')->nullable(); //
            $table->string('form5CostosIndirectosRecursosHumanosCostos')->nullable(); //
            $table->string('form5CostosIndirectosRecursosHumanosTrabajador')->nullable(); //
            $table->string('form5CostosIndirectosMaterialesDias')->nullable(); //
            $table->string('form5CostosIndirectosMaterialesCostos')->nullable(); //
            $table->string('form5CostosIndirectosMaterialesTrabajador')->nullable(); //
            $table->string('form5CostosIndirectosEquiposDias')->nullable(); //
            $table->string('form5CostosIndirectosEquiposCostos')->nullable(); //
            $table->string('form5CostosIndirectosEquiposTrabajador')->nullable(); //
            $table->string('form5CostosIndirectosSubTotalCorrectivas')->nullable(); //
            
            $table->string('form6Ingenieria')->nullable(); //
            $table->string('form6Administrativa')->nullable(); //
            $table->string('form6Capacitacion')->nullable(); //
            
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
        Schema::dropIfExists('incidentes');
    }
}
