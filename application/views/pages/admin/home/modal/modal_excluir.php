<!-- Modal -->
<div class="modal fade" id="modalExcluirUnidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Arquivar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-sm-12 col-12 form-group">
                    <div id="statusExcluirUnidade"></div>
                    <br>
                    Tem certeza que deseja arquivar a unidade <span class="font-weight-bold"
                                                                        id="excluirUnidade"></span>
                    <div class="col-md-12 col-sm-12 col-12 form-group"><b><span id="excluirUnidade"> </span></b></div>
                </div>
            </div>
            <form method="post" id="formExcUnidade" action="javascript:func()">
                <input type="hidden" name="idExcluirUnidade" id="idExcluirUnidade">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Arquivar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function btnExcluirUnidade(id, nome) {
        nome = nome+" ?";
        $('[data-toggle="tooltip"]').tooltip('dispose');
        $("#statusExcluirUnidade").html('');
        $("#excluirUnidade").html(nome.toUpperCase());
        $("#idExcluirUnidade").val(id);
        $("#modalExcluirUnidade").modal();
    }

    $(function ($) {

        $("#modalExcluirUnidade").on('hidden.bs.modal', function () {
            $('#formExcUnidade button:contains("Excluir")').prop('disabled', false);
        });

        $("#formExcUnidade").submit(function (event) {
            $.LoadingOverlay("show");

            $("#statusExcluirUnidade").css('display', 'none');
            $("#statusExcluirUnidade").fadeIn();
            $("#statusExcluirUnidade").html('<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>');
            $.post('index.php/home/arquivar', $("#formExcUnidade").serialize(), function (resposta) {
                console.log(resposta);
                $("#statusExcluirUnidade").css('display', 'none');
                $("#statusExcluirUnidade").slideDown();

                if (resposta != false) {
                    $("#statusExcluirUnidade").css('display', 'none');
                    $("#statusExcluirUnidade").html(resposta);
                    $("#statusExcluirUnidade").fadeIn();
                    $('#formExcUnidade button:contains("Excluir")').prop('disabled', true);
                    $("#tabela_unidade").load("index.php/home/tabela_unidade",function () {
                        $("#tabela_unidade_arquivada").load("index.php/unidadeArquivada/tabela_unidade_arquivada",function () {

                        });
                        $.LoadingOverlay("hide");
                    });
                    $("#modalExcluirUnidade").modal('hide');

                } else {
                    $.LoadingOverlay("hide");
                    $("#statusExcluirUnidade").css('display', 'none');
                    $("#statusExcluirUnidade").html('<div class="alert alert-danger" role="alert"><strong>Ops!</strong> Ocorreu um erro, tente novamente</div>');
                    $("#statusExcluirUnidade").fadeIn();
                }
                $("#statusExcluirUnidade").empty();

            });
        });
    });


</script>