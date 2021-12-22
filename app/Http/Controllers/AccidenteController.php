<?php

namespace App\Http\Controllers;

use App\Models\accidente;
use App\Models\empleados;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{

    public function fetchEmployee(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
            if ($query != '' && empleados::where('employeeNumberEmployee', '=', $query)->exists()) {
                $response = DB::table('employees')->where('employeeNumberEmployee', 'like', $query)->get();
                $data = $response;
                foreach ($data as $key) {
                    $info = array(
                        'employeeName' => $key->employeeName,
                        'employeeLastNameP' => $key->employeeLastNameP,
                        'employeeLastNameM' => $key->employeeLastNameM,
                        'employeeRfc' => $key->employeeRfc,
                        'employeeCurp' => $key->employeeCurp,
                        'employeeNss' => $key->employeeNss,
                        'employeeAdmissionDate' => $key->employeeAdmissionDate,
                        'employeePosition' => $key->employeePosition,

                        'employeeCP' => $key->employeeCP,
                        'employeeNumberHouse' => $key->employeeNumberHouse,
                        'employeeStreet' => $key->employeeStreet,
                        'employeeColoni' => $key->employeeColoni,
                        'employeeMunicipio' => $key->employeeMunicipio,
                        'employeeEstado' => $key->employeeEstado
                    );
                }
                echo json_encode($info);
            } else {

                if (strlen($query) == 3) {
                    echo json_encode("NO HAY EMPLEADO REALACIONADO");

                    $info = array(
                        'employeeName1' => '',
                        'employeeLastNameP' => '',
                        'employeeLastNameM' => '',
                        'employeeRfc' => '',
                        'employeeCurp' => '',
                        'employeeNss' => '',
                        'employeeAdmissionDate' => '',
                        'employeePosition' => '',

                        'employeeCP' => '',
                        'employeeNumberHouse' => '',
                        'employeeStreet' => '',
                        'employeeColoni' => '',
                        'employeeMunicipio' => '',
                        'employeeEstado' => '',
                    );
                }
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registroAccidente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroAccidente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accidente = new accidente();

        $accidente->form1EncargadoArea = $request->input('form1EncargadoArea', '--');
        $accidente->form1HoraAviso = $request->input('form1HoraAviso', '--');
        $accidente->form1Lugar = $request->input('form1Lugar', '--');
        $accidente->form1Departamento = $request->input('form1Departamento', '--');
        $accidente->form1Ubicacion = $request->input('form1Ubicacion', '--');
        $accidente->form1Area = $request->input('form1Area', '--');

        $accidente->form1NumeroEmpleado = $request->input('form1NumeroEmpleado', '--');
        $accidente->form1Nombre = $request->input('form1Nombre', '--');
        $accidente->form1PrimerApellido = $request->input('form1PrimerApellido', '--');
        $accidente->form1SegundoApellido = $request->input('form1SegundoApellido', '--');
        $accidente->form1Genero = $request->input('form1Genero', '--');
        $accidente->form1Telefono = $request->input('form1Telefono', '--');
        $accidente->form1EstadoCivil = $request->input('form1EstadoCivil', '--');
        $accidente->form1Edad = $request->input('form1Edad', '--');
        $accidente->form1Curp = $request->input('form1Curp', '--');
        $accidente->form1Rfc = $request->input('form1Rfc', '--');
        $accidente->form1NivelEstudios = $request->input('form1NivelEstudios', '--');
        $accidente->form1PersonasDependen = $request->input('form1PersonasDependen', '--');
        $accidente->form1AntiguedadEmpresa = $request->input('form1AntiguedadEmpresa', '--');
        $accidente->form1AntiguedadPuesto = $request->input('form1AntiguedadPuesto', '--');
        $accidente->form1OcupacionHabitual = $request->input('form1OcupacionHabitual', '--');
        $accidente->form1OcupacionDesempeñaba = $request->input('form1OcupacionDesempeñaba', '--');
        $accidente->form1ClaseTrabajador = $request->input('form1ClaseTrabajador', '--');
        $accidente->form1NumeroSeguro = $request->input('form1NumeroSeguro', '--');
        $accidente->form1NumeroAfiliacion = $request->input('form1NumeroAfiliacion', '--');
        $accidente->form1SalarioMensual = $request->input('form1SalarioMensual', '--');
        $accidente->form1CodigoPostal = $request->input('form1CodigoPostal', '--');
        $accidente->form1Numero = $request->input('form1Numero', '--');
        $accidente->form1Calle = $request->input('form1Calle', '--');
        $accidente->form1Colonia = $request->input('form1Colonia', '--');
        $accidente->form1Municipio = $request->input('form1Municipio', '--');
        $accidente->form1MunicipioEntidadFederativa = $request->input('form1MunicipioEntidadFederativa', '--');

        $accidente->form2LugarEvento = $request->input('form2LugarEvento', '--');
        $accidente->form2Fecha = $request->input('form2Fecha', '--');
        $accidente->form2Hora = $request->input('form2Hora', '--');
        $accidente->form2Turno = $request->input('form2Turno', '--');
        $accidente->form2HorasTrabajo = $request->input('form2HorasTrabajo', '--');
        $accidente->form2LugarAtencion = $request->input('form2LugarAtencion', '--');

        $accidente->form3TipoRiesgo = $request->input('form3TipoRiesgo', '--');
        $accidente->form3ActoInseguro = $request->input('form3ActoInseguro', '--');
        $accidente->form3DescribaCausa = $request->input('form3DescribaCausa', '--');
        $accidente->form3CondicionesInseguras = $request->input('form3CondicionesInseguras', '--');
        $accidente->form3FactorPersonal = $request->input('form3FactorPersonal', '--');
        $accidente->form3Estado = $request->input('form3Estado', '--');
        $accidente->form3EquipoProteccion = $request->input('form3EquipoProteccion', '--');
        $accidente->form3RegistroAnalista = $request->input('form3RegistroAnalista', '--');

        $accidente->form4TipoIncapacidad = $request->input('form4TipoIncapacidad', '--');
        $accidente->form4DiagnosticoInicial = $request->input('form4DiagnosticoInicial', '--');
        $accidente->form4TratamientoInicial = $request->input('form4TratamientoInicial', '--');
        $accidente->form4DiagnosticoDependencia = $request->input('form4DiagnosticoDependencia', '--');
        $accidente->form4TratamientoDependencia = $request->input('form4TratamientoDependencia', '--');
        $accidente->form4DiasIncapacidad = $request->input('form4DiasIncapacidad', '--');
        $accidente->form4ImporteCuracion = $request->input('form4ImporteCuracion', '--');

        $accidente->form4AreaCabeza = $request->input('form4AreaCabeza', 'No');
        $accidente->form4AreaCuello = $request->input('form4AreaCuello', 'No');
        $accidente->form4AreaHombro = $request->input('form4AreaHombro', 'No');
        $accidente->form4AreaBrazoIzquierdo = $request->input('form4AreaBrazoIzquierdo', 'No');
        $accidente->form4AreaBrazoDerecho = $request->input('form4AreaBrazoDerecho', 'No');
        $accidente->form4AreaManoIzquierda = $request->input('form4AreaManoIzquierda', 'No');
        $accidente->form4AreaManoDerecha = $request->input('form4AreaManoDerecha', 'No');
        $accidente->form4AreaPecho = $request->input('form4AreaPecho', 'No');
        $accidente->form4AreaTorax = $request->input('form4AreaTorax', 'No');
        $accidente->form4AreaEstomago = $request->input('form4AreaEstomago', 'No');
        $accidente->form4AreaGenital = $request->input('form4AreaGenital', 'No');
        $accidente->form4AreaPiernaIzquierda = $request->input('form4AreaPiernaIzquierda', 'No');
        $accidente->form4AreaPiernaDerecha = $request->input('form4AreaPiernaDerecha', 'No');
        $accidente->form4AreaPieIzquierdo = $request->input('form4AreaPieIzquierdo', 'No');
        $accidente->form4AreaPieDerecho = $request->input('form4AreaPieDerecho', 'No');
        $accidente->form4SinLesion = $request->input('form4SinLesion', 'No');
        $accidente->form4DescripcionAreaAfectada = $request->input('bodyManoIzquierda', '---');

        $accidente->form5HorasHombresInvolucrado = $request->input('form5HorasHombresInvolucrado', '--');
        $accidente->form5HorasHombresProceso = $request->input('form5HorasHombresProceso', '--');
        $accidente->form5ImporteSalarios = $request->input('form5ImporteSalarios', '--');
        $accidente->form5ImporteDaños = $request->input('form5ImporteDaños', '--');
        $accidente->form5Indemnizacion = $request->input('form5Indemnizacion', '--');
        $accidente->form5ImporteIndemnizacion = $request->input('form5ImporteIndemnizacion', '--');
        $accidente->form5AumentoPrima = $request->input('form5AumentoPrima', '--');
        $accidente->form5Total = $request->input('form5Total', '--');

        $accidente->form5CostosDirectos = $request->input('form5CostosDirectos', '--');

        $accidente->form5CostosDirectosTiempoDias = $request->input('form5CostosDirectosTiempoDias', '--');
        $accidente->form5CostosDirectosTiempoCostos = $request->input('form5CostosDirectosTiempoCostos', '--');
        $accidente->form5CostosDirectosTiempoTrabajador = $request->input('form5CostosDirectosTiempoTrabajador', '--');

        $accidente->form5CostosDirectosIncapacidadDias = $request->input('form5CostosDirectosIncapacidadDias', '--');
        $accidente->form5CostosDirectosIncapacidadCostos = $request->input('form5CostosDirectosIncapacidadCostos', '--');
        $accidente->form5CostosDirectosIncapacidadTrabajador = $request->input('form5CostosDirectosIncapacidadTrabajador', '--');

        $accidente->form5CostosDirectosIndemnizacionDias = $request->input('form5CostosDirectosIndemnizacionDias', '--');
        $accidente->form5CostosDirectosIndemnizacionCostos = $request->input('form5CostosDirectosIndemnizacionCostos', '--');
        $accidente->form5CostosDirectosIndemnizacionTrabajador = $request->input('form5CostosDirectosIndemnizacionTrabajador', '--');

        $accidente->form5CostosDirectosOtrosDias = $request->input('form5CostosDirectosOtrosDias', '--');
        $accidente->form5CostosDirectosOtrosCostos = $request->input('form5CostosDirectosOtrosCostos', '--');
        $accidente->form5CostosDirectosOtrosTrabajador = $request->input('form5CostosDirectosOtrosTrabajador', '--');

        $accidente->form5CostosDirectosTotal = $request->input('form5CostosDirectosTotal', '--');

        $accidente->form5CostosDirectosIndemnizacionMuerteDias = $request->input('form5CostosDirectosIndemnizacionMuerteDias', '--');
        $accidente->form5CostosDirectosIndemnizacionMuerteCostos = $request->input('form5CostosDirectosIndemnizacionMuerteCostos', '--');
        $accidente->form5CostosDirectosIndemnizacionMuerteTrabajador = $request->input('form5CostosDirectosIndemnizacionMuerteTrabajador', '--');

        $accidente->form5CostosDirectosGastosFunerariosDias = $request->input('form5CostosDirectosGastosFunerariosDias', '--');
        $accidente->form5CostosDirectosGastosFunerariosCostos = $request->input('form5CostosDirectosGastosFunerariosCostos', '--');
        $accidente->form5CostosDirectosGastosFunerariosTrabajador = $request->input('form5CostosDirectosGastosFunerariosTrabajador', '--');

        $accidente->form5CostosDirectosOtrosMuerteDias = $request->input('form5CostosDirectosOtrosMuerteDias', '--');
        $accidente->form5CostosDirectosOtrosMuerteCostos = $request->input('form5CostosDirectosOtrosMuerteCostos', '--');
        $accidente->form5CostosDirectosOtrosMuerteTrabajador = $request->input('form5CostosDirectosOtrosMuerteTrabajador', '--');

        $accidente->form5CostosDirectosTotalMuerte = $request->input('form5CostosDirectosTotalMuerte', '--');

        $accidente->form5CostosIndirectos = $request->input('form5CostosIndirectos', '--');
        $accidente->form5CostosIndirectosMaquinariaDias = $request->input('form5CostosIndirectosMaquinariaDias', '--');
        $accidente->form5CostosIndirectosMaquinariaCostos = $request->input('form5CostosIndirectosMaquinariaCostos', '--');
        $accidente->form5CostosIndirectosMaquinariaTrabajador = $request->input('form5CostosIndirectosMaquinariaTrabajador', '--');
        $accidente->form5CostosIndirectosEquipoDias = $request->input('form5CostosIndirectosEquipoDias', '--');
        $accidente->form5CostosIndirectosEquipoCostos = $request->input('form5CostosIndirectosEquipoCostos', '--');
        $accidente->form5CostosIndirectosEquipoTrabajador = $request->input('form5CostosIndirectosEquipoTrabajador', '--');
        $accidente->form5CostosIndirectosProductoDias = $request->input('form5CostosIndirectosProductoDias', '--');
        $accidente->form5CostosIndirectosProductoCostos = $request->input('form5CostosIndirectosProductoCostos', '--');
        $accidente->form5CostosIndirectosProductoTrabajador = $request->input('form5CostosIndirectosProductoTrabajador', '--');
        $accidente->form5CostosIndirectosSubTotalAseguranza = $request->input('form5CostosIndirectosSubTotalAseguranza', '--');
        $accidente->form5CostosIndirectosRecursosHumanosDias = $request->input('form5CostosIndirectosRecursosHumanosDias', '--');
        $accidente->form5CostosIndirectosRecursosHumanosCostos = $request->input('form5CostosIndirectosRecursosHumanosCostos', '--');
        $accidente->form5CostosIndirectosRecursosHumanosTrabajador = $request->input('form5CostosIndirectosRecursosHumanosTrabajador', '--');
        $accidente->form5CostosIndirectosMaterialesDias = $request->input('form5CostosIndirectosMaterialesDias', '--');
        $accidente->form5CostosIndirectosMaterialesCostos = $request->input('form5CostosIndirectosMaterialesCostos', '--');
        $accidente->form5CostosIndirectosMaterialesTrabajador = $request->input('form5CostosIndirectosMaterialesTrabajador', '--');
        $accidente->form5CostosIndirectosEquiposDias = $request->input('form5CostosIndirectosEquiposDias', '--');
        $accidente->form5CostosIndirectosEquiposCostos = $request->input('form5CostosIndirectosEquiposCostos', '--');
        $accidente->form5CostosIndirectosEquiposTrabajador = $request->input('form5CostosIndirectosEquiposTrabajador', '--');
        $accidente->form5CostosIndirectosSubTotalCorrectivas = $request->input('form5CostosIndirectosSubTotalCorrectivas', '--');

        $accidente->form6Ingenieria = $request->input('form6Ingenieria', '--');
        $accidente->form6Administrativa = $request->input('form6Administrativa', '--');
        $accidente->form6Segumiento = $request->input('form6Segumiento', '--');
        $accidente->form6Capacitacion = $request->input('form6Capacitacion', '--');

        $accidente->save();

        $registroAccidente = accidente::all();
        return view('registroAccidente.index', compact('registroAccidente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function show(accidente $accidente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroAccidente = accidente::findOrFail($id);
        return view('registroAccidente.edit', compact('registroAccidente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token', '_method']);
        accidente::where('id', '=', $id)->update($datosEmpleado);

        $registroAccidente = accidente::all();
        return view('registroAccidente.index', compact('registroAccidente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function destroy(accidente $accidente)
    {
        //
    }
}
