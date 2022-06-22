<div class="card-header header">
    <h2 style="text-align:center;"> <strong> Análisis de costos </strong> </h2>
</div>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorCosto">Costos / Daños</h3>
    </div>
</div>


<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5HorasHombresInvolucrado">Horas hombre de los involucrados en la investigacion: </label>
    </div>
    <div class="form-group col">
        <input name="form5HorasHombresInvolucrado" id="form5HorasHombresInvolucrado" class="form-control" type="number" value="{{isset($registroIncidente->form5HorasHombresInvolucrado)?$registroIncidente->form5HorasHombresInvolucrado:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5HorasHombresProceso">Horas hombre de los procesos con el cliente:</label>
    </div>
    <div class="form-group col">
        <input name="form5HorasHombresProceso" id="form5HorasHombresProceso" class="form-control" type="number" value="{{isset($registroIncidente->form5HorasHombresProceso)?$registroIncidente->form5HorasHombresProceso:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5ImporteSalarios"> Importe de salarios recibidos por el accidentado durante los días que dejó de trabajar: </label>
    </div>
    <div class="form-group col">
        <input name="form5ImporteSalarios" id="form5ImporteSalarios" class="form-control" type="number" value="{{isset($registroIncidente->form5ImporteSalarios)?$registroIncidente->form5ImporteSalarios:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5ImporteDaños"> Importe de daños materiales en el centro de trabajo (pesos):</label>
    </div>
    <div class="form-group col">
        <input name="form5ImporteDaños" id="form5ImporteDaños" class="form-control" type="number" value="{{isset($registroIncidente->form5ImporteDaños)?$registroIncidente->form5ImporteDaños:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5Indemnizacion"> Indemnización pagada por:</label>
    </div>
    <div class="form-group col">
        <select name="form5Indemnizacion" id="form5Indemnizacion" class="form-control">
            <option value="">Seleccione..</option>
            <option value="La empresa">La empresa</option>
            <option value="El seguro">El seguro</option>
            <option value="Total permanente">Total permanente</option>
            <option value="No especificado">No especificado</option>
        </select>
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <label for="form5ImporteIndemnizacion"> Importe de indemnización (pesos):</label>
        <input name="form5ImporteIndemnizacion" id="form5ImporteIndemnizacion" class="form-control" type="number" value="{{isset($registroIncidente->form5ImporteIndemnizacion)?$registroIncidente->form5ImporteIndemnizacion:''}}">
    </div>
    <div class="form-group col">
        <label for="form5AumentoPrima"> Aumento en la prima de riesgo de la organización :</label>
        <input name="form5AumentoPrima" id="form5AumentoPrima" class="form-control" type="number" value="{{isset($registroIncidente->form5AumentoPrima)?$registroIncidente->form5AumentoPrima:''}}">
    </div>
    <div class="form-group col">
        <label for="form5Total"> Total del costo:</label>
        <input name="form5Total" id="form5Total" class="form-control" type="number" value="{{isset($registroIncidente->form5Total)?$registroIncidente->form5Total:''}}">
    </div>
</div>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorCostoDir">Costos Directos</h3>
    </div>
</div>

