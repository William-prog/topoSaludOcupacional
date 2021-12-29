@foreach($registro as $dato)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="encabezado" colspan="2">I. Lugar y tiempo</td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Lugar
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Lugar del incidente -->
            {{$dato->form2LugarEvento}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Fecha en que ocurrió el accidente
        </td>
        <td>
            Hora exacta en que ocurrió el accidente (hh:mm)
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Fecha en que ocurrió el accidente -->
            <?php
                date_default_timezone_set("America/Mexico_City");
                setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
                $data['Fecha'] = $dato->form2Fecha;
                $marca = strtotime($data['Fecha']);
                ?>
                <?= strftime('%e/%B/%Y', $marca) ?>
        </td>
        <td>
            <!-- Hora exacta en que ocurrió el accidente (hh:mm)-->
            {{$dato->form2Hora}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Turno durante el cual ocurrió
        </td>
        <td>
            Horas continuas de trabajo antes del evento
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Turno durante el cual ocurrió el accidente -->
            {{$dato->form2Turno}}
        </td>
        <td>
            <!-- Horas continuas de trabajo antes del accidente-->
            {{$dato->form2HorasTrabajo}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Lugar donde recibió atención médica el accidentado:
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Especificacion del lugar -->
            {{$dato->form2LugarAtencion}}
        </td>
    </tr>
</table>
@endforeach