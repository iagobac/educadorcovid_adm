<?php
//include_once  $_SERVER['DOCUMENT_ROOT'].'/controllers/unidade.php';
?>
<!-- INÍCIO DO MODAL -->
<div class="modal fade" id="modalCadastrarUnidade" tabindex="" role="dialog"
     aria-labelledby="ModalLabelCadastrarUnidade" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabelCadastrarUnidade">Cadastrar Unidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formCadUnidade" enctype="multipart/form-data" action="javascript:func()">
                <div class="modal-body">
                    <div id="statusCadUnidade"></div>
                    <input type="hidden" name="cadUnidade" id="cadUnidade" value="">
                    <div class="form-row col-md-12">
                        <div class="col-md-12 col-sm-12">
                            <h6 class="control-label "><b>Dados da Unidade</b></h6>
                            <hr/>
                        </div>
                        <div class="col-md-4 col-sm-4 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Código da Unidade Administrativa</label> <br>
                            <input  type="number" name="codigo_unidade" class="form-control modal-conteudo-conv number" id="unidade_codigo" required>
                        </div>
                        <div class="col-md-8 col-sm-8 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Unidade Administrativa</label>
                            <input  type="text" class="form-control" name="descricao" id="unidade_descricao" placeholder="" required>
                        </div>
                        <div class="col-md-4 col-sm-4 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Unidade Gestora</label>
                            <select class="form-control uppercase" id="id_secretaria" name="id_secretaria"
                                    value=""
                                    required>
                                <?php imprimir_campos_secretaria($secretarias) ?>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-4 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Lei de Denominação</label>
                            <input  type="text" class="form-control" name="lei" id="unidade_lei" placeholder="" >
                        </div>
                        <div class="col-md-4 col-sm-4 form-group modal-group-conv-1" id="div_unidade_data_val_contrato">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Data da Publicação</label>
                            <input type="text" name="data_publicacao" id="unidade_data_publicacao" class="form-control modal-conteudo-conv data" placeholder="" >
                        </div>
                        <div class="col-md-6 col-sm-6 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Gestor</label>
                            <input  type="text" class="form-control" name="gestor" id="unidade_gestor" placeholder="" >
                        </div>
                        <div class="col-md-6 col-sm-6 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Inscrição Cadastro Imobiliário/Descrição</label>
                            <select class="js-example-basic-single" id="id_imovel2" name="id_imovel" required>

                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <h6 class="control-label"><b>Vencimentos</b></h6>
                            <hr/>
                        </div>
                        <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Agrupamento Energia</label>
                            <select class="form-control uppercase" id="id_cad_agru_enel" name="id_agrupamento_enel"
                                    value="">

                                <?php //imprimir_campos_agru_enel_cad($agrupamentos_enel) ?>

                            </select>
                        </div>
                        <div id="div_unidade_venc_enel" class="col-md-3 col-sm-3 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Energia</label>
                            <input type="number" name="venc_enel" maxlength="2" min="01" max="31" id="unidade_venc_enel" class="form-control modal-conteudo-conv number_dia" placeholder="dia">
                        </div>
                        <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Agrupamento Água</label>
                            <select class="form-control uppercase" id="id_cad_agru_saaec" name="id_agrupamento_saaec"
                                    value="">
                                    <?php //imprimir_campos_agru_saaec_cad($agrupamentos_saaec) ?>

                            </select>
                        </div>
                        <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Água</label>
                            <input type="number" name="venc_saaec" id="unidade_venc_saaec" maxlength="2" min="01" max="31" class="form-control modal-conteudo-conv number_dia" placeholder="Dia" >
                        </div>
                        <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Internet</label>
                            <input type="number" maxlength="2" min="1" max="31" name="venc_internet" id="unidade_venc_internet" class="form-control modal-conteudo-conv number_dia" placeholder="Dia" >
                        </div>
                        <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
                            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Telefonia</label>
                            <input type="number" maxlength="2" min="1" max="31" name="venc_telefonia" id="unidade_venc_telefonia" class="form-control modal-conteudo-conv number_dia" placeholder="Dia" >
                        </div>
                    </div>
                    </div>
                    <!-- Modal footer -->
                    <div id="rodapeModal" class="modal-footer">
                        <button type="submit" id="btnEditConvenioSimecSalvar" class="btn btn-info">Salvar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
            </form>

        </div>
    </div>
