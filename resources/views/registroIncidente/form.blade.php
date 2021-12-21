@extends('layouts.app')

@section('content')
<div class="container">

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">

            <div class="carousel-item active">
                @include('formularioIncidentes.formUnoDatosGenerales')
            </div>

            <div class="carousel-item">
                @include('formularioIncidentes.formDosLugarTiempo')
            </div>

            <div class="carousel-item">
                @include('formularioIncidentes.formTresCaracteristicas')
            </div>

            <div class="carousel-item">
                @include('formularioIncidentes.formCuatroDaño')
            </div>

            <div class="carousel-item">
                @include('formularioIncidentes.formCincoCostos')
            </div>

            <div class="carousel-item">
                @include('formularioIncidentes.formSeisAcciones')
            </div>

        </div>

        <button class="carousel-control-prev" type="button" style="color: black; background-color: black; width: 5%; height: 50px; border-radius: 10%;" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" style="color: black; background-color: black; width: 5%; height: 50px; border-radius: 10%;" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:700);


        .button {
            background: #3D4C53;
            margin: 6px auto;
            width: 200px;
            height: 5%;
            overflow: hidden;
            text-align: center;
            transition: .2s;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 0px 1px 2px rgb(0 0 0 / 20%);
        }

        .btnTwo {
            position: relative;
            width: 200px;
            height: 100px;
            margin-top: -100px;
            padding-top: 2px;
            background: #26A69A;
            left: -250px;
            transition: .3s;
        }

        .btnText {
            color: white;
            transition: .3s;
            margin-top: 4%;
        }

        .btnText2 {
            margin-top: 58px;
            margin-right: -130px;
            color: #FFF;
        }

        .button:hover .btnTwo {
            /*When hovering over .button change .btnTwo*/
            left: -130px;
        }

        .button:hover .btnText {
            /*When hovering over .button change .btnText*/
            margin-left: 65px;
        }

        .button:active {
            /*Clicked and held*/
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.3);
        }
    </style>

    <div class="button">
        <p class="btnText">Guardar Registro</p>
        <div class="btnTwo">
            <p class="btnText2">Si!</p>
        </div>
    </div>

</div>
@include('layouts.footer')
@endsection