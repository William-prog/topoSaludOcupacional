@foreach($registro as $dato)
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="encabezado" colspan="4">II. Datos generales del personal involucrado</td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            RFC
        </td>
        <td colspan="2">
            CURP
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- RFC -->
            {{$dato->form1Curp}}
        </td>
        <td colspan="2">
            <!-- CURP -->
            {{$dato->form1Rfc}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Nombre(s)
        </td>
        <td>
            Primer apellido
        </td>
        <td colspan="2">
            Segundo apellido
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Nombre(s) -->
            {{$dato->form1Nombre}}
        </td>
        <td>
            <!-- Primer apellido -->
            {{$dato->form1PrimerApellido}}
        </td>
        <td colspan="2">
            <!-- Segundo apellido -->
            {{$dato->form1SegundoApellido}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Código postal
        </td>
        <td>
            Calle
        </td>
        <td colspan="2">
            No. exterior
        </td>
    </tr>
    <tr class="info">
        <!-- Código postal -->
        <td>
            {{$dato->form1CodigoPostal}}
        </td>
        <!--Calle -->
        <td>
            {{$dato->form1Calle}}
        </td>
        <!-- No. exterior -->
        <td colspan="2">
            {{$dato->form1Numero}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Colonia
        </td>
        <td>
            Municipio o Alcaldía
        </td>
        <td colspan="2">
            Entidad Federativa
        </td>
    </tr>
    <tr class="info">
        <!-- Colonia -->
        <td>
            {{$dato->form1Colonia}}
        </td>
        <!-- Municipio o Alcaldía -->
        <td>
            {{$dato->form1Municipio}}
        </td>
        <!-- Entidad Federativa -->
        <td colspan="2">
            {{$dato->form1MunicipioEntidadFederativa}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td>
            Sexo
        </td>
        <td>
            Edad
        </td>
        <td colspan="2">
            Teléfono (con clave lada)
        </td>
    </tr>
    <tr class="info">
        <td>
            <!-- Sexo -->
            {{$dato->form1Genero}}
        </td>
        <td>
            <!-- Edad -->
            {{$dato->form1Edad}}
        </td>
        <td colspan="2">
            <!-- Teléfono (con clave lada) -->
            {{$dato->form1Telefono}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Situación conyugal
        </td>
        <td colspan="2">
            Nivel máximo de estudios
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Situación conyugal -->
            {{$dato->form1EstadoCivil}}
        </td>
        <td colspan="2">
            <!-- Nivel máximo de estudios -->
            {{$dato->form1NivelEstudios}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2">
            Número de personas que dependen económicamente del trabajador
        </td>
        <td colspan="2">
            Clase de trabajador involucrado
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Número de personas que dependen económicamente del trabajador -->
            {{$dato->form1PersonasDependen}}
        </td>
        <td colspan="2">
            <!-- Clase de trabajador involucrado -->
            {{$dato->form1ClaseTrabajador}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2" style="width: 25%;">
            Antigüedad en el puesto (años, meses)
        </td>
        <td colspan="2" style="width: 25%;">
            Antigüedad en la empresa (años, meses)
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Antigüedad en el puesto (años, meses) -->
            {{$dato->form1AntiguedadPuesto}}
        </td>
        <td colspan="2">
            <!-- Antigüedad en la empresa (años, meses) -->
            {{$dato->form1AntiguedadEmpresa}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2" style="width: 50%;">
            Ocupación o puesto habitual del personal involucrado
        </td>
        <td colspan="2" style="width: 50%;">
            Ocupación o puesto que desempeñaban durante el incidente
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Ocupación o puesto habitual del personal involucrado -->
            {{$dato->form1OcupacionHabitual}}
        </td>
        <td colspan="2">
            <!-- Ocupación o puesto que desempeñaban durante el incidente -->
            {{$dato->form1OcupacionDesempeñaba}}
        </td>
    </tr>
    <tr class="subencabezado">
        <td colspan="2" style="width: 25%;">
            Institución de seguridad social
        </td>
        <td style="width: 25%;">
            Número de afiliación
        </td>
        <td style="width: 25%;">
            Salario diario
        </td>
    </tr>
    <tr class="info">
        <td colspan="2">
            <!-- Institución de seguridad social -->
            {{$dato->form1NumeroSeguro}}
        </td>
        <td>
            <!-- Número de afiliación -->
            {{$dato->form1NumeroAfiliacion}}
        </td>
        <td>
            <!-- Salario diario -->
            {{$dato->form1SalarioMensual}}
        </td>
    </tr>
</table>
@endforeach