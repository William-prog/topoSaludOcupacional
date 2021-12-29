@foreach($registro as $dato)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="encabezado" colspan="2">IV. Daño</td>
    </tr>
    <tr colspan="1" class="subencabezado">
        <td>
            Tipo de incapacidad o consecuencia
        </td>
        <td>
            
        </td>
    </tr>
    <tr colspan="1" class="info">
        <td>
            <!-- Causa -->
            {{$dato->form4TipoIncapacidad}}
        </td>
        <td>
            
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Diagnóstico inicial
        </td>
        <td>
            Tratamiento inicial:
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Condiciones inseguras -->
            {{$dato->form4DiagnosticoInicial}}
        </td>
        <td>
            <!-- Factor personal de inseguridad -->
            {{$dato->form4TratamientoInicial}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Diagnóstico emitido por la dependencia /Medico/Naturaleza de la lesión:
        </td>
        <td>
            Tratamiento emitido por la dependencia /Medico:
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Condiciones inseguras -->
            {{$dato->form4DiagnosticoDependencia}}
        </td>
        <td>
            <!-- Factor personal de inseguridad -->
            {{$dato->form4TratamientoDependencia}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Días de incapacidad:
        </td>
        <td>
            Importe estimado de la curación:
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Condiciones inseguras -->
            {{$dato->form4DiasIncapacidad}}
        </td>
        <td>
            <!-- Factor personal de inseguridad -->
            {{$dato->form4ImporteCuracion}}
        </td>
    </tr>
</table>

@endforeach