@extends('layouts.app')
@section('content')
<div class="container">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js" integrity="sha256-D2tkh/3EROq+XuDEmgxOLW1oNxf0rLNlOwsPIUX+co4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@1.1.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>


    <style>
        .cardManteniemito:hover {
            background-color: #3D3D3D;
            -webkit-transition: background-color 500ms linear;
            -ms-transition: background-color 500ms linear;
            transition: background-color 500ms linear;

            border: 4 px solid rgba(255, 119, 31, 80%);

            color: white;
        }
    </style>

    <div class="row">
        <!-- For demo purpose -->
        <div class="col-lg-12 mx-auto mb-5 text-black text-center">
            <h1 class="display-4">Estadisticas</h1>
        </div>
        <!-- END -->

        <div class="col-xl-6 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">Categoria</h2>
                <canvas id="Categoria" width="400" height="200"></canvas>
                <script>
                    const jsonAccidente = <?php echo json_encode($registroAccidente) ?>;
                    const jsonIncidente = <?php echo json_encode($registroIncidente) ?>;
                </script>

                <script>
                    const ctxCategoria = document.getElementById('Categoria').getContext('2d');
                    const Categoria = new Chart(ctxCategoria, {
                        type: 'pie',
                        data: {
                            labels: ["Accidente",
                                "Incidente"
                            ],
                            datasets: [{
                                label: '# of Votes',
                                data: [jsonAccidente.length, jsonIncidente.length],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            legend: {
                                boxWidth: 5,
                                display: true,
                                position: 'top',
                            },
                            plugins: {
                                // Change options for ALL labels of THIS CHART
                                datalabels: {
                                    align: 'end',
                                    anchor: 'end',
                                    color: '#333',
                                    font: {
                                        weight: 'bold'
                                    },
                                },
                            }
                        }
                    });
                </script>

                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Trabajadas</span> -->
                    </div>
                    <div class="col-6">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Faltantes</span> -->
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">Riesgo</h2>
                <script>
                    let cantIncidenteAccidente_de_trabajo = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Accidente de trabajo"
                    });
                    let cantIncidenteAccidente_de_trayecto = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Accidente de trayecto"
                    });
                    let cantIncidenteEnfermedad_de_trabajo = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Enfermedad de trabajo"
                    });
                    let cantIncidenteDaño_a_instalaciones = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a instalacione"
                    });
                    let cantIncidenteDaño_a_infraestructura_electrica = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestrura electric"
                    });
                    let cantIncidenteDaño_a_infraestructura_electronica = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestrura electric"
                    });
                    let cantIncidenteDaño_a_infraestructura_de_servicio_de_agua = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestructura de servicio de agua"
                    });
                    let cantIncidenteDaño_a_infraestructura_de_aire = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestructura de aire"
                    });
                    let cantIncidenteDaño_a_infraestructura_de_ventilacion = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestructura de ventilacion"
                    });
                    let cantIncidenteDaño_a_Maquinaria = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a Maquinaria"
                    });
                    let cantIncidenteDaño_a_Equipo = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a Equipo"
                    });
                    let cantIncidenteDaño_a_Herramienta = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a Herramienta"
                    });
                    let cantIncidenteDaño_a_materials_de_Produccion = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a materiales de produccion"
                    });
                    let cantIncidenteDaño_a_materiales_de_oficina = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a materiales de oficina"
                    });
                    let cantIncidenteRobo = jsonIncidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Robo"
                    });

                    let cantAccidenteAccidente_de_trabajo = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Accidente de trabajo"
                    });
                    let cantAccidenteAccidente_de_trayecto = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Accidente de trayecto"
                    });
                    let cantAccidenteEnfermedad_de_trabajo = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Enfermedad de trabajo"
                    });
                    let cantAccidenteDaño_a_instalaciones = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a instalacione"
                    });
                    let cantAccidenteDaño_a_infraestructura_electrica = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestrura electric"
                    });
                    let cantAccidenteDaño_a_infraestructura_electronica = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestrura electric"
                    });
                    let cantAccidenteDaño_a_infraestructura_de_servicio_de_agua = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestructura de servicio de agua"
                    });
                    let cantAccidenteDaño_a_infraestructura_de_aire = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestructura de aire"
                    });
                    let cantAccidenteDaño_a_infraestructura_de_ventilacion = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a infraestructura de ventilacion"
                    });
                    let cantAccidenteDaño_a_Maquinaria = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a Maquinaria"
                    });
                    let cantAccidenteDaño_a_Equipo = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a Equipo"
                    });
                    let cantAccidenteDaño_a_Herramienta = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a Herramienta"
                    });
                    let cantAccidenteDaño_a_materials_de_Produccion = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a materiales de produccion"
                    });
                    let cantAccidenteDaño_a_materiales_de_oficina = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Daño a materiales de oficina"
                    });
                    let cantAccidenteRobo = jsonAccidente.filter(function(type, index) {
                        return type.form3TipoRiesgo == "Robo"
                    });
                </script>
                <!-- Progress bar 1 -->
                <canvas id="Riesgo" width="400" height="200"></canvas>
                <script>
                    const ctx = document.getElementById('Riesgo').getContext('2d');
                    const Riesgo = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Accidente de trabajo",
                                "Accidente de trayecto",
                                "Enfermedad de trabajo",
                                "Daño a instalaciones",
                                "Infraestrura electrica",
                                "Infraestrura electronica",
                                "Infraestructura de servicio de agua",
                                "Infraestructura de aire",
                                "Infraestructura de ventilacion",
                                "Maquinaria",
                                "Equipo",
                                "Herramienta",
                                "Materiales de produccion",
                                "Materiales de oficina",
                                "Robo"
                            ],
                            datasets: [{
                                label: '# of Votes',
                                data: [cantIncidenteAccidente_de_trabajo.length + cantAccidenteAccidente_de_trabajo.length,
                                    cantIncidenteAccidente_de_trayecto.length + cantAccidenteAccidente_de_trayecto.length,
                                    cantIncidenteEnfermedad_de_trabajo.length + cantAccidenteEnfermedad_de_trabajo.length,
                                    cantIncidenteDaño_a_instalaciones.length + cantAccidenteDaño_a_instalaciones.length,
                                    cantIncidenteDaño_a_infraestructura_electrica.length + cantAccidenteDaño_a_infraestructura_electrica.length,
                                    cantIncidenteDaño_a_infraestructura_electronica.length + cantAccidenteDaño_a_infraestructura_electronica.length,
                                    cantIncidenteDaño_a_infraestructura_de_servicio_de_agua.length + cantAccidenteDaño_a_infraestructura_de_servicio_de_agua.length,
                                    cantIncidenteDaño_a_infraestructura_de_aire.length + cantAccidenteDaño_a_infraestructura_de_aire.length,
                                    cantIncidenteDaño_a_infraestructura_de_ventilacion.length + cantAccidenteDaño_a_infraestructura_de_ventilacion.length,
                                    cantIncidenteDaño_a_Maquinaria.length + cantAccidenteDaño_a_Maquinaria.length,
                                    cantIncidenteDaño_a_Equipo.length + cantAccidenteDaño_a_Equipo.length,
                                    cantIncidenteDaño_a_Herramienta.length + cantAccidenteDaño_a_Herramienta.length,
                                    cantIncidenteDaño_a_materials_de_Produccion.length + cantAccidenteDaño_a_materials_de_Produccion.length,
                                    cantIncidenteDaño_a_materiales_de_oficina.length + cantAccidenteDaño_a_materiales_de_oficina.length,
                                    cantIncidenteRobo.length + cantAccidenteRobo.length

                                ],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255,1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255,2)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            legend: {
                                boxWidth: 5,
                                display: true,
                                position: 'top',
                            },
                            plugins: {
                                // Change options for ALL labels of THIS CHART
                                datalabels: {
                                    align: 'end',
                                    anchor: 'end',
                                    color: '#333',
                                    font: {
                                        weight: 'bold'
                                    },
                                },
                            }
                        }
                    });
                </script>
                <!-- END -->

                <!-- Demo info-->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Trabajadas</span> -->
                    </div>
                    <div class="col-6">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Faltantes</span> -->
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
    </div>

    <div class="row">
        <!-- END -->
        <div class="col-xl-6 col-lg-12 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">Concecuencias</h2>

                <script>
                    let cantIncidente_Temporal = jsonIncidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Temporal"
                    });
                    let cantIncidente_Parcial_permanente = jsonIncidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Parcial permanente"
                    });
                    let cantIncidente_Total_permanente = jsonIncidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Total permanente"
                    });
                    let cantIncidente_Muerte = jsonIncidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Muerte"
                    });
                    let cantIncidente_Sin_incapacidad = jsonIncidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Sin incapacidad"
                    });
                    let cantIncidente_No_especificado = jsonIncidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "No especificado"
                    });

                    let cantAccidente_Temporal = jsonAccidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Temporal"
                    });
                    let cantAccidente_Parcial_permanente = jsonAccidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Parcial permanente"
                    });
                    let cantAccidente_Total_permanente = jsonAccidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Total permanente"
                    });
                    let cantAccidente_Muerte = jsonAccidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Muerte"
                    });
                    let cantAccidente_Sin_incapacidad = jsonAccidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "Sin incapacidad"
                    });
                    let cantAccidente_No_especificado = jsonAccidente.filter(function(type, index) {
                        return type.form4TipoIncapacidad == "No especificado"
                    });
                </script>

                <!-- Progress bar 2 -->
                <canvas id="Concecuencias" width="400" height="200"></canvas>
                <script>
                    const ctxConcecuencias = document.getElementById('Concecuencias').getContext('2d');
                    const Concecuencias = new Chart(ctxConcecuencias, {
                        type: 'bar',
                        data: {
                            labels: ["Temporal", "Parcial permanente", "Total permanente", "Muerte", "Sin incapacidad", "No especificado"],
                            datasets: [{
                                label: '# of Votes',
                                data: [cantIncidente_Temporal.length + cantAccidente_Temporal.length,
                                    cantIncidente_Parcial_permanente.length + cantAccidente_Parcial_permanente.length,
                                    cantIncidente_Total_permanente.length + cantAccidente_Total_permanente.length,
                                    cantIncidente_Muerte.length + cantAccidente_Muerte.length,
                                    cantIncidente_Sin_incapacidad.length + cantAccidente_Sin_incapacidad.length,
                                    cantIncidente_No_especificado.length + cantAccidente_No_especificado.length,
                                ],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            legend: {
                                boxWidth: 5,
                                display: true,
                                position: 'top',
                            },
                            plugins: {
                                // Change options for ALL labels of THIS CHART
                                datalabels: {
                                    align: 'end',
                                    anchor: 'end',
                                    color: '#333',
                                    font: {
                                        weight: 'bold'
                                    },
                                },
                            }
                        }
                    });
                </script>

                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Trabajadas</span> -->
                    </div>
                    <div class="col-6">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Faltantes</span> -->
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>

        <div class="col-xl-6 col-lg-12 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">Factores</h2>
                <script>
                    let cantIncidenteActitud_Inapropiada = jsonIncidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Actitud Inapropiada"
                    });
                    let cantIncidenteFalta_de_conocimientos = jsonIncidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Falta de conocimientos"
                    });
                    let cantIncidenteDefectos_orgánicos_o_psíquicos = jsonIncidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Defectos orgánicos o psíquicos"
                    });
                    let cantIncidenteNinguno = jsonIncidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Ninguno"
                    });
                    let cantIncidenteNo_especificado_ = jsonIncidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "No especificado"
                    });

                    let cantAccidenteActitud_Inapropiada = jsonAccidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Actitud Inapropiada"
                    });
                    let cantAccidenteFalta_de_conocimientos = jsonAccidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Falta de conocimientos"
                    });
                    let cantAccidenteDefectos_orgánicos_o_psíquicos = jsonAccidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Defectos orgánicos o psíquicos"
                    });
                    let cantAccidenteNinguno = jsonAccidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "Ninguno"
                    });
                    let cantAccidenteNo_especificado_ = jsonAccidente.filter(function(type, index) {
                        return type.form3FactorPersonal == "No especificado"
                    });
                </script>

                <!-- Progress bar 3 -->
                <canvas id="Factores" width="400" height="200"></canvas>
                <script>
                    const ctxFactores = document.getElementById('Factores').getContext('2d');
                    const Factores = new Chart(ctxFactores, {
                        type: 'bar',
                        data: {
                            labels: ["Actitud Inapropiada",
                                "Falta de conocimientos",
                                "Defectos orgánicos o psíquicos",
                                "Ninguno",
                                "No especificado"
                            ],
                            datasets: [{
                                label: '# of Votes',
                                data: [cantIncidenteActitud_Inapropiada.length + cantAccidenteActitud_Inapropiada.length,
                                    cantIncidenteFalta_de_conocimientos.length + cantAccidenteFalta_de_conocimientos.length,
                                    cantIncidenteDefectos_orgánicos_o_psíquicos.length + cantAccidenteDefectos_orgánicos_o_psíquicos.length,
                                    cantIncidenteNinguno.length + cantAccidenteNinguno.length,
                                    cantIncidenteNo_especificado_.length + cantAccidenteNo_especificado_.length
                                ],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            legend: {
                                boxWidth: 5,
                                display: true,
                                position: 'top',
                            },
                            plugins: {
                                // Change options for ALL labels of THIS CHART
                                datalabels: {
                                    align: 'end',
                                    anchor: 'end',
                                    color: '#333',
                                    font: {
                                        weight: 'bold'
                                    },
                                },
                            }
                        }
                    });
                </script>

                <!-- Progress bar 4 -->

                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Trabajadas</span> -->
                    </div>
                    <div class="col-6">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Faltantes</span> -->
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
    </div>

    <div class="row">
        <!-- END -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">Partes Lesionadas</h2>

                <script>
                    let cantIncidentebodyCabeza = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaCabeza == "on"
                    });
                    let cantIncidentebodyCuello = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaCuello == "on"
                    });
                    let cantIncidentebodyHombro = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaHombro == "on"
                    });
                    let cantIncidentebodyBrazoIzquierdo = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaBrazoIzquierdo == "on"
                    });
                    let cantIncidentebodyBrazoDerecho = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaBrazoDerecho == "on"
                    });
                    let cantIncidentebodyManoIzquierda = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaManoIzquierda == "on"
                    });
                    let cantIncidentebodyManoDerecha = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaManoDerecha == "on"
                    });
                    let cantIncidentebodyPecho = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaPecho == "on"
                    });
                    let cantIncidentebodyTorax = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaTorax == "on"
                    });
                    let cantIncidentebodyEstomago = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaEstomago == "on"
                    });
                    let cantIncidentebodyAreaGenital = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaAreaGenital == "on"
                    });
                    let cantIncidentebodyPiernaIzquierdo = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaPiernaIzquierdo == "on"
                    });
                    let cantIncidentebodyPiernaDerecha = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaPiernaDerecha == "on"
                    });
                    let cantIncidentebodyPieIzquierdo = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaPieIzquierdo == "on"
                    });
                    let cantIncidentebodyPieDerecho = jsonIncidente.filter(function(type, index) {
                        return type.form4AreaPieDerecho == "on"
                    });
                    let cantIncidentebodySinLesion = jsonIncidente.filter(function(type, index) {
                        return type.form4SinLesion == "on"
                    });

                    let cantAccidentebodyCabeza = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaCabeza == "on"
                    });
                    let cantAccidentebodyCuello = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaCuello == "on"
                    });
                    let cantAccidentebodyHombro = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaHombro == "on"
                    });
                    let cantAccidentebodyBrazoIzquierdo = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaBrazoIzquierdo == "on"
                    });
                    let cantAccidentebodyBrazoDerecho = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaBrazoDerecho == "on"
                    });
                    let cantAccidentebodyManoIzquierda = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaManoIzquierda == "on"
                    });git config --global user.email "email@example.com"
                    let cantAccidentebodyManoDerecha = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaManoDerecha == "on"
                    });
                    let cantAccidentebodyPecho = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaPecho == "on"
                    });
                    let cantAccidentebodyTorax = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaTorax == "on"
                    });
                    let cantAccidentebodyEstomago = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaEstomago == "on"
                    });
                    let cantAccidentebodyAreaGenital = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaAreaGenital == "on"
                    });
                    let cantAccidentebodyPiernaIzquierdo = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaPiernaIzquierdo == "on"
                    });
                    let cantAccidentebodyPiernaDerecha = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaPiernaDerecha == "on"
                    });
                    let cantAccidentebodyPieIzquierdo = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaPieIzquierdo == "on"
                    });
                    let cantAccidentebodyPieDerecho = jsonAccidente.filter(function(type, index) {
                        return type.form4AreaPieDerecho == "on"
                    });
                    let cantAccidentebodySinLesion = jsonAccidente.filter(function(type, index) {
                        return type.form4SinLesion == "on"
                    });
                </script>

                <!-- Progress bar 2 -->
                <canvas id="Partes" width="400" height="100"></canvas>
                <script>
                    const ctxPartes = document.getElementById('Partes').getContext('2d');
                    const Partes = new Chart(ctxPartes, {
                        type: 'bar',
                        data: {
                            labels: ["Cabeza",
                                "Cuello",
                                "Hombro",
                                "Brazo Izquierdo",
                                "Brazo Derecho",
                                "Mano Izquierda",
                                "Mano Derecha",
                                "Pecho",
                                "Torax",
                                "Estomago",
                                "Area Genital",
                                "Pierna Izquierdo",
                                "Pierna Derecha",
                                "Pie Izquierdo",
                                "Pie Derecho",
                                "Sin Lesion"
                            ],
                            datasets: [{
                                label: '# of Votes',
                                data: [cantIncidentebodyCabeza.length + cantAccidentebodyCabeza.length,
                                cantIncidentebodyCuello.length + cantAccidentebodyCuello.length,
                                cantIncidentebodyHombro.length + cantAccidentebodyHombro.length,
                                cantIncidentebodyBrazoIzquierdo.length + cantAccidentebodyBrazoIzquierdo.length,
                                cantIncidentebodyBrazoDerecho.length + cantAccidentebodyBrazoDerecho.length,
                                cantIncidentebodyManoIzquierda.length + cantAccidentebodyManoIzquierda.length,
                                cantIncidentebodyManoDerecha.length + cantAccidentebodyManoDerecha.length,
                                cantIncidentebodyPecho.length + cantAccidentebodyPecho.length,
                                cantIncidentebodyTorax.length + cantAccidentebodyTorax.length,
                                cantIncidentebodyEstomago.length + cantAccidentebodyEstomago.length,
                                cantIncidentebodyAreaGenital.length + cantAccidentebodyAreaGenital.length,
                                cantIncidentebodyPiernaIzquierdo.length + cantAccidentebodyPiernaIzquierdo.length,
                                cantIncidentebodyPiernaDerecha.length + cantAccidentebodyPiernaDerecha.length,
                                cantIncidentebodyPieIzquierdo.length + cantAccidentebodyPieIzquierdo.length,
                                cantIncidentebodyPieDerecho.length + cantAccidentebodyPieDerecho.length,
                                cantIncidentebodySinLesion.length + cantAccidentebodySinLesion.length
                                ],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            legend: {
                                boxWidth: 5,
                                display: true,
                                position: 'top',
                            },
                            plugins: {
                                // Change options for ALL labels of THIS CHART
                                datalabels: {
                                    align: 'end',
                                    anchor: 'end',
                                    color: '#333',
                                    font: {
                                        weight: 'bold'
                                    },
                                },
                            }
                        }
                    });
                </script>

                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Trabajadas</span> -->
                    </div>
                    <div class="col-6">
                        <!-- <div class="h4 font-weight-bold mb-0"></div><span class="small text-gray">Hrs Faltantes</span> -->
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
    </div>

</div>
@include('layouts.footer')
@endsection