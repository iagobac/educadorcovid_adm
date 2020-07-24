<div id="footer">
    <div class="container-fluid" class="footer">
        <div class="row">
            <div class="col-12 text-center">
                <div class="footer">
                    <hr>
                    <span id="text-footer">PREFEITURA MUNICIPAL DO CRATO - Finanças e Planejamento - Coordenadoria de Tecnologia da Informação  <br>SIG-CUAM - Sistema Integrado de Gestão do Cadastro de Unidades Administrativas Municipais. &reg;</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script type="text/javascript" src="include/js/jquery-3.2.1.slim.min.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<script type="text/javascript" src="include/js/jquery-1.11.3.min.js"></script>
<!--<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
<script type="text/javascript" src="include/js/jquery-ui.js"></script>
<script type="text/javascript" src="include/js/jquery-ui.js"></script>
<script type="text/javascript" src="include/bootstrap4/js/bootstrap3.js?das433sfasfas"></script>
<script type="text/javascript" src="include/bootstrap4/js/bootstrap.js?32sa"></script>
<script type="text/javascript" src="include/bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->
<script type="text/javascript" src="include/dataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<!--<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>-->
<script type="text/javascript" src="include/dataTables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!--O script abaixo serve para expandir o datatabel-->
<script type="text/javascript" src="include/dataTables/DataTables-1.10.16/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="include/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="include/js/notify-manager.js"></script>
<script type="text/javascript" src="include/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="include/js/jquery.maskMoney.min.js"></script>
<script type="text/javascript" src="include/js/jquery.ajaxfileupload.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.5/dist/loadingoverlay.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/r-2.2.2/datatables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.12/sorting/date-eu.js"></script>

<script type="text/javascript" src="include/js/pdfmake.js"></script>
<script type="text/javascript" src="include/js/vfs_fonts.js"></script>

<script type="text/javascript" src="include/js/jquery.inputmask.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="include/js/bootstrap-datepicker.js"></script>
<script src="include/js/bootstrap-datepicker.pt-BR.min.js"></script>

<script type="text/javascript">

    function load_tab(tab) {
        try {
            tabs.closeById(tab);
        } catch (e) {

        }
        $.LoadingOverlay('show');
    }
    var tabs = $('#tabs').bootstrapDynamicTabs().addTab({
        title: 'Início',
        id: 'tabela',
        ajaxUrl: 'index.php/home/content',
        closable: false
    });

   

    function datatableDinamic(nameTable, col_visible) {
        var title = $('title').html();
        $('#' + nameTable + ' tfoot th').each(function () {
            //title = $(this).text();
           // $(this).html('<input type="text" placeholder="Pesquisar ' + title + '" />');
        });

        // DataTable
        var table = $('#' + nameTable).DataTable({
            scrollX: false,
            colReorder: true,
            "language": {
                "lengthMenu": "Exibir _MENU_ resultados",
                "zeroRecords": "Nenhum registro encontrado",
                "info": "Exibindo de _START_ até _END_ de _TOTAL_ registros",
                "infoEmpty": "Exibindo 0 até 0 de 0 registros",
                "infoFiltered": "(Mostrando _MAX_ total de resultados)",
                "search": "Pesquisar",
                "loadingRecords": "Carregando...",
                "processing": "Processando...",
                "paginate": {
                    "next": "Próximo",
                    "previous": "Anterior",
                    "first": "Primeiro",
                    "last": "Último"
                },
                "buttons": {
                    "pageLength": {
                        _: "Exibir %d resultados",
                        '-1': "Todos os Resultados Resultados"
                    }
                }
            },
            lengthChange: false,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 resultados', '25 resultados', '50 resultados', 'Exibir todos']
            ],
            //"initComplete": function(settings, json) {

            //},
            buttons: [{extend: 'csv', className: 'btn-success', exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }}, {extend: 'excel', title: null, filename: 'nome do arquivo', className: 'btn-success', exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }}, {extend: 'pdf', title: title,

                    customize: function (doc) {
                        doc.content[1].alignment = 'center';
                        doc.content[1].table.widths =
                                Array(doc.content[1].table.body[1].length + 1).join('%').split('');
                    },
                    filename: title, download: "open", orientation: 'landscape',
                    pageSize: 'A4', className: 'btn-danger', exportOptions: {
                        columns: ':visible:not(.not-export-col)', stripNewlines: false
                    }}, {extend: 'print', text: 'Imprimir', className: 'btn-info', exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }}, {extend: 'colvis', text: 'Colunas Visiveis', className: 'btn-info'}, {extend: 'pageLength', className: 'btn-info'}],
            "columnDefs": [
                {"targets": "table-data", "type": "date-eu"},
                {targets: col_visible, visible: true},
                {targets: '_all', visible: false}
            ]

        });

        table.buttons().container().appendTo('#' + nameTable + '_wrapper .col-md-6:eq(0)');

        // Apply the search
        table.columns().every(function () {
            var that = this;

            $(this.footer()).on('keyup change', function () {
                //$( 'input', this.footer() ).on( 'keyup change', function () {
                if (that.search() !== this.value) {
                    that
                            .search(this.value)
                            .draw();
                }
            });
        });
    }

</script>
