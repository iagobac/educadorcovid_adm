<!-- INÍCIO DO MODAL -->
<div class="modal fade container-fluid" id="modal_analise" tabindex="" role="dialog"
     aria-labelledby="modal_label_analise" aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_label_analise">Dados de Inscrição</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class=" col-md-12 col-sm-12 form-group modal-group-conv-1">
                        <h5>Dados pessoais</h5>
                    </div>
                </div>
                <div class="form-row modal-group-conv-2">
                    <div class="col-md-2 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_id">Nº Inscrição</label>
                        <input type="text" name="analise_id" id="analise_id" class="form-control" readonly>
                    </div>
                    <div class="col-md-7 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_nome">Nome</label>
                        <input type="text" name="analise_nome" id="analise_nome" class="form-control" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_dt_nascimento">Data de Nascimento</label>
                        <input type="text" name="analise_dt_nascimento" id="analise_dt_nascimento" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_cpf">CPF</label>
                        <input type="text" name="analise_cpf" id="analise_cpf" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_rg">RG</label>
                        <input type="text" name="analise_rg" id="analise_rg" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_tel">Telefone</label>
                        <input type="text" name="analise_tel" id="analise_tel" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_escolaridade">Nível Escolaridade</label>
                        <input type="text" name="analise_escolaridade" id="analise_escolaridade" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_cad">CADUNICO?</label>
                        <input type="text" name="analise_cad" id="analise_cad" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_renda">Renda</label>
                        <input type="text" name="analise_renda" id="analise_renda" class="form-control" readonly>
                    </div>
                </div>
                <div id="analise_cadunico_div" style="display: none;">
                    <div class="form-row">
                        <div class=" col-md-12 col-sm-12 form-group modal-group-conv-1">
                            <h5>Dados presentes na base do CADUNICO</h5>
                        </div>
                    </div>
                    <div class="form-row modal-group-conv-2">
                        <div class="col-md-8 col-sm-6  ">
                            <label class="control-label font-weight-bold" for="analise_cad_nome">Nome</label>
                            <input type="text" name="analise_cad_nome" id="analise_cad_nome" class="form-control" readonly>
                        </div>
                        <div class="col-md-4 col-sm-6  ">
                            <label class="control-label font-weight-bold" for="analise_cad_renda">Renda</label>
                            <input type="text" name="analise_cad_renda" id="analise_cad_renda" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class=" col-md-12 col-sm-12 form-group modal-group-conv-1">
                        <h5>Documentação enviada</h5>
                    </div>
                </div>
                <div class="form-row modal-group-conv-2">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <td class="col-10 text-center">TÍTULO</td>
                                    <td class="col-2 text-center">ARQUIVO</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-10">Documento de identificação</td>
                                    <td class="col-2"><a id="analise_doc_identidade_link" class="btn btn-info" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_doc_laudo_social_tr">
                                    <td class="col-10">Laudo social</td>
                                    <td class="col-2"><a id="analise_doc_laudo_social_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr>
                                    <td class="col-10">Cadastro de Pessoa Física – CPF</td>
                                    <td class="col-2"><a id="analise_doc_cpf_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr>
                                    <td class="col-10">Comprovante de quitação eleitoral ou a certidão de quitação eleitoral</td>
                                    <td class="col-2"><a id="analise_doc_eleitoral_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_doc_militar_tr">
                                    <td class="col-10">Comprovante de quitação militar (sexo masculino)</td>
                                    <td class="col-2"><a id="analise_doc_militar_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_doc_ens_medio_tr">
                                    <td class="col-10">Comprovante de conclusão do ensino médio</td>
                                    <td class="col-2"><a id="analise_doc_ens_medio_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_doc_ens_sup_tr">
                                    <td class="col-10">Comprovante de Matrícula em curso de Nível Superior reconhecido pelo MEC</td>
                                    <td class="col-2"><a id="analise_doc_ens_sup_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr>
                                    <td class="col-10">Comprovante de endereço do município do Crato atualizado</td>
                                    <td class="col-2"><a id="analise_comp_end_link" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                </div>

                <form id="form_cadastrar_inscricao"  method="POST"  enctype="multipart/form-data" action="javascript:void(0)">
                    <!--                    <div class="form-row modal-group-conv-2">
                                            <div class="col-md-12 col-sm-6 form-group">
                                                <label class="control-label font-weight-bold" for="inscricao_serie">Série/Ano*</label>
                                                <select name="inscricao_serie" id="inscricao_serie" class="form-control select2_inscricao_cadastrar" value="" required>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-sm-6 form-group">
                                                <label class="control-label font-weight-bold" for="inscricao_semana">Semana*</label>
                                                <select name="inscricao_semana" id="inscricao_semana" class="form-control select2_inscricao_cadastrar" value="" required>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-sm-6 form-group">
                                                <label class="control-label font-weight-bold" for="inscricao_tipo">Tipo de inscricao*</label>
                                                <select name="inscricao_tipo" id="inscricao_tipo" class="form-control select2_inscricao_cadastrar" value="" required>
                                                </select>
                                            </div>
                                            <div  class="col-md-12 col-sm-6 form-group">
                                                <label class="control-label font-weight-bold" for="inscricao_nome">Título*</label>
                                                <input name="inscricao_nome" id="inscricao_nome" class="form-control" value="" required>
                                            </div>
                                            <div id="inscricao_link_div" class="col-md-12 col-sm-6 form-group">
                    
                                            </div>
                    
                    
                                        </div>                            -->
                    <!--Modal footer--> 
                    <div  class="modal-footer">
                        <button type="submit" class="btn btn-info">Salvar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>                            
                </form>
            </div>
        </div>
    </div>
</div>
<!--FIM DO MODAL-->

<script>

    $(function ($) {
        $.LoadingOverlay("hide");
        $('.select2_inscricao_cadastrar').select2({theme: 'bootstrap', language: 'pt-BR', width: '100%', placeholder: 'Selecione..'});

        $("#modal_inscricao_cadastrar").on('hidden.bs.modal', function () {
            $('#inscricao_nome').val('')
            $('#inscricao_arquivo').val('')
            $('#inscricao_link').val('')
        });

        $('#inscricao_tipo').change(function () {
            if ($('#inscricao_tipo').val()) {
                $('#inscricao_nome').val("");
                tipo = $('#inscricao_tipo').val();
                if (tipo == 1) {
                    $('#inscricao_link_div').empty();

                    $('#inscricao_link_div').append(
                            `<label class="control-label font-weight-bold">Arquivo:*</label>
                            <input type="file" id="inscricao_arquivo" onchange="onSelectedFile(event)" name="inscricao_arquivo" accept="image/png, image/gif, image/JPEG, image/jpg, application/pdf,application/msword" class="form-control" required>`
                            );
                }

                if (tipo != 1) {
                    $('#inscricao_link_div').empty();

                    $('#inscricao_link_div').append(
                            `
                    
                                <label class="control-label font-weight-bold" for="inscricao_arquivo">Link*</label>
                                <input type="url" name="inscricao_file_link" id="inscricao_link" class="form-control" value="" required>
                           `

                            );
                }


            }
        });


        $("#form_cadastrar_inscricao").submit(function (e) {
            $.LoadingOverlay("show");
            $.ajax({
                url: 'index.php/inscricao/salvar_inscricao',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function (resposta) {
                    //Resposta vindo em string, convertendo pra JSON   
                    resposta = JSON.parse(resposta);
                    if (resposta.status) {
                        $("#modal_inscricao_cadastrar").modal("hide");
                        $("#tabela_inscricao_div").load("index.php/inscricao/tabela_inscricao", function () {
                            $.LoadingOverlay("hide");
                        });
                        $.notify(resposta.mensagem, {type: 'success'});
                    } else {
                        notifyDanger(resposta.erro, $('#inscricao_tela_inicial'));
                    }
                    $.LoadingOverlay("hide");
                },
                error: function (error) {
                    notifyDanger("Erro ao salvar os dados!" + error, $('#modal_inscricao_cadastrar'));
                    $.LoadingOverlay("hide");
                }
            });
        });
    });
    function onSelectedFile(event) {
        if ($('#inscricao_arquivo')[0].files[0].size > 20000000) {
            notifyDanger("O arquivo não pode ser MAIOR que 20MB.", $('#modal_inscricao_cadastrar'));
            $('#inscricao_arquivo').val("");
            return;
        }
    }

</script>
