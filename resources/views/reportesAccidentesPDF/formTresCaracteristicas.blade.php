@foreach($registro as $dato)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="encabezado" colspan="2">IV. Características</td>
    </tr>
    <tr class="subencabezado">
        <td>
            Causa
        </td>
        <td>
            Acto inseguro
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Causa -->
            {{$dato->form3TipoRiesgo}}
        </td>
        <td>
            <!-- Acto inseguro-->
            {{$dato->form3ActoInseguro}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Condiciones inseguras
        </td>
        <td>
            Factor personal de inseguridad
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Condiciones inseguras -->
            {{$dato->form3CondicionesInseguras}}
        </td>
        <td>
            <!-- Factor personal de inseguridad -->
            {{$dato->form3FactorPersonal}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Estado en el que se encontraba el involucrado
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Estado en el que se encontraba el involucrado -->
            {{$dato->form3Estado}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Equipo de protección que usaba el trabajador al momento
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Equipo de protección que usaba el trabajador al momento  -->
            {{$dato->form3EquipoProteccion}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Describa la forma en que ocurrió el suceso
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Describa la forma en que ocurrió el suceso  -->
            {{$dato->form3DescribaCausa}}
        </td>
    </tr>
</table>

@endforeach