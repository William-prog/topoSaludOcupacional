<?php

namespace App\Http\Controllers;

use App\Models\incidente;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registroIncidente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroIncidente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidente = new incidente();

        $incidente->form1EncargadoArea = $request->input('form1EncargadoArea', '--');
        $incidente->form1HoraAviso = $request->input('form1HoraAviso', '--');
        $incidente->form1Lugar = $request->input('form1Lugar', '--');
        $incidente->form1Departamento = $request->input('form1Departamento', '--');
        $incidente->form1Ubicacion = $request->input('form1Ubicacion', '--');
        $incidente->form1Area = $request->input('form1Area', '--');

        $incidente->form1NumeroEmpleado = $request->input('form1NumeroEmpleado', '--');
        $incidente->form1Nombre = $request->input('form1Nombre', '--');
        $incidente->form1PrimerApellido = $request->input('form1PrimerApellido', '--');
        $incidente->form1SegundoApellido = $request->input('form1SegundoApellido', '--');
        $incidente->form1Genero = $request->input('form1Genero', '--');
        $incidente->form1Telefono = $request->input('form1Telefono', '--');
        $incidente->form1EstadoCivil = $request->input('form1EstadoCivil', '--');
        $incidente->form1Edad = $request->input('form1Edad', '--');
        $incidente->form1Curp = $request->input('form1Curp', '--');
        $incidente->form1Rfc = $request->input('form1Rfc', '--');
        $incidente->form1NivelEstudios = $request->input('form1NivelEstudios', '--');
        $incidente->form1PersonasDependen = $request->input('form1PersonasDependen', '--');
        $incidente->form1AntiguedadEmpresa = $request->input('form1AntiguedadEmpresa', '--');
        $incidente->form1AntiguedadPuesto = $request->input('form1AntiguedadPuesto', '--');
        $incidente->form1OcupacionHabitual = $request->input('form1OcupacionHabitual', '--');
        $incidente->form1OcupacionDesempenaba = $request->input('form1OcupacionDesempeñaba', '--');
        $incidente->form1ClaseTrabajador = $request->input('form1ClaseTrabajador', '--');
        $incidente->form1NumeroSeguro = $request->input('form1NumeroSeguro', '--');
        $incidente->form1NumeroAfiliacion = $request->input('form1NumeroAfiliacion', '--');
        $incidente->form1SalarioMensual = $request->input('form1SalarioMensual', '--');
        $incidente->form1CodigoPostal = $request->input('form1CodigoPostal', '--');
        $incidente->form1Numero = $request->input('form1Numero', '--');
        $incidente->form1Calle = $request->input('form1Calle', '--');
        $incidente->form1Colonia = $request->input('form1Colonia', '--');
        $incidente->form1Municipio = $request->input('form1Municipio', '--');
        $incidente->form1MunicipioEntidadFederativa = $request->input('form1MunicipioEntidadFederativa', '--');

        $incidente->form2LugarEvento = $request->input('form2LugarEvento', '--');
        $incidente->form2Fecha = $request->input('form2Fecha', '--');
        $incidente->form2Hora = $request->input('form2Hora', '--');
        $incidente->form2Turno = $request->input('form2Turno', '--');
        $incidente->form2HorasTrabajo = $request->input('form2HorasTrabajo', '--');
        $incidente->form2EspecificacionLugar = $request->input('form2EspecificacionLugar', '--');
        $incidente->form2AccionesAtencion = $request->input('form2AccionesAtencion', '--');

        $incidente->form3TipoRiesgo = $request->input('form3TipoRiesgo', '--');
        $incidente->form3ActoInseguro = $request->input('form3ActoInseguro', '--');
        $incidente->form3DescribaCausa = $request->input('form3DescribaCausa', '--');
        $incidente->form3CondicionesInseguras = $request->input('form3CondicionesInseguras', '--');
        $incidente->form3FactorPersonal = $request->input('form3FactorPersonal', '--');
        $incidente->form3Estado = $request->input('form3Estado', '--');
        $incidente->form3EquipoProteccion = $request->input('form3EquipoProteccion', '--');
        $incidente->form3RegistroAnalista = $request->input('form3RegistroAnalista', '--');

        $incidente->form4TipoIncapacidad = $request->input('form4TipoIncapacidad', '--');
        $incidente->form4DiagnosticoInicial = $request->input('form4DiagnosticoInicial', '--');
        $incidente->form4TratamientoInicial = $request->input('form4TratamientoInicial', '--');
        $incidente->form4DiagnosticoDependencia = $request->input('form4DiagnosticoDependencia', '--');
        $incidente->form4TratamientoDependencia = $request->input('form4TratamientoDependencia', '--');
        $incidente->form4DiasIncapacidad = $request->input('form4DiasIncapacidad', '--');
        $incidente->form4ImporteCuracion = $request->input('form4ImporteCuracion', '--');

        $incidente->form4AreaCabeza = $request->input('form4AreaCabeza', 'No');
        $incidente->form4AreaCuello = $request->input('form4AreaCuello', 'No');
        $incidente->form4AreaHombro = $request->input('form4AreaHombro', 'No');
        $incidente->form4AreaBrazoIzquierdo = $request->input('form4AreaBrazoIzquierdo', 'No');
        $incidente->form4AreaBrazoDerecho = $request->input('form4AreaBrazoDerecho', 'No');
        $incidente->form4AreaManoIzquierda = $request->input('form4AreaManoIzquierda', 'No');
        $incidente->form4AreaManoDerecha = $request->input('form4AreaManoDerecha', 'No');
        $incidente->form4AreaPecho = $request->input('form4AreaPecho', 'No');
        $incidente->form4AreaTorax = $request->input('form4AreaTorax', 'No');
        $incidente->form4AreaEstomago = $request->input('form4AreaEstomago', 'No');
        $incidente->form4AreaGenital = $request->input('form4AreaGenital', 'No');
        $incidente->form4AreaPiernaIzquierda = $request->input('form4AreaPiernaIzquierda', 'No');
        $incidente->form4AreaPiernaDerecha = $request->input('form4AreaPiernaDerecha', 'No');
        $incidente->form4AreaPieIzquierdo = $request->input('form4AreaPieIzquierdo', 'No');
        $incidente->form4AreaPieDerecho = $request->input('form4AreaPieDerecho', 'No');
        $incidente->form4SinLesion = $request->input('form4SinLesion', 'No');
        $incidente->form4DescripcionAreaAfectada = $request->input('bodyManoIzquierda', '---');

        $incidente->form5HorasHombresInvolucrado = $request->input('form5HorasHombresInvolucrado', '--');
        $incidente->form5HorasHombresProceso = $request->input('form5HorasHombresProceso', '--');
        $incidente->form5ImporteSalarios = $request->input('form5ImporteSalarios', '--');
        $incidente->form5ImporteDanos = $request->input('form5ImporteDaños', '--');
        $incidente->form5Indemnizacion = $request->input('form5Indemnizacion', '--');
        $incidente->form5ImporteIndemnizacion = $request->input('form5ImporteIndemnizacion', '--');
        $incidente->form5AumentoPrima = $request->input('form5AumentoPrima', '--');
        $incidente->form5Total = $request->input('form5Total', '--');

        $incidente->form5CostosDirectos = $request->input('form5CostosDirectos', '--');

        $incidente->form5CostosDirectosTiempoDias = $request->input('form5CostosDirectosTiempoDias', '--');
        $incidente->form5CostosDirectosTiempoCostos = $request->input('form5CostosDirectosTiempoCostos', '--');
        $incidente->form5CostosDirectosTiempoTrabajador = $request->input('form5CostosDirectosTiempoTrabajador', '--');

        $incidente->form5CostosDirectosIncapacidadDias = $request->input('form5CostosDirectosIncapacidadDias', '--');
        $incidente->form5CostosDirectosIncapacidadCostos = $request->input('form5CostosDirectosIncapacidadCostos', '--');
        $incidente->form5CostosDirectosIncapacidadTrabajador = $request->input('form5CostosDirectosIncapacidadTrabajador', '--');

        $incidente->form5CostosDirectosIndemnizacionDias = $request->input('form5CostosDirectosIndemnizacionDias', '--');
        $incidente->form5CostosDirectosIndemnizacionCostos = $request->input('form5CostosDirectosIndemnizacionCostos', '--');
        $incidente->form5CostosDirectosIndemnizacionTrabajador = $request->input('form5CostosDirectosIndemnizacionTrabajador', '--');

        $incidente->form5CostosDirectosOtrosDias = $request->input('form5CostosDirectosOtrosDias', '--');
        $incidente->form5CostosDirectosOtrosCostos = $request->input('form5CostosDirectosOtrosCostos', '--');
        $incidente->form5CostosDirectosOtrosTrabajador = $request->input('form5CostosDirectosOtrosTrabajador', '--');

        $incidente->form5CostosDirectosTotal = $request->input('form5CostosDirectosTotal', '--');

        $incidente->form5CostosDirectosIndemnizacionMuerteDias = $request->input('form5CostosDirectosIndemnizacionMuerteDias', '--');
        $incidente->form5CostosDirectosIndemnizacionMuerteCostos = $request->input('form5CostosDirectosIndemnizacionMuerteCostos', '--');
        $incidente->form5CostosDirectosIndemnizacionMuerteTrabajador = $request->input('form5CostosDirectosIndemnizacionMuerteTrabajador', '--');

        $incidente->form5CostosDirectosGastosFunerariosDias = $request->input('form5CostosDirectosGastosFunerariosDias', '--');
        $incidente->form5CostosDirectosGastosFunerariosCostos = $request->input('form5CostosDirectosGastosFunerariosCostos', '--');
        $incidente->form5CostosDirectosGastosFunerariosTrabajador = $request->input('form5CostosDirectosGastosFunerariosTrabajador', '--');

        $incidente->form5CostosDirectosOtrosMuerteDias = $request->input('form5CostosDirectosOtrosMuerteDias', '--');
        $incidente->form5CostosDirectosOtrosMuerteCostos = $request->input('form5CostosDirectosOtrosMuerteCostos', '--');
        $incidente->form5CostosDirectosOtrosMuerteTrabajador = $request->input('form5CostosDirectosOtrosMuerteTrabajador', '--');

        $incidente->form5CostosDirectosTotalMuerte = $request->input('form5CostosDirectosTotalMuerte', '--');

        $incidente->form5CostosIndirectos = $request->input('form5CostosIndirectos', '--');
        $incidente->form5CostosIndirectosMaquinariaDias = $request->input('form5CostosIndirectosMaquinariaDias', '--');
        $incidente->form5CostosIndirectosMaquinariaCostos = $request->input('form5CostosIndirectosMaquinariaCostos', '--');
        $incidente->form5CostosIndirectosMaquinariaTrabajador = $request->input('form5CostosIndirectosMaquinariaTrabajador', '--');
        $incidente->form5CostosIndirectosEquipoDias = $request->input('form5CostosIndirectosEquipoDias', '--');
        $incidente->form5CostosIndirectosEquipoCostos = $request->input('form5CostosIndirectosEquipoCostos', '--');
        $incidente->form5CostosIndirectosEquipoTrabajador = $request->input('form5CostosIndirectosEquipoTrabajador', '--');
        $incidente->form5CostosIndirectosProductoDias = $request->input('form5CostosIndirectosProductoDias', '--');
        $incidente->form5CostosIndirectosProductoCostos = $request->input('form5CostosIndirectosProductoCostos', '--');
        $incidente->form5CostosIndirectosProductoTrabajador = $request->input('form5CostosIndirectosProductoTrabajador', '--');
        $incidente->form5CostosIndirectosSubTotalAseguranza = $request->input('form5CostosIndirectosSubTotalAseguranza', '--');
        $incidente->form5CostosIndirectosRecursosHumanosDias = $request->input('form5CostosIndirectosRecursosHumanosDias', '--');
        $incidente->form5CostosIndirectosRecursosHumanosCostos = $request->input('form5CostosIndirectosRecursosHumanosCostos', '--');
        $incidente->form5CostosIndirectosRecursosHumanosTrabajador = $request->input('form5CostosIndirectosRecursosHumanosTrabajador', '--');
        $incidente->form5CostosIndirectosMaterialesDias = $request->input('form5CostosIndirectosMaterialesDias', '--');
        $incidente->form5CostosIndirectosMaterialesCostos = $request->input('form5CostosIndirectosMaterialesCostos', '--');
        $incidente->form5CostosIndirectosMaterialesTrabajador = $request->input('form5CostosIndirectosMaterialesTrabajador', '--');
        $incidente->form5CostosIndirectosEquiposDias = $request->input('form5CostosIndirectosEquiposDias', '--');
        $incidente->form5CostosIndirectosEquiposCostos = $request->input('form5CostosIndirectosEquiposCostos', '--');
        $incidente->form5CostosIndirectosEquiposTrabajador = $request->input('form5CostosIndirectosEquiposTrabajador', '--');
        $incidente->form5CostosIndirectosSubTotalCorrectivas = $request->input('form5CostosIndirectosSubTotalCorrectivas', '--');

        $incidente->form6Ingenieria = $request->input('form6Ingenieria', '--');
        $incidente->form6Administrativa = $request->input('form6Administrativa', '--');
        $incidente->form6Capacitacion = $request->input('form6Capacitacion', '--');

        $incidente->save();

        $registroIncidente = incidente::all();
        return view('registroIncidente.index', compact('registroIncidente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function show(incidente $incidente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroIncidente = incidente::findOrFail($id);
        return view('registroIncidente.edit', compact('registroIncidente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token','_method']);
        incidente::where('id', '=', $id)->update($datosEmpleado);
        
        $registroIncidente = incidente::all();
        return view('registroIncidente.index', compact('registroIncidente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function destroy(incidente $incidente)
    {
        //
    }
}
