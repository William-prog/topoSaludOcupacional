@extends('layouts.app')
@section('content')
<div class="container">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
    <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

    <script type="70cf02be0b65b144043f4959-text/javascript">
        $(document).ready(function() {
            var table = $('#dataTableIncidentes').DataTable({
                pagingType: 'full_numbers',
                pageLength: 10,
                lengthMenu: [10, 15, 20, 100],
                select: 'single',
                "language": {
                    "search": "Buscar&nbsp;:",
                    "lengthMenu": "Mostrar _MENU_ Incidentes",
                    "zeroRecords": "Dato no encontrado",
                    "info": "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay Incidentes disponibles",
                    "infoFiltered": "(filtrado de _MAX_ Incidentes)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "previous": "Anterior",
                        "next": "Siguiente"
                    },
                    select: {
                        rows: {
                            _: ""
                        }
                    }
                }
            })

            $('#btToggleDisplay').on('click', function() {
                $("#dataTableIncidentes").toggleClass('cards')
                $("#dataTableIncidentes thead").toggle()
            })
        });
    </script>

    <table id="dataTableIncidentes" class="table table-sm table-hover" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="width: 5%;"> Folio</th>
                <th scope="col" style="width: 20%;"> Fecha de evento</th>
                <th scope="col" style="width: 35%;"> Involucrado</th>
                <th scope="col" style="width: 20%;"> Incapacidad / Consecuencia</th>
                <th scope="col" style="width: 5%;"> Subir</th>
                <th scope="col" style="width: 5%; "> PDF</th>
            </tr>
        </thead>
        <tbody id="addRow" class="addRow">
            @foreach($registroIncidente as $registro)
            <tr>
                <td style="width: 5%;">
                    {{$registro->id}}
                </td>
                <td style="width: 20%;">
                    <?php
                    date_default_timezone_set("America/Mexico_City");
                    setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                    $data['Fecha'] = $registro->form2Fecha;
                    $marca = strtotime($data['Fecha']);
                    ?>
                    <?= strftime('%e/%B/%Y', $marca) ?>
                </td>
                <td style="width: 35%;">
                    {{$registro->form1Nombre}} {{$registro->form1PrimerApellido}} {{$registro->form1SegundoApellido}}
                </td>
                <td style="width: 20%;">
                    {{$registro->form4TipoIncapacidad}}
                </td>
                <td style="width: 5%; text-align: center;" class="align-middle">
                    <a href="{{ url('/registroIncidente/'.$registro->id.'/edit') }}" style="text-align: center;" class="buttonTable"> <i class="fas fa-upload"></i> </a>
                </td>
                <!-- <td style="width: 5%; text-align: center;" class="align-middle">
                    <a href="https://drive.google.com/drive/u/1/folders/1gKCI2ZA-e2nT0WTxWMtEg4lHQvdxn7HY" target="_blank" style="text-align: center;" class="buttonTable"> <i class="fab fa-google-drive"></i> </a>
                </td> -->
                <td style="width: 5%; text-align: center;" class="align-middle">
                    <a href="{{ url('/generarReporteIncidente/PDF/'.$registro->id) }}" target="_blank" style="text-align: center;" class="buttonTable"> <i class="fas fa-file-download"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>

</div>
@include('layouts.footer')
@endsection