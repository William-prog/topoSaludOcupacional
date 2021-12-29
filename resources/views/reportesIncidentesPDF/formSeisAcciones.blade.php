@foreach($registro as $dato)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="encabezado">VI. Acciones</td>
    </tr>
    <tr class="subencabezado">
        <td>
            Acciones de ingeniería en el área de trabajo
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Acciones de ingeniería en el área de trabajo: -->
            {{$dato->form6Ingenieria}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Acciones administrativas de mitigación de riesgos
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Acciones administrativas de mitigación de riesgos: -->
            {{$dato->form6Administrativa}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Acciones de Seguimiento integral de salud
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Acciones de Seguimiento integral de salud:: -->
            {{$dato->form6Segumiento}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Medidas de capacitación, formación e información para la mitigación del riesgo
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Medidas de capacitación, formación e información para la mitigación del riesgo: -->
            {{$dato->form6Capacitacion}}
        </td>
    </tr>

</table>
@endforeach