<table class="table" style="color: black;">
    <thead>
        <tr>
            <th scope="row">
                <label for="form5CostosDirectos">Costos directos:</label>
            </th>
            <th scope="col">
                <input readonly="readonly" name="form5CostosDirectos" id="form5CostosDirectos" class="form-control" type="number" onchange="" value="{{isset($registroIncidente->form5CostosDirectos)?$registroIncidente->form5CostosDirectos:''}}">
            </th>
        </tr>
    </thead>
    <tbody>
        <tr style="text-align: center;">
            <th scope="row">Costos del trabajador</th>
            <td>Días</td>
            <td>Costos</td>
            <td>Costos del trabajador</td>
        </tr>
        <tr>
            <th scope="row">Tiempo que dejó de laborar</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" name="form5CostosDirectosTiempoDias" id="form5CostosDirectosTiempoDias" class="form-control" type="number" onkeyup="SumarTiempoDeLaborar(); cambioheader();" value="{{isset($registroIncidente->form5CostosDirectosTiempoDias)?$registroIncidente->form5CostosDirectosTiempoDias:''}}">
            </td>
            <td>
                <input name="form5CostosDirectosTiempoCostos" id="form5CostosDirectosTiempoCostos" class="form-control" type="number" onkeyup="SumarTiempoDeLaborar(); cambioheader();" value="{{isset($registroIncidente->form5CostosDirectosTiempoCostos)?$registroIncidente->form5CostosDirectosTiempoCostos:''}}">
            </td>
            <td>
                <input name="form5CostosDirectosTiempoTrabajador" id="form5CostosDirectosTiempoTrabajador" class="form-control" type="number" readonly="readonly" value="{{isset($registroIncidente->form5CostosDirectosTiempoTrabajador)?$registroIncidente->form5CostosDirectosTiempoTrabajador:''}}">
            </td>
        </tr>
        <tr>
            <th scope="row">Incapacidad temporal</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosDirectosIncapacidadDias)?$registroIncidente->form5CostosDirectosIncapacidadDias:''}}" name="form5CostosDirectosIncapacidadDias" id="form5CostosDirectosIncapacidadDias" class="form-control" type="number" onkeyup="SumarIncapacidadTemporal(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosIncapacidadCostos)?$registroIncidente->form5CostosDirectosIncapacidadCostos:''}}" name="form5CostosDirectosIncapacidadCostos" id="form5CostosDirectosIncapacidadCostos" class="form-control" type="number" onkeyup="SumarIncapacidadTemporal(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosIncapacidadTrabajador)?$registroIncidente->form5CostosDirectosIncapacidadTrabajador:''}}" name="form5CostosDirectosIncapacidadTrabajador" id="form5CostosDirectosIncapacidadTrabajador" class="form-control" type="number" readonly="readonly">
            </td>
        </tr>
        <tr>
            <th scope="row">Indemnización IPP/IPT</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosDirectosIndemnizacionDias)?$registroIncidente->form5CostosDirectosIndemnizacionDias:''}}" name="form5CostosDirectosIndemnizacionDias" id="form5CostosDirectosIndemnizacionDias" class="form-control" type="number" onkeyup="SumarIndemnizacionIpp(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosIndemnizacionCostos)?$registroIncidente->form5CostosDirectosIndemnizacionCostos:''}}" name="form5CostosDirectosIndemnizacionCostos" id="form5CostosDirectosIndemnizacionCostos" class="form-control" type="number" onkeyup="SumarIndemnizacionIpp(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosIndemnizacionTrabajador)?$registroIncidente->form5CostosDirectosIndemnizacionTrabajador:''}}" name="form5CostosDirectosIndemnizacionTrabajador" id="form5CostosDirectosIndemnizacionTrabajador" class="form-control" type="number" readonly="readonly">
            </td>
        </tr>
        <tr>
            <th scope="row">Otros Gastos</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosDirectosOtrosDias)?$registroIncidente->form5CostosDirectosOtrosDias:''}}" name="form5CostosDirectosOtrosDias" id="form5CostosDirectosOtrosDias" class="form-control" type="number" onkeyup="SumarOtrosGastos(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosOtrosCostos)?$registroIncidente->form5CostosDirectosOtrosCostos:''}}" name="form5CostosDirectosOtrosCostos" id="form5CostosDirectosOtrosCostos" class="form-control" type="number" onkeyup="SumarOtrosGastos(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosOtrosTrabajador)?$registroIncidente->form5CostosDirectosOtrosTrabajador:''}}" name="form5CostosDirectosOtrosTrabajador" id="form5CostosDirectosOtrosTrabajador" class="form-control" type="number" readonly="readonly">
            </td>
        </tr>
        <script>

        </script>
        <tr>
            <td></td>
            <td></td>
            <th scope="row" style="color: #fff; font-size: 20px;">
                Subtotal
            </th>
            <td>
                <input value="{{isset($registroIncidente->form5CostosDirectosTotal)?$registroIncidente->form5CostosDirectosTotal:''}}" name="form5CostosDirectosTotal" id="form5CostosDirectosTotal" class="form-control" type="number" readonly="readonly">
            </td>
        </tr>
    </tbody>
</table>

<br>

