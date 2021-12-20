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
            <th scope="col" style="width: 5%;"> Editar</th>
            <th scope="col" style="width: 5%;"> Ver</th>
            <th scope="col" style="width: 5%; "> PDF</th>
        </tr>
    </thead>
    <tbody id="addRow" class="addRow">
        @foreach($registroIncidente as $registro)
        <tr>
            <td style="width: 5%;">
                {{$registro->id}}
            </td>
            <td data-order="{{$registro->form2Fecha}}" style="width: 20%;">
                {{date('d-M-Y', strtotime($registro->form2Fecha))}}
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
            <td style="width: 5%; text-align: center;" class="align-middle">
                <a href="https://drive.google.com/drive/u/1/folders/1gKCI2ZA-e2nT0WTxWMtEg4lHQvdxn7HY" target="_blank" style="text-align: center;" class="buttonTable"> <i class="fab fa-google-drive"></i> </a>
            </td>
            <td style="width: 5%; text-align: center;" class="align-middle">
                <a href="{{ url('/viewPdf/'.$registro->id) }}" target="_blank" style="text-align: center;" class="buttonTable"> <i class="fas fa-file-download"></i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>