</div>
</div>
<!--FIM DO MODAL-->

<script>

    function maxLengthCheck(object){
        if (object.value.length > object.maxLength)
            object.value = object.value.slice(0, object.maxLength)
    }

    $(function($) {

        $('.js-example-basic-single').select2({
            theme:'bootstrap'
        });


        $('#modalCadastrarUnidade').on('show.bs.modal', function () {
            $('#imovel_imov_prop_locado').val("");

            $.LoadingOverlay("show");
            dados = {atualizarSelect: 1};

            $.post('index.php/home/getFonteRecurso', dados, function (resposta) {
                //console.log(resposta);
                array_recurso = resposta;
                $('#unidade_tipo_recurso').empty();
                $('#unidade_tipo_recurso').append(array_recurso);
            });

            $.post('index.php/home/getAgruSaaec_cad', dados, function (resposta) {
                //console.log(resposta);
                array_agru_saaec = resposta;
                $('#id_cad_agru_saaec').empty();
                $('#id_cad_agru_saaec').append(array_agru_saaec);

            }).done(function () {
                $.post('index.php/home/getAgruEnel_cad', dados, function (resposta) {
                   // console.log(resposta);
                    array_agru_enel = resposta;
                    $('#id_cad_agru_enel').empty();
                    $('#id_cad_agru_enel').append(array_agru_enel);

                }).done(function () {
                   // $.LoadingOverlay("hide");
                    $.post('index.php/home/selectImovel', dados, function (resposta) {
                        //console.log(resposta);
                        array_select_unidade = resposta;
                        $('#id_imovel2').empty();
                        $('#id_imovel2').append(array_select_unidade.toUpperCase());

                    }).done(function () {
                        $.LoadingOverlay("hide");
                    });
                });
            });



        });

        $( "#id_cad_agru_saaec" ).click(function() {
            if($("#id_cad_agru_saaec").val()==""){
                $('#unidade_venc_saaec').val("");
                $('#unidade_venc_saaec').prop('disabled', false);
                $('#unidade_venc_saaec').prop('required', true);
            }
        });

        $( "#id_cad_agru_enel" ).click(function() {
            if($("#id_cad_agru_enel").val()==""){
                $('#unidade_venc_enel').val("");
                $('#unidade_venc_enel').prop('disabled', false);
                $('#unidade_venc_enel').prop('required', true);
            }
        });

        $( "#id_cad_agru_saaec" ).click(function() {

            if(!$("#id_cad_agru_saaec").val()==""){
                var id = $("#id_cad_agru_saaec").val();

                dados = {id: id, tipo:2};

                $.ajax({
                    type: "POST", url: "index.php/home/selectAgrupamento", data: dados, dataType: 'json',
                    success: function (result) {
                        console.log(result);

                        if (result == false) {
                            notifyDanger("Houve um problema em recuperar as informações do Agrupamento", $('#modalCadastrarUnidade'));
                        } else {
                            $('#unidade_venc_saaec').val(result.vencimento);
                            $('#unidade_venc_saaec').prop('disabled', true);
                        }
                    }, error: function (error) {
                    }

                });
            }

        });

        $( "#id_cad_agru_enel" ).click(function() {
            if(!$("#id_cad_agru_enel").val()==""){
                var id = $("#id_cad_agru_enel").val();

                dados = {id: id, tipo:1};

                $.ajax({
                    type: "POST", url: "index.php/home/selectAgrupamento", data: dados, dataType: 'json',
                    success: function (result) {
                        console.log(result);

                        if (result == false) {
                            notifyDanger("Houve um problema em recuperar as informações do Agrupamento", $('#modalCadastrarUnidade'));
                        } else {
                            $('#unidade_venc_enel').val(result.vencimento);
                            $('#unidade_venc_enel').prop('disabled', true);
                        }
                    }, error: function (error) {
                    }

                });
            }
        });


        $( "#unidade_imov_prop_locado" ).click(function() {
            var option = $('#unidade_imov_prop_locado').val();
            if(option==1){
                $("#div_unidade_numero_contrato").hide();
                $("#unidade_numero_contrato").val(null);
                $("#div_unidade_data_val_contrato").hide();
                $("#unidade_data_val_contrato").val(null);
            }else{
                $("#div_unidade_numero_contrato").show();
                $("#div_unidade_data_val_contrato").show();
            }
        });

        $('#modalCadastrarUnidade').on('hidden.bs.modal', function () {
            $("#formCadUnidade")[0].reset();
            $('#unidade_venc_enel').prop('disabled', false);
            $('#unidade_venc_saaec').prop('disabled', false);
        });

        function notificacao(local_data){
            $.notify({
                message: 'Data inválida em '+ local_data
            }, {
                type: 'danger',
                element: $('#modalCadastrarUnidade')
            });
        }

        $('#arquivo_escritura_cad').bind('change', function() {
            if(this.files[0].size>10000000){
                notifyDanger("Tamanho máximo da Escritura é de 10 Mb", $('#modalCadastrarUnidade'));
                $("#arquivo_escritura" ).val('');
            }
        });

        $('#arquivo_termo_cad').bind('change', function() {
            if(this.files[0].size>10000000){
                notifyDanger("Tamanho máximo do Termo é de 10 Mb", $('#modalCadastrarUnidade'));
                $("#arquivo_termo" ).val('');
            }
        });

        function verificar_upload(id_arquivo) {
            console.log("verificar_upload");
            console.log("id_arquivo"+id_arquivo);

            var arquivo = $("#"+id_arquivo).val();

            extensoes_permitidas = new Array(".txt",".xml", ".xls",".csv",".pdf",".png",".jpeg","tif");

            if (!arquivo) {

                //console.log("arq inexistente");
                console.log("upload 321");
                return true;
            }else {
                console.log("arq existe");
                //recupero a extensão deste nome de arquivo
                extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase();
                //comprovo se a extensão está entre as permitidas
                permitida = false;
                for (var i = 0; i < extensoes_permitidas.length; i++) {
                    if (extensoes_permitidas[i] == extensao) {
                        permitida = true;
                        break;
                    }
                }
                if (!permitida) {
                    if(id_arquivo=="arquivo_escritura"){
                        meuerro = "Verifique o campo Escritura, as extensões permitidas são: " + extensoes_permitidas.join();
                    }else{
                        meuerro = "Verifique o campo Contrato, as extensões permitidas são: " + extensoes_permitidas.join();
                    }
                    //$("#statusArquivo").html(meuerro);
                    notifyDanger(meuerro, $('#modalCadastrarUnidade'));

                    console.log("344 "+meuerro);
                    return false;
                } else {
                    console.log("tudo certo para submeter")
                    //submeto!
                    // alert ("Tudo correto. Vou submeter o formulário.");
                    //var formData = new FormData();
                    console.log("351");
                    return true;
                }
            }

        }

        $("#formCadUnidade").submit(function( event ) {


            var data_pub = $('#unidade_data_publicacao').val();

            if(!isDate(data_pub) && !data_pub=="" ){
                notifyDanger("Data inválida no campo: Data da publicação", $('#modalCadastrarUnidade'));
            } else {

                if( verificar_upload("arquivo_termo_cad") && verificar_upload("arquivo_escritura_cad")) {
                    $.LoadingOverlay("show");

                    $.post('index.php/home/cadastrar/', $("#formCadUnidade").serialize(), function (resposta) {
                        console.log(resposta);
                        if (resposta == "true") {
                            //console.log(resposta);
                            if (resposta == "true") {
                                $("#modalCadastrarUnidade").modal("toggle");
                                $("#tabela_unidade").load("index.php/home/tabela_unidade",function () {
                                    $.LoadingOverlay("hide");
                                });
                                //$("#formCadUnidade")[0].reset();
                                $.notify({
                                    message: 'Salvo com sucesso'
                                }, {
                                    type: 'success'
                                });
                            } else {
                                if (resposta == 2) {
                                    $.LoadingOverlay("hide");
                                    notifyDanger("Código da Unidade repetido!", $('#modalCadastrarUnidade'));
                                }
                            }
                        }

                    });

                }else{
                    console.log("upload false");
                }
            }

        });
    });

</script>