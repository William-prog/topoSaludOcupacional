@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        /* === BASE HEADING === */

        .headerObjetive {
            position: relative;
            padding: 0;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 300;
            font-size: 20px;
            color: #080808;
            -webkit-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }

        .headerObjetive span {
            display: block;
            font-size: 15px;
            line-height: 1.3;
        }

        .headerObjetive em {
            font-style: normal;
            font-weight: 600;
        }

        /* === HEADING STYLE #2 === */

        .two h1:before {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 2px;
            content: "";
            background-color: #c50000;
        }

        .two h1 span {
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 4px;
            line-height: 3em;
            padding-left: 0.25em;
            color: rgba(f, f, f, 0.4);
            padding-bottom: 10px;
        }

        .alt-two h1 {
            text-align: center;
        }

        .alt-two h1:before {
            left: 50%;
            margin-left: -30px;
        }

        .divObjetive {
            border: 1px solid rgba(197, 0, 0);
            border-radius: 10px;
        }
    </style>

    <div class="two alt-two">
        <h1 class="headerObjetive">Objetivo general:
            <span>Cumplimiento normativo ante las instituciones regulatorias.</span>
        </h1>
    </div>


    <div class="divObjetive form-group">
        <div class="row mt-2">
            <div class="form-group col">
                <p style="margin-left: 5%;  margin-bottom: 1 %; margin-right: 5%;">
                    Art.123, Apartado A, fracciones XIV y XV de la Constitución Política de los Estados Unidos Mexicanos. <br>
                    Art.132, fracciones I, XVI y XVII y 504, fracciones V y VI de la Ley Federal del Trabajo. <br>
                    Art.1, 11, 28 y 37 del Reglamento General de Inspección del Trabajo y Aplicación de Sanciones. <br>
                    Art.3, 5, 7, fracciones XVI y XVII, 76, 77 y 79 del Reglamento Federal de Seguridad y Salud en el Trabajo. <br>
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="two alt-two">
        <h1 class="headerObjetive">Objetivos particulares:
            <span>Alcance del objetivo general.</span>
        </h1>
    </div>

    <div class="divObjetive form-group">
        <div class="row mt-2">
            <div class="form-group col">
                <p style="margin-left: 5%;  margin-bottom: 1 %; margin-right: 5%;">
                    1. Establecer una herramienta digital estandarizada para el informe de accidentes /incidentes en la organización de cumplimiento normativo y con las partes interesadas. <br>
                    2. Establecer una herramienta digital estandarizada para el análisis causal de incidentes /accidentes en la organización.<br>
                    3. Establecer una herramienta digital estandarizada para el análisis estadístico de incidentes /accidentes en la organización a efecto de establecer métodos de control.<br>
                    4. Establecer una herramienta digital estandarizada para el análisis económico presupuestal de proyección de la prima de riesgo, elementos de atención médica y métodos de minimización de riesgos (capacitación).<br>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection