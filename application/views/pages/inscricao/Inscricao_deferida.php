<?php
?>
<div id="inscricao_tela_inicial_deferida">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-sm-12">
                <div class="page-header">
                    <h2 id="inscricao_page_inicial_deferida_title">Inscrições
                    </h2>
                </div>
                <div class="row">
                    <div class="col-2 offset-10" style="float:right;top:-113px;filter:alpha(opacity=40);opacity:.40;margin-bottom: -60px;"><img src="include/img/logo-crato.png" id="" width="100%"></div>
                </div>

                <div class="row modal-group-conv-2">
                    <div class="col-md-12 col-sm-12">
                        <div id="tabela_inscricao_deferida_div">
                            <div class="col-md-12 col-sm-12 text-center" style="background-color: #d8f5d5;">  <h3 id="">Listando Inscrições Deferidas</h3></div>;
                            <?php
                                include_once 'tabela_inscricao_deferidas.php';
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


    function dateToBR(date)
    {
        return date.split('-').reverse().join('/');
    }

</script>