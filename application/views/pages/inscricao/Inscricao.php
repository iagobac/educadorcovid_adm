<?php
include_once 'modal/inscricao_analise.php';
?>
<div id="inscricao_tela_inicial">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-sm-12">
                <div class="page-header">
                    <h2 id="inscricao_page_inicial_title">Inscrições
                    </h2>
                </div>
                <div class="row">
                    <div class="col-2 offset-10" style="float:right;top:-113px;filter:alpha(opacity=40);opacity:.40;margin-bottom: -60px;"><img src="include/img/logo-crato.png" id="logoCrato" width="100%"></div>
                </div>

                <div class="row modal-group-conv-2">
                    <div class="col-md-12 col-sm-12">
                        <div id="tabela_inscricao_div">
                            <?php
                            if ($inscricoes_tipo == 'all') {
                                echo '<div class="col-md-12 col-sm-12 text-center" style="background-color: #edf0f5;">  <h3 id="">Listando todas as Inscrições</h3></div>';
                                include_once 'tabela_inscricao_todas.php';
                            } else if ($inscricoes_tipo == 'pend') {
                                echo '<div class="col-md-12 col-sm-12 text-center" style="background-color: #fffad4;">  <h3 id="">Listando Inscrições Pendentes</h3></div>';
                                include_once 'tabela_inscricao_pendentes.php';
                            } else if ($inscricoes_tipo == 'def') {
                                echo '<div class="col-md-12 col-sm-12 text-center" style="background-color: #d8f5d5;">  <h3 id="">Listando Inscrições Deferidas</h3></div>';
                                include_once 'tabela_inscricao_deferidas.php';
                            } else if ($inscricoes_tipo == 'indef') {
                                echo '<div class="col-md-12 col-sm-12 text-center" style="background-color: #f5d7d5;">  <h3 id="">Listando Inscrições Indeferidas</h3></div>';
                                include_once 'tabela_inscricao_indeferidas.php';
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(function ($) {
        $('.select2_inscricao').select2({theme: 'bootstrap', language: 'pt-BR', width: '100%', placeholder: 'Selecione..'});
        $.LoadingOverlay("hide");

    });
    function btnAnalise(id) {

        $.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: "index.php/inscricao/get_one_inscricao",
            data: {id: id},
            dataType: 'JSON',
            success: function (resposta) {
                if (resposta.status) {
                    $('#modal_analise').modal();
                
                
                    $.LoadingOverlay("hide");
                } else {
                    console.log(resposta)
                    notifyDanger("Erro ao carregar documentação!", $('#inscricao_tela_inicial'));
                }
                $.LoadingOverlay("hide");
            }, error: function (error) {
                console.log(resposta)
                notifyDanger("Erro ao carregar os dados!" + error, $('#inscricao_tela_inicial'));
                $.LoadingOverlay("hide");
            }
        });
    }

</script>