<table class="table" style="color: black;">
    <tr style="text-align: center;">
        <th scope="row">Costos en caso de muerte por RT</th>
        <td>Días</td>
        <td>Costos</td>
        <td>Costos del trabajados</td>
    </tr>
    <tr>
        <th scope="row">Indemnización contractual</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosDirectosIndemnizacionMuerteDias)?$registroIncidente->form5CostosDirectosIndemnizacionMuerteDias:''}}" name="form5CostosDirectosIndemnizacionMuerteDias" id="form5CostosDirectosIndemnizacionMuerteDias" class="form-control" type="number" onkeyup="SumarIndemnizacion(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosIndemnizacionMuerteCostos)?$registroIncidente->form5CostosDirectosIndemnizacionMuerteCostos:''}}" name="form5CostosDirectosIndemnizacionMuerteCostos" id="form5CostosDirectosIndemnizacionMuerteCostos" class="form-control" type="number" onkeyup="SumarIndemnizacion(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosIndemnizacionMuerteTrabajador)?$registroIncidente->form5CostosDirectosIndemnizacionMuerteTrabajador:''}}" name="form5CostosDirectosIndemnizacionMuerteTrabajador" id="form5CostosDirectosIndemnizacionMuerteTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Gastos funerarios</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosDirectosGastosFunerariosDias)?$registroIncidente->form5CostosDirectosGastosFunerariosDias:''}}" name="form5CostosDirectosGastosFunerariosDias" id="form5CostosDirectosGastosFunerariosDias" class="form-control" type="number" onkeyup="SumarFunerarios(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosGastosFunerariosCostos)?$registroIncidente->form5CostosDirectosGastosFunerariosCostos:''}}" name="form5CostosDirectosGastosFunerariosCostos" id="form5CostosDirectosGastosFunerariosCostos" class="form-control" type="number" onkeyup="SumarFunerarios(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosGastosFunerariosTrabajador)?$registroIncidente->form5CostosDirectosGastosFunerariosTrabajador:''}}" name="form5CostosDirectosGastosFunerariosTrabajador" id="form5CostosDirectosGastosFunerariosTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <script>

    </script>
    <tr>
        <th scope="row">Otros gastos</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosDirectosOtrosMuerteDias)?$registroIncidente->form5CostosDirectosOtrosMuerteDias:''}}" name="form5CostosDirectosOtrosMuerteDias" id="form5CostosDirectosOtrosMuerteDias" class="form-control" type="number" onkeyup="SumarOtros(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosOtrosMuerteCostos)?$registroIncidente->form5CostosDirectosOtrosMuerteCostos:''}}" name="form5CostosDirectosOtrosMuerteCostos" id="form5CostosDirectosOtrosMuerteCostos" class="form-control" type="number" onkeyup="SumarOtros(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosOtrosMuerteTrabajador)?$registroIncidente->form5CostosDirectosOtrosMuerteTrabajador:''}}" name="form5CostosDirectosOtrosMuerteTrabajador" id="form5CostosDirectosOtrosMuerteTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <th scope="row" style="color: #000; font-size: 20px;">Subtotal</th>
        <td>
            <input value="{{isset($registroIncidente->form5CostosDirectosTotalMuerte)?$registroIncidente->form5CostosDirectosTotalMuerte:''}}" name="form5CostosDirectosTotalMuerte" id="form5CostosDirectosTotalMuerte" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
</table>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorCostoInd">Costos Indirectos</h3>
    </div>
</div>

<div class="divForm form-group">
    <div class="row mt-2">
        <div class="form-group col-4">
            <label for="form5CostosIndirectos">Costos indirectos: </label>
            <input value="{{isset($registroIncidente->form5CostosIndirectos)?$registroIncidente->form5CostosIndirectos:''}}" name="form5CostosIndirectos" id="form5CostosIndirectos" class="form-control" type="number" readonly="readonly">
        </div>
    </div>
</div>

<br>

<table class="table" style="color: black;">
    <tr style="text-align: center;">
        <th scope="row">Costos de Aseguranza</th>
        <td>Cantidad</td>
        <td>Costos</td>
        <td>Costo</td>
    </tr>
    <tr>
        <th scope="row">Maquinaria</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosIndirectosMaquinariaDias)?$registroIncidente->form5CostosIndirectosMaquinariaDias:''}}" name="form5CostosIndirectosMaquinariaDias" id="form5CostosIndirectosMaquinariaDias" class="form-control" type="number" onkeyup="SumarMaquinariaAseguranza(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosMaquinariaCostos)?$registroIncidente->form5CostosIndirectosMaquinariaCostos:''}}" name="form5CostosIndirectosMaquinariaCostos" id="form5CostosIndirectosMaquinariaCostos" class="form-control" type="number" onkeyup="SumarMaquinariaAseguranza(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosMaquinariaTrabajador)?$registroIncidente->form5CostosIndirectosMaquinariaTrabajador:''}}" name="form5CostosIndirectosMaquinariaTrabajador" id="form5CostosIndirectosMaquinariaTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Equipo</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosIndirectosEquipoDias)?$registroIncidente->form5CostosIndirectosEquipoDias:''}}" name="form5CostosIndirectosEquipoDias" id="form5CostosIndirectosEquipoDias" class="form-control" type="number" onkeyup="SumarEquipo(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosEquipoCostos)?$registroIncidente->form5CostosIndirectosEquipoCostos:''}}" name="form5CostosIndirectosEquipoCostos" id="form5CostosIndirectosEquipoCostos" class="form-control" type="number" onkeyup="SumarEquipo(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosEquipoTrabajador)?$registroIncidente->form5CostosIndirectosEquipoTrabajador:''}}" name="form5CostosIndirectosEquipoTrabajador" id="form5CostosIndirectosEquipoTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Producto</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosIndirectosProductoDias)?$registroIncidente->form5CostosIndirectosProductoDias:''}}" name="form5CostosIndirectosProductoDias" id="form5CostosIndirectosProductoDias" class="form-control" type="number" onkeyup="SumarProducto(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosProductoCostos)?$registroIncidente->form5CostosIndirectosProductoCostos:''}}" name="form5CostosIndirectosProductoCostos" id="form5CostosIndirectosProductoCostos" class="form-control" type="number" onkeyup="SumarProducto(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosProductoTrabajador)?$registroIncidente->form5CostosIndirectosProductoTrabajador:''}}" name="form5CostosIndirectosProductoTrabajador" id="form5CostosIndirectosProductoTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <th scope="row" style="color: #000; font-size: 20px;">Subtotal</th>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosSubTotalAseguranza)?$registroIncidente->form5CostosIndirectosSubTotalAseguranza:''}}" name="form5CostosIndirectosSubTotalAseguranza" id="form5CostosIndirectosSubTotalAseguranza" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
