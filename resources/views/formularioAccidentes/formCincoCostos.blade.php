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
        <input name="form5HorasHombresInvolucrado" id="form5HorasHombresInvolucrado" class="form-control" type="number" value="{{isset($registroAccidente->form5HorasHombresInvolucrado)?$registroAccidente->form5HorasHombresInvolucrado:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5HorasHombresProceso">Horas hombre de los procesos con el cliente:</label>
    </div>
    <div class="form-group col">
        <input name="form5HorasHombresProceso" id="form5HorasHombresProceso" class="form-control" type="number" value="{{isset($registroAccidente->form5HorasHombresProceso)?$registroAccidente->form5HorasHombresProceso:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5ImporteSalarios"> Importe de salarios recibidos por el accidentado durante los días que dejó de trabajar: </label>
    </div>
    <div class="form-group col">
        <input name="form5ImporteSalarios" id="form5ImporteSalarios" class="form-control" type="number" value="{{isset($registroAccidente->form5ImporteSalarios)?$registroAccidente->form5ImporteSalarios:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5ImporteDaños"> Importe de daños materiales en el centro de trabajo (pesos):</label>
    </div>
    <div class="form-group col">
        <input name="form5ImporteDaños" id="form5ImporteDaños" class="form-control" type="number" value="{{isset($registroAccidente->form5ImporteDaños)?$registroAccidente->form5ImporteDaños:''}}">
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col-8">
        <label for="form5Indemnizacion"> Indemnización pagada por:</label>
    </div>
    <div class="form-group col">
        <select name="form5Indemnizacion" id="form5Indemnizacion" class="form-control">
            <option value="">Seleccione..</option>
            <option {{ isset($registroAccidente->form5Indemnizacion) == 'La empresa' ? 'selected' : '' }} value="La empresa">La empresa</option>
            <option {{ isset($registroAccidente->form5Indemnizacion) == 'El seguro' ? 'selected' : '' }} value="El seguro">El seguro</option>
            <option {{ isset($registroAccidente->form5Indemnizacion) == 'Total permanente' ? 'selected' : '' }} value="Total permanente">Total permanente</option>
            <option {{ isset($registroAccidente->form5Indemnizacion) == 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
        </select>
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <label for="form5ImporteIndemnizacion"> Importe de indemnización (pesos):</label>
        <input name="form5ImporteIndemnizacion" id="form5ImporteIndemnizacion" class="form-control" type="number" value="{{isset($registroAccidente->form5ImporteIndemnizacion)?$registroAccidente->form5ImporteIndemnizacion:''}}">
    </div>
    <div class="form-group col">
        <label for="form5AumentoPrima"> Aumento en la prima de riesgo de la organización :</label>
        <input name="form5AumentoPrima" id="form5AumentoPrima" class="form-control" type="number" value="{{isset($registroAccidente->form5AumentoPrima)?$registroAccidente->form5AumentoPrima:''}}">
    </div>
    <div class="form-group col">
        <label for="form5Total"> Total del costo:</label>
        <input name="form5Total" id="form5Total" class="form-control" type="number" value="{{isset($registroAccidente->form5Total)?$registroAccidente->form5Total:''}}">
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
                <input readonly="readonly" name="form5CostosDirectos" id="form5CostosDirectos" class="form-control" type="number" onchange="" value="{{isset($registroAccidente->form5CostosDirectos)?$registroAccidente->form5CostosDirectos:''}}">
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
                <input style="width: 50%;" name="form5CostosDirectosTiempoDias" id="form5CostosDirectosTiempoDias" class="form-control" type="number" onkeyup="SumarTiempoDeLaborar(); cambioheader();" value="{{isset($registroAccidente->form5CostosDirectosTiempoDias)?$registroAccidente->form5CostosDirectosTiempoDias:''}}">
            </td>
            <td>
                <input name="form5CostosDirectosTiempoCostos" id="form5CostosDirectosTiempoCostos" class="form-control" type="number" onkeyup="SumarTiempoDeLaborar(); cambioheader();" value="{{isset($registroAccidente->form5CostosDirectosTiempoCostos)?$registroAccidente->form5CostosDirectosTiempoCostos:''}}">
            </td>
            <td>
                <input name="form5CostosDirectosTiempoTrabajador" id="form5CostosDirectosTiempoTrabajador" class="form-control" type="number" readonly="readonly" value="{{isset($registroAccidente->form5CostosDirectosTiempoTrabajador)?$registroAccidente->form5CostosDirectosTiempoTrabajador:''}}">
            </td>
        </tr>
        <tr>
            <th scope="row">Incapacidad temporal</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosDirectosIncapacidadDias)?$registroAccidente->form5CostosDirectosIncapacidadDias:''}}" name="form5CostosDirectosIncapacidadDias" id="form5CostosDirectosIncapacidadDias" class="form-control" type="number" onkeyup="SumarIncapacidadTemporal(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroAccidente->form5CostosDirectosIncapacidadCostos)?$registroAccidente->form5CostosDirectosIncapacidadCostos:''}}" name="form5CostosDirectosIncapacidadCostos" id="form5CostosDirectosIncapacidadCostos" class="form-control" type="number" onkeyup="SumarIncapacidadTemporal(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroAccidente->form5CostosDirectosIncapacidadTrabajador)?$registroAccidente->form5CostosDirectosIncapacidadTrabajador:''}}" name="form5CostosDirectosIncapacidadTrabajador" id="form5CostosDirectosIncapacidadTrabajador" class="form-control" type="number" readonly="readonly">
            </td>
        </tr>
        <tr>
            <th scope="row">Indemnización IPP/IPT</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosDirectosIndemnizacionDias)?$registroAccidente->form5CostosDirectosIndemnizacionDias:''}}" name="form5CostosDirectosIndemnizacionDias" id="form5CostosDirectosIndemnizacionDias" class="form-control" type="number" onkeyup="SumarIndemnizacionIpp(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroAccidente->form5CostosDirectosIndemnizacionCostos)?$registroAccidente->form5CostosDirectosIndemnizacionCostos:''}}" name="form5CostosDirectosIndemnizacionCostos" id="form5CostosDirectosIndemnizacionCostos" class="form-control" type="number" onkeyup="SumarIndemnizacionIpp(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroAccidente->form5CostosDirectosIndemnizacionTrabajador)?$registroAccidente->form5CostosDirectosIndemnizacionTrabajador:''}}" name="form5CostosDirectosIndemnizacionTrabajador" id="form5CostosDirectosIndemnizacionTrabajador" class="form-control" type="number" readonly="readonly">
            </td>
        </tr>
        <tr>
            <th scope="row">Otros Gastos</th>
            <td class="d-flex justify-content-center align-items-center">
                <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosDirectosOtrosDias)?$registroAccidente->form5CostosDirectosOtrosDias:''}}" name="form5CostosDirectosOtrosDias" id="form5CostosDirectosOtrosDias" class="form-control" type="number" onkeyup="SumarOtrosGastos(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroAccidente->form5CostosDirectosOtrosCostos)?$registroAccidente->form5CostosDirectosOtrosCostos:''}}" name="form5CostosDirectosOtrosCostos" id="form5CostosDirectosOtrosCostos" class="form-control" type="number" onkeyup="SumarOtrosGastos(); cambioheader();">
            </td>
            <td>
                <input value="{{isset($registroAccidente->form5CostosDirectosOtrosTrabajador)?$registroAccidente->form5CostosDirectosOtrosTrabajador:''}}" name="form5CostosDirectosOtrosTrabajador" id="form5CostosDirectosOtrosTrabajador" class="form-control" type="number" readonly="readonly">
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
                <input value="{{isset($registroAccidente->form5CostosDirectosTotal)?$registroAccidente->form5CostosDirectosTotal:''}}" name="form5CostosDirectosTotal" id="form5CostosDirectosTotal" class="form-control" type="number" readonly="readonly">
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
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosDirectosIndemnizacionMuerteDias)?$registroAccidente->form5CostosDirectosIndemnizacionMuerteDias:''}}" name="form5CostosDirectosIndemnizacionMuerteDias" id="form5CostosDirectosIndemnizacionMuerteDias" class="form-control" type="number" onkeyup="SumarIndemnizacion(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosIndemnizacionMuerteCostos)?$registroAccidente->form5CostosDirectosIndemnizacionMuerteCostos:''}}" name="form5CostosDirectosIndemnizacionMuerteCostos" id="form5CostosDirectosIndemnizacionMuerteCostos" class="form-control" type="number" onkeyup="SumarIndemnizacion(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosIndemnizacionMuerteTrabajador)?$registroAccidente->form5CostosDirectosIndemnizacionMuerteTrabajador:''}}" name="form5CostosDirectosIndemnizacionMuerteTrabajador" id="form5CostosDirectosIndemnizacionMuerteTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Gastos funerarios</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosDirectosGastosFunerariosDias)?$registroAccidente->form5CostosDirectosGastosFunerariosDias:''}}" name="form5CostosDirectosGastosFunerariosDias" id="form5CostosDirectosGastosFunerariosDias" class="form-control" type="number" onkeyup="SumarFunerarios(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosGastosFunerariosCostos)?$registroAccidente->form5CostosDirectosGastosFunerariosCostos:''}}" name="form5CostosDirectosGastosFunerariosCostos" id="form5CostosDirectosGastosFunerariosCostos" class="form-control" type="number" onkeyup="SumarFunerarios(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosGastosFunerariosTrabajador)?$registroAccidente->form5CostosDirectosGastosFunerariosTrabajador:''}}" name="form5CostosDirectosGastosFunerariosTrabajador" id="form5CostosDirectosGastosFunerariosTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <script>

    </script>
    <tr>
        <th scope="row">Otros gastos</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosDirectosOtrosMuerteDias)?$registroAccidente->form5CostosDirectosOtrosMuerteDias:''}}" name="form5CostosDirectosOtrosMuerteDias" id="form5CostosDirectosOtrosMuerteDias" class="form-control" type="number" onkeyup="SumarOtros(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosOtrosMuerteCostos)?$registroAccidente->form5CostosDirectosOtrosMuerteCostos:''}}" name="form5CostosDirectosOtrosMuerteCostos" id="form5CostosDirectosOtrosMuerteCostos" class="form-control" type="number" onkeyup="SumarOtros(); cambioheader();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosOtrosMuerteTrabajador)?$registroAccidente->form5CostosDirectosOtrosMuerteTrabajador:''}}" name="form5CostosDirectosOtrosMuerteTrabajador" id="form5CostosDirectosOtrosMuerteTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <th scope="row" style="color: #000; font-size: 20px;">Subtotal</th>
        <td>
            <input value="{{isset($registroAccidente->form5CostosDirectosTotalMuerte)?$registroAccidente->form5CostosDirectosTotalMuerte:''}}" name="form5CostosDirectosTotalMuerte" id="form5CostosDirectosTotalMuerte" class="form-control" type="number" readonly="readonly">
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
            <input value="{{isset($registroAccidente->form5CostosIndirectos)?$registroAccidente->form5CostosIndirectos:''}}" name="form5CostosIndirectos" id="form5CostosIndirectos" class="form-control" type="number" readonly="readonly">
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
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosIndirectosMaquinariaDias)?$registroAccidente->form5CostosIndirectosMaquinariaDias:''}}" name="form5CostosIndirectosMaquinariaDias" id="form5CostosIndirectosMaquinariaDias" class="form-control" type="number" onkeyup="SumarMaquinariaAseguranza(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosMaquinariaCostos)?$registroAccidente->form5CostosIndirectosMaquinariaCostos:''}}" name="form5CostosIndirectosMaquinariaCostos" id="form5CostosIndirectosMaquinariaCostos" class="form-control" type="number" onkeyup="SumarMaquinariaAseguranza(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosMaquinariaTrabajador)?$registroAccidente->form5CostosIndirectosMaquinariaTrabajador:''}}" name="form5CostosIndirectosMaquinariaTrabajador" id="form5CostosIndirectosMaquinariaTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Equipo</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosIndirectosEquipoDias)?$registroAccidente->form5CostosIndirectosEquipoDias:''}}" name="form5CostosIndirectosEquipoDias" id="form5CostosIndirectosEquipoDias" class="form-control" type="number" onkeyup="SumarEquipo(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosEquipoCostos)?$registroAccidente->form5CostosIndirectosEquipoCostos:''}}" name="form5CostosIndirectosEquipoCostos" id="form5CostosIndirectosEquipoCostos" class="form-control" type="number" onkeyup="SumarEquipo(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosEquipoTrabajador)?$registroAccidente->form5CostosIndirectosEquipoTrabajador:''}}" name="form5CostosIndirectosEquipoTrabajador" id="form5CostosIndirectosEquipoTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Producto</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosIndirectosProductoDias)?$registroAccidente->form5CostosIndirectosProductoDias:''}}" name="form5CostosIndirectosProductoDias" id="form5CostosIndirectosProductoDias" class="form-control" type="number" onkeyup="SumarProducto(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosProductoCostos)?$registroAccidente->form5CostosIndirectosProductoCostos:''}}" name="form5CostosIndirectosProductoCostos" id="form5CostosIndirectosProductoCostos" class="form-control" type="number" onkeyup="SumarProducto(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosProductoTrabajador)?$registroAccidente->form5CostosIndirectosProductoTrabajador:''}}" name="form5CostosIndirectosProductoTrabajador" id="form5CostosIndirectosProductoTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <th scope="row" style="color: #000; font-size: 20px;">Subtotal</th>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosSubTotalAseguranza)?$registroAccidente->form5CostosIndirectosSubTotalAseguranza:''}}" name="form5CostosIndirectosSubTotalAseguranza" id="form5CostosIndirectosSubTotalAseguranza" class="form-control" type="number" readonly="readonly">
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
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosIndirectosRecursosHumanosDias)?$registroAccidente->form5CostosIndirectosRecursosHumanosDias:''}}" name="form5CostosIndirectosRecursosHumanosDias" id="form5CostosIndirectosRecursosHumanosDias" class="form-control" type="number" onkeyup="SumarMaquinaria(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosRecursosHumanosCostos)?$registroAccidente->form5CostosIndirectosRecursosHumanosCostos:''}}" name="form5CostosIndirectosRecursosHumanosCostos" id="form5CostosIndirectosRecursosHumanosCostos" class="form-control" type="number" onkeyup="SumarMaquinaria(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosRecursosHumanosTrabajador)?$registroAccidente->form5CostosIndirectosRecursosHumanosTrabajador:''}}" name="form5CostosIndirectosRecursosHumanosTrabajador" id="form5CostosIndirectosRecursosHumanosTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Materiales</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosIndirectosMaterialesDias)?$registroAccidente->form5CostosIndirectosMaterialesDias:''}}" name="form5CostosIndirectosMaterialesDias" id="form5CostosIndirectosMaterialesDias" class="form-control" type="number" onkeyup="SumarMateriales(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosMaterialesCostos)?$registroAccidente->form5CostosIndirectosMaterialesCostos:''}}" name="form5CostosIndirectosMaterialesCostos" id="form5CostosIndirectosMaterialesCostos" class="form-control" type="number" onkeyup="SumarMateriales(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosMaterialesTrabajador)?$registroAccidente->form5CostosIndirectosMaterialesTrabajador:''}}" name="form5CostosIndirectosMaterialesTrabajador" id="form5CostosIndirectosMaterialesTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <th scope="row">Equipos</th>
        <td class="d-flex justify-content-center align-items-center">
            <input style="width: 50%;" value="{{isset($registroAccidente->form5CostosIndirectosEquiposDias)?$registroAccidente->form5CostosIndirectosEquiposDias:''}}" name="form5CostosIndirectosEquiposDias" id="form5CostosIndirectosEquiposDias" class="form-control" type="number" onkeyup="SumarEquipos(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosEquiposCostos)?$registroAccidente->form5CostosIndirectosEquiposCostos:''}}" name="form5CostosIndirectosEquiposCostos" id="form5CostosIndirectosEquiposCostos" class="form-control" type="number" onkeyup="SumarEquipos(); cambioheaderindi();">
        </td>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosEquiposTrabajador)?$registroAccidente->form5CostosIndirectosEquiposTrabajador:''}}" name="form5CostosIndirectosEquiposTrabajador" id="form5CostosIndirectosEquiposTrabajador" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <th scope="row" style="color: #000; font-size: 20px;">Subtotal</th>
        <td>
            <input value="{{isset($registroAccidente->form5CostosIndirectosSubTotalCorrectivas)?$registroAccidente->form5CostosIndirectosSubTotalCorrectivas:''}}" name="form5CostosIndirectosSubTotalCorrectivas" id="form5CostosIndirectosSubTotalCorrectivas" class="form-control" type="number" readonly="readonly">
        </td>
    </tr>
</table>