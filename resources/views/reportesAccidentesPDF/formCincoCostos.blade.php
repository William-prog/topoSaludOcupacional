@foreach($registro as $dato)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="encabezado" colspan="2">V. Analisis de costos</td>
    </tr>
    <tr class="subencabezado">
        <td>
            Horas hombre de los involucrados en la investigacion
        </td>
        <td>
            Horas hombre de los procesos con el cliente
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Horas hombre de los involucrados en la investigacion: -->
            {{$dato->form5HorasHombresInvolucrado}}
        </td>
        <td>
            <!-- Horas hombre de los procesos con el cliente -->
            {{$dato->form5HorasHombresProceso}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Importe de salarios recibidos por el accidentado durante los días que dejo de trabajar
        </td>
        <td>
            Importe de daños materiales en el centro de trabajo (pesos)
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Importe de salarios recibidos por el accidentado durante los días que dejo de trabajar -->
            {{$dato->form5ImporteSalarios}}
        </td>
        <td>
            <!-- Importe de daños materiales en el centro de trabajo (pesos) -->
            {{$dato->form5ImporteDaños}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Indemnizacion
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Indemnización pagada por
        </td>
        <td>
            Importe de indemnización (pesos)
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Indemnización pagada por -->
            {{$dato->form5Indemnizacion}}
        </td>
        <td>
            <!-- Importe de indemnización (pesos)-->
            {{$dato->form5ImporteIndemnizacion}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Aumento en la prima de riesgo de la organización
        </td>
        <td>
            Importe de indemnización (pesos)
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Aumento en la prima de riesgo de la organización -->
            {{$dato->form5AumentoPrima}}
        </td>
        <td>
            <!-- Total del costo -->
            {{$dato->form5Total}}
        </td>
    </tr>
</table>
@endforeach