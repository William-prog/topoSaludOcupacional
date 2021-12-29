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

@include('reportesAccidentesPDF.encabezado')
<br>
@include('reportesAccidentesPDF.formUnoDatosGenerales')
<br>
@include('reportesAccidentesPDF.formDosLugarYTiempo')
<br>
@include('reportesAccidentesPDF.formTresCaracteristicas')
<br>
@include('reportesAccidentesPDF.formCuatroDaño')
<br>
@include('reportesAccidentesPDF.formCincoCostos')
<br>