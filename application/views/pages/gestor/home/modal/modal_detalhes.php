<?php
//include_once  $_SERVER['DOCUMENT_ROOT'].'/controllers/unidade.php';
?>
<!-- INÍCIO DO MODAL -->
<div class="modal fade" id="modalDetalhesUnidadeHome" tabindex="-1" role="dialog" aria-labelledby="modalDetalhesUnidadeHome" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabelDetalhesUnidadeHome"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="print">
                <input type="hidden" name="exibirUndidade" id="exibirUnidadeHome" value="">
                <div class="form-row">
                    <div class="col-md-12 col-sm-12 form-group">
                        <h5 for="textNome" class="control-label titulo-modal-detalhes"> Dados da Unidade</h5>
                        <hr id="hr">
                    </div>
                    <div class="col-md-4 col-sm-4 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label"> <b> Código da Unidade Administrativa</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" name="codigo" class="modal-conteudo-conv" id="exibir_unidade_home_codigo"></div>
                    </div>
                    <div class="col-md-8 col-sm-8 form-group campo-modal-detalhes ">
                        <label for="textNome" class="control-label"> <b>Unidade Administrativa</b></label>
                        <div type="text" class="exibir-valor" name="descricao" id="exibir_unidade_home_descricao" placeholder=" "></div>
                    </div>
                    <div class="col-md-4 col-sm-4 form-group campo-modal-detalhes ">
                        <label for="textNome" class="control-label"> <b>Unidade Gestora</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div  name="venc_enel"  id="exibir_unidade_home_secretaria" class="exibir-valor" placeholder="" ></div>
                    </div>
                    <div class="col-md-4 col-sm-4 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label"> <b>Lei de Denominação</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" name="codigo" class="modal-conteudo-conv" id="exibir_unidade_home_lei"></div>
                    </div>
                    <div class="col-md-4 col-sm-4 form-group campo-modal-detalhes ">
                        <label for="textNome" class="control-label"> <b>Data da Publicação</b></label>
                        <div  name="venc_enel"  id="exibir_unidade_home_publicacao" class="exibir-valor" placeholder="" ></div>
                    </div>
                    <div class="col-md-4 col-sm-4 form-group campo-modal-detalhes ">
                        <label for="textNome" class="control-label"> <b>Gestor</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" class="exibir-valor" name="descricao" id="exibir_unidade_home_gestor" placeholder=" "></div>
                    </div>
                    <div class="col-md-8 col-sm-8 form-group campo-modal-detalhes ">
                        <label for="textNome" class="control-label"> <b>Inscrição Cadastro Imobiliário/Endereço</b></label>
                        <div type="text" class="exibir-valor" name="" id="exibir_unidade_home_imovel" placeholder=" "></div>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group">
                        <br>
                        <h5 for="textNome" class="control-label titulo-modal-detalhes">Vencimento</h5>
                        <hr id="hr">
                    </div>
                    <div class="col-md-3 col-sm-3 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Agrupamento Energia</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" id="exibir_unidade_home_agrupamento_enel" class="modal-conteudo-conv lenght_number_dia" placeholder="Agrupamento" > </div>
                    </div>
                    <div class="col-md-3 col-sm-3 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Vencimento Energia</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" maxlength="2" min="1" max="31" name="venc_enel"  id="exibir_unidade_home_venc_enel" class="modal-conteudo-conv lenght_number_dia" placeholder="Dia" ></div>
                    </div>
                    <div class="col-md-3 col-sm-3 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Agrupamento Água</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" name="" id="exibir_unidade_home_agrupamento_saaec" class="modal-conteudo-conv lenght_number_dia" placeholder="Agrupamento" ></div>
                    </div>
                    <div class="col-md-3 col-sm-3 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Vencimento Água</b></label>
                        <div type="text" maxlength="2" min="1" max="31"   name="venc_saaec" id="exibir_unidade_home_venc_saaec" class="modal-conteudo-conv lenght_number_dia" placeholder="Dia" ></div>
                    </div>
                    <div class="col-md-6 col-sm-6 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Vencimento Internet</b></label>
                        <span class="span-modal-detalhes-label d-none d-sm-block"></span>
                        <div type="text" maxlength="2" min="1" max="31"  name="venc_internet" id="exibir_unidade_home_venc_internet" class="modal-conteudo-conv lenght_number_dia" placeholder="Dia" ></div>
                    </div>
                    <div class="col-md-6 col-sm-6 form-group campo-modal-detalhes">
                        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Vencimento Telefonia</b></label>
                        <div type="text" maxlength="2" min="1" max="31"  name="venc_telefonia" id="exibir_unidade_home_venc_telefonia" class="modal-conteudo-conv lenght_number_dia" placeholder="Dia" ></div>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group">
                        <br>
                        <h5 for="textNome" class="control-label titulo-modal-detalhes">Anexos</h5>
                        <hr id="hr">
                    </div>
                    <div id="exibir_anexos_home">

                    </div>

                </div>
                <!-- Modal footer -->
                <div id="rodapeModal" class="modal-footer">
                    <button type="button" class="btn btn-info" id="btnExiEditarUnidadeHome" >Editar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIM DO MODAL-->
<script>

    $(function($) {

        $("#btnExiEditarUnidadeHome").click(function( event ) {

            var id = $(this).val();

            $('#modalDetalhesUnidadeHome').modal("hide");

            setTimeout(function () {
                btnEditUnidadeHome(id);
            },400);

        });
    });

    function btnExidUnidadeHome(id) {
        $.LoadingOverlay("show");

        dados = {id: id, getUnidadeExibir: true};

        $('#exibir_anexos_home').empty();

        //alert(id);

        $.ajax({
            type: "POST", url: "index.php/unidade/getUnidade_detalhes", data: dados, dataType: 'json',
            success: function (result) {
                console.log(result);
                result2= result;
                result = result[0];

                if (result == 0) {
                    notifyDanger("Houve um problema em recuperar as informações da Unidade", $('#modalDetalhesUnidadeHome'));
                } else {

                    $('#ModalLabelDetalhesUnidadeHome').text(result.descricao.toUpperCase());

                    $('#exibirUnidadeHome').val(result.id);
                    $('#btnExiEditarUnidadeHome').val(result.id);
                    $('#exibir_unidade_home_codigo').text(result.codigo_unidade);
                    $('#exibir_unidade_home_descricao').text(result.descricao);
                    $('#exibir_unidade_home_venc_telefonia').text(result.venc_telefonia);
                    $('#exibir_unidade_home_venc_internet').text(result.venc_internet);
                    $('#exibir_unidade_home_venc_saaec').text(result.venc_saaec);
                    $('#exibir_unidade_home_venc_enel').text(result.venc_enel);
                    $('#exibir_unidade_home_secretaria').text(result.id_secretaria);

                    $('#exibir_unidade_home_agrupamento_enel').text(result.id_agrupamento_enel);
                    $('#exibir_unidade_home_agrupamento_saaec').text(result.id_agrupamento_saaec);

                    $('#exibir_unidade_home_lei').text(result.lei);
                    $('#exibir_unidade_home_gestor').text(result.gestor);
                    $('#exibir_unidade_home_publicacao').text(result.data_publicacao);

                    $('#exibir_unidade_home_imovel').text(result.id_imovel);

                    //$('#exibir_anexos_home').(result.id_imovel);

                    tam = result2[1].length;
                    for(i=0;i<tam;i++){
                        info = result2[1][i].id_imovel;
                        $('#exibir_anexos_home').append(
                            '<div class="form-row"><div class="col-md-12 col-sm-12 form-group campo-modal-detalhes"><label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Localização</b></label><div type="text" id="exibir_unidade_home_agrupamento_enel" class="modal-conteudo-conv lenght_number_dia" placeholder="Agrupamento" > '+info+'</div></div></div>'
                        );
                    }
                    /*
                    <div class="col-md-3 col-sm-3 form-group campo-modal-detalhes">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv"><b>Localização</b></label>
                            <div type="text" id="exibir_unidade_home_agrupamento_enel" class="modal-conteudo-conv lenght_number_dia" placeholder="Agrupamento" > </div>
                        </div>
                     */
                }
                $.LoadingOverlay("hide");
                $('#modalDetalhesUnidadeHome').modal("show");
            }
        });

    }

</script>
