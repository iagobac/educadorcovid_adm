<?php ?>
<div id="inscricao_tela_inicial_indeferida">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-sm-12">
                <div class="page-header">
                    <h2 id="inscricao_page_inicial_indeferida_title">Inscrições
                    </h2>
                </div>
                <div class="row">
                    <div class="col-2 offset-10" style="float:right;top:-113px;filter:alpha(opacity=40);opacity:.40;margin-bottom: -60px;"><img src="include/img/logo-crato.png" id="" width="100%"></div>
                </div>

                <div class="row modal-group-conv-2">
                    <div class="col-md-12 col-sm-12">
                        <div id="tabela_inscricao_indeferida_div">
                            <div class="col-md-12 col-sm-12 text-center" style="background-color: #f5d7d5;">  <h3 id="">Listando Inscrições Indeferidas</h3></div>
                            <?php
                            include_once 'tabela_inscricao_indeferidas.php';
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
        $.LoadingOverlay("hide");

    });


</script>