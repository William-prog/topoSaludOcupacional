<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10.5px;
        font-weight: normal;
    }

    .sinBordeD {
        border-right: 0px;
    }

    .sinBordeI {
        border-left: 0px;
    }

    .encabezado {
        font-size: 12px;
        font-weight: bold;
        text-align: center;
    }

    .subencabezado {
        background-color: #C6C6C6;
        text-align: left;
    }

    .info {
        text-align: left;
    }
</style>

@include('reportesIncidentesPDF.encabezado')
<br>
@include('reportesIncidentesPDF.formUnoDatosGenerales')
<br>
@include('reportesIncidentesPDF.formDosLugarYTiempo')
<br>
@include('reportesIncidentesPDF.formTresCaracteristicas')
<br>
@include('reportesIncidentesPDF.formCuatroDaño')
<br>
@include('reportesIncidentesPDF.formCincoCostos')
<br>