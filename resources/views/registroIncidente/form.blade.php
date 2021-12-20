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

    <button type="submit">Guardar Formulario</button>

</div>
@include('layouts.footer')
@endsection