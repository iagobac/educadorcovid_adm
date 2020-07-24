<div id="footer">
    <div class="container-fluid" class="footer">
        <div class="row">
            <div class="col-12 text-center">
                <div class="footer">
                    <hr>
                    <span id="text-footer">&reg; Copyrigth by PREFEITURA MUNICIPAL DO CRATO - Coordenadoria de Tecnologia da Informação<br></span>
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

<!--include tabs--> 
<link rel="stylesheet" type="text/css" href="include/tabss/style-tabs.css?asd">
<script src="include/tabss/tabs.js"></script>



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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" />
<link rel="text/javascript" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/af.js"/>


<!--include js do projeto-->
<script src="include/js/siaed.js"></script>

<script type="text/javascript">

    function close(id) {
        try {
            tabs.closeById(id);
        } catch (err) {
        }
        $.LoadingOverlay("show");
    }

    var tabs = $('#tabs').bootstrapDynamicTabs().addTab({
        title: 'Educador Covid',
        id: 'educ_covid',
        ajaxUrl: 'index.php/home/content',
        closable: false

    });
    $('#btnListartodas').click(function () {
        //close('tela_Escola_Unidade_trabalho');
        tabs.addTab({
            title: 'Todas as Inscrições',
            id: 'ListarTodasinscricaoTab',
            ajaxUrl: 'index.php/inscricao/listar_todas'
        });

    });
    $('#btnListarPendentes').click(function () {
        //close('tela_Escola_Unidade_trabalho');
        tabs.addTab({
            title: 'Inscrições Pendentes',
            id: 'ListarPendentesinscricaoTab',
            ajaxUrl: 'index.php/inscricao/listar_pendentes'
        });

    });
    $('#btnListarDeferidas').click(function () {
        //close('tela_Escola_Unidade_trabalho');
        tabs.addTab({
            title: 'Inscrições Deferidas',
            id: 'ListarDeferidasinscricaoTab',
            ajaxUrl: 'index.php/inscricao/listar_deferidas'
        });

    });
    $('#btnListarIndeferidas').click(function () {
        //close('tela_Escola_Unidade_trabalho');
        tabs.addTab({
            title: 'Inscrições Indeferidas',
            id: 'ListarIndeferidasinscricaoTab',
            ajaxUrl: 'index.php/inscricao/listar_indeferidas'
        });

    });



    function datatableDinamic(nameTable, nameArquivo = 'EDUCADORCOVID', rowordem = 0, ordem = 'asc') {
        $('#' + nameTable + ' tfoot th').each(function () {
            var title = $(this).text();
            var tamanho = $(this).width();
            //var tamanh = (tamanho+tamanho+tamanho)/2;
            //alert(tamanho+tamanho);
            // alert("-"+tamanh+);
            $(this).html('<input type="text" style="width:90%" placeholder="' + title + '" />');
        });

        // DataTable
        var table = $('#' + nameTable).DataTable({
            initComplete: function () {
                $('#' + nameTable).wrapAll('<div class="table-responsive" id="' + nameTable + 'Responsive">');
                $("<div id='scroll-top-" + nameTable + "' class='scroll-top' style='height: 20px;overflow: auto hidden;width: 100%;'><div id='div-top-" + nameTable + "' style='height: 20px;''></div></div>").insertBefore("#" + nameTable + "Responsive");
                $('#scroll-top-' + nameTable).on('scroll', function (e) {
                    $('#' + nameTable + 'Responsive').scrollLeft($('#scroll-top-' + nameTable).scrollLeft());
                });
                $('#' + nameTable + 'Responsive').on('scroll', function (e) {
                    $('#scroll-top-' + nameTable).scrollLeft($('#' + nameTable + 'Responsive').scrollLeft());
                });
                $('#div-top-' + nameTable).width($('#' + nameTable).width());

            },
            //scrollX: true,
            "order": [rowordem, ordem],
            autoWidth: false,
            columnDefs: [{"targets": "table-data", "type": "date-eu"},
                {"targets": "table-datatime", "type": "date-euro"},
                {"targets": "porcentagem", "width": "90px"},
                {"targets": "column-invisivel", "visible": false},
                {"targets": "operacao-btn-4", "width": "290px"},
                {"targets": "operacao-btn-3", "width": "225px"},
                {"targets": "operacao-btn-2", "width": "160px"},
                {"targets": "operacao-btn-1", "width": "95px"},
                {"targets": "_all", "width": "120px"}

            ],
            colReorder: true,
            "language": {
                "decimal": ",",
                "thousands": ".",
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
            buttons: [{extend: 'csv', className: 'btn-info', exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }}, {extend: 'excel', title: null, filename: 'SIGERH', className: 'btn-info', exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }}, {extend: 'pdfHtml5',
                    customize: function (doc) {
                        doc.styles.tableHeader.fontSize = 8;
                        doc.defaultStyle.fontSize = 8;
                        doc.pageMargins = [20, 25, 20, 25];
                        doc['footer'] = (function (page, pages) {
                            return {
                                columns: [
                                    {
                                        alignment: 'right',
                                        text: ['Pagina ', {text: page.toString()}, ' de ', {text: pages.toString()}]
                                    }
                                ],
                                margin: 20
                            }
                        });
                    }, filename: 'SIGERH', download: "open", orientation: 'landscape',
                    pageSize: 'A4', className: 'btn-info', exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }}, {extend: 'colvis', text: 'Colunas Visiveis', className: 'btn-info'}, {extend: 'pageLength', className: 'btn-info'}]

        });

        table.buttons().container().appendTo('#' + nameTable + '_wrapper .col-md-6:eq(0)');

        // Apply the search
        table.columns().every(function () {
            var that = this;

            $('input', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that
                            .search(this.value)
                            .draw();
                }
            });
        });
    }

</script>