</table>

<br>

<table class="table" style="color: black;">
    <tr style="text-align: center;">
        <th scope="row">Costos medidas correctivas</th>
        <td>Cantidad</td>
        <td>Costos</td>
        <td>Costo</td>
    </tr>
    <tr>
        <th scope="row">Recursos humanos</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosIndirectosRecursosHumanosDias)?$registroIncidente->form5CostosIndirectosRecursosHumanosDias:''}}" name="form5CostosIndirectosRecursosHumanosDias" id="form5CostosIndirectosRecursosHumanosDias" class="form-control" type="number" onkeyup="SumarMaquinaria(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosRecursosHumanosCostos)?$registroIncidente->form5CostosIndirectosRecursosHumanosCostos:''}}" name="form5CostosIndirectosRecursosHumanosCostos" id="form5CostosIndirectosRecursosHumanosCostos" class="form-control" type="number" onkeyup="SumarMaquinaria(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosRecursosHumanosTrabajador)?$registroIncidente->form5CostosIndirectosRecursosHumanosTrabajador:''}}" name="form5CostosIndirectosRecursosHumanosTrabajador" id="form5CostosIndirectosRecursosHumanosTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Materiales</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosIndirectosMaterialesDias)?$registroIncidente->form5CostosIndirectosMaterialesDias:''}}" name="form5CostosIndirectosMaterialesDias" id="form5CostosIndirectosMaterialesDias" class="form-control" type="number" onkeyup="SumarMateriales(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosMaterialesCostos)?$registroIncidente->form5CostosIndirectosMaterialesCostos:''}}" name="form5CostosIndirectosMaterialesCostos" id="form5CostosIndirectosMaterialesCostos" class="form-control" type="number" onkeyup="SumarMateriales(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosMaterialesTrabajador)?$registroIncidente->form5CostosIndirectosMaterialesTrabajador:''}}" name="form5CostosIndirectosMaterialesTrabajador" id="form5CostosIndirectosMaterialesTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Equipos</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroIncidente->form5CostosIndirectosEquiposDias)?$registroIncidente->form5CostosIndirectosEquiposDias:''}}" name="form5CostosIndirectosEquiposDias" id="form5CostosIndirectosEquiposDias" class="form-control" type="number" onkeyup="SumarEquipos(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosEquiposCostos)?$registroIncidente->form5CostosIndirectosEquiposCostos:''}}" name="form5CostosIndirectosEquiposCostos" id="form5CostosIndirectosEquiposCostos" class="form-control" type="number" onkeyup="SumarEquipos(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosEquiposTrabajador)?$registroIncidente->form5CostosIndirectosEquiposTrabajador:''}}" name="form5CostosIndirectosEquiposTrabajador" id="form5CostosIndirectosEquiposTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <th scope="row" style="color: #000; font-size: 20px;">Subtotal</th>
        <td>
            <input value="{{isset($registroIncidente->form5CostosIndirectosSubTotalCorrectivas)?$registroIncidente->form5CostosIndirectosSubTotalCorrectivas:''}}" name="form5CostosIndirectosSubTotalCorrectivas" id="form5CostosIndirectosSubTotalCorrectivas" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
</table>