<!-- INÍCIO DO MODAL -->
<div class="modal fade container-fluid" id="modal_analise_pendente" tabindex="" role="dialog"
     aria-labelledby="modal_label_analise_pendente" aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_label_analise_pendente">Dados de Inscrição</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h6 class="text-center"  style="padding-top: 10px; color: #ff8940;" id="analise_pendente_msg"></h6>
            <div class="modal-body">
                <div class="form-row">
                    <div class=" col-md-12 col-sm-12 form-group modal-group-conv-1">
                        <h5>Dados pessoais</h5>
                    </div>
                </div>
                <div class="form-row modal-group-conv-2">
                    <div class="col-md-2 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_id">Nº Inscrição</label>
                        <input type="text" name="analise_pendente_id" id="analise_pendente_id" class="form-control" readonly>
                    </div>
                    <div class="col-md-7 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_nome">Nome</label>
                        <input type="text" name="analise_pendente_nome" id="analise_pendente_nome" class="form-control" readonly>
                    </div>
                    <div class="col-md-3 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_dt_nascimento">Data de Nascimento</label>
                        <input type="text" name="analise_pendente_dt_nascimento" id="analise_pendente_dt_nascimento" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_cpf">CPF</label>
                        <input type="text" name="analise_pendente_cpf" id="analise_pendente_cpf" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_rg">RG</label>
                        <input type="text" name="analise_pendente_rg" id="analise_pendente_rg" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_tel">Telefone</label>
                        <input type="text" name="analise_pendente_tel" id="analise_pendente_tel" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_escolaridade">Nível Escolaridade</label>
                        <input type="text" name="analise_pendente_escolaridade" id="analise_pendente_escolaridade" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_cad">CADUNICO?</label>
                        <input type="text" name="analise_pendente_cad" id="analise_pendente_cad" class="form-control" readonly>
                    </div>
                    <div class="col-md-4 col-sm-6  ">
                        <label class="control-label font-weight-bold" for="analise_pendente_renda">Renda</label>
                        <input type="text" name="analise_pendente_renda" id="analise_pendente_renda" class="form-control" readonly>
                    </div>
                </div>
                <div id="analise_pendente_cadunico_div" style="display: none;">
                    <div class="form-row">
                        <div class=" col-md-12 col-sm-12 form-group modal-group-conv-1">
                            <h5>Dados presentes na base do CADUNICO</h5>
                        </div>
                    </div>
                    <div class="form-row modal-group-conv-2">
                        <div class="col-md-8 col-sm-6  ">
                            <label class="control-label font-weight-bold" for="analise_pendente_cad_nome">Nome</label>
                            <input type="text" name="analise_pendente_cad_nome" id="analise_pendente_cad_nome" class="form-control" readonly>
                        </div>
                        <div class="col-md-4 col-sm-6  ">
                            <label class="control-label font-weight-bold" for="analise_pendente_cad_renda">Renda</label>
                            <input type="text" name="analise_pendente_cad_renda" id="analise_pendente_cad_renda" class="form-control" readonly>
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
                        <table class="table table-bordered table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <td class="col-10 text-center">TÍTULO</td>
                                    <td class="col-2 text-center">ARQUIVO</td>
                                </tr>
                            </thead>
                            <tbody>
<!--                                <tr>
                                    <td class="col-9"></td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_todos_link" class="btn btn-primary text-center" onclick="exibirTudoPendentes()" href="">EXIBIR TODOS <i class='fa fa-edit'></i></a></td>
                                </tr>-->
                                <tr>
                                    <td class="col-9">Documento de identificação</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_identidade_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_pendente_doc_laudo_social_tr">
                                    <td class="col-9">Laudo social</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_laudo_social_link"  target="_blank"class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr>
                                    <td class="col-9">Cadastro de Pessoa Física – CPF</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_cpf_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr>
                                    <td class="col-9">Comprovante de quitação eleitoral ou a certidão de quitação eleitoral</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_eleitoral_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_pendente_doc_militar_tr">
                                    <td class="col-9">Comprovante de quitação militar (sexo masculino)</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_militar_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_pendente_doc_ens_medio_tr">
                                    <td class="col-9">Comprovante de conclusão do ensino médio</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_ens_medio_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr id="analise_pendente_doc_ens_sup_tr">
                                    <td class="col-9">Comprovante de Matrícula em curso de Nível Superior reconhecido pelo MEC</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_doc_ens_sup_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>
                                <tr>
                                    <td class="col-9">Comprovante de endereço do município do Crato atualizado</td>
                                    <td class="col-3 text-center"><a id="analise_pendente_comp_end_link" target="_blank" class="btn btn-info text-center" href="">ARQUIVO <i class='fa fa-edit'></i></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                </div>

                <form id="form_pendente_deferir_indeferir"  method="POST"  enctype="multipart/form-data" action="javascript:void(0)">
                    <div class="form-row">
                        <div class=" col-md-12 col-sm-12 form-group modal-group-conv-1">
                            <h5>Parecer</h5>
                        </div>
                    </div>
                    <div class="form-row modal-group-conv-2">
                        <div class="col-md-12 col-sm-6 form-group">
                            <input type="hidden" id="analise_pendente_parecer_id" name="analise_pendente_parecer_id">
                            <label class="control-label font-weight-bold" for="analise_pendente_parecer">Deferir/Indeferir</label>
                            <select name="analise_pendente_parecer" id="analise_pendente_parecer" class="form-control" value="" required>
                                <option value="0" style="background-color: #ffffff" disabled="" selected="">Selecione...</option>
                                <option value="1" style="background-color: #d8f5d5">DEFERIDO</option>
                                <option value="2" style="background-color: #f5d7d5">INDEFERIDO</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-sm-6 form-group" id="analise_pendente_parecer_motivo_div" style="display: none;">
                            <label class="control-label font-weight-bold" for="analise_pendente_parecer_motivo">Motivo</label>
                            <input type="text" name="analise_pendente_parecer_motivo" id="analise_pendente_parecer_motivo" class="form-control">
                        </div>
                    </div>                            
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
        $('.select2_analise_pendente').select2({theme: 'bootstrap', language: 'pt-BR', width: '100%', placeholder: 'Selecione..'});

        $("#modal_analise_pendente").on('hidden.bs.modal', function () {
            $('#analise_pendente_msg').text('');
            $('#analise_pendente_cadunico_div').css('display', 'none');
            $('#analise_pendente_parecer').css('background-color', '#ffffff');
            $('#analise_pendente_parecer_motivo_div').css('display', 'none');
            $('#analise_pendente_parecer_motivo').prop('required', false);
            $('#analise_pendente_parecer_motivo').val('');
            $('#analise_pendente_parecer').val().change()

        });

        $('#analise_pendente_parecer').change(function () {
            if ($('#analise_pendente_parecer').val() == 1) {
                $('#analise_pendente_parecer').css('background-color', '#d8f5d5');
                $('#analise_pendente_parecer_motivo_div').css('display', 'none');
                $('#analise_pendente_parecer_motivo').prop('required', false);

            } else if ($('#analise_pendente_parecer').val() == 2) {
                $('#analise_pendente_parecer').css('background-color', '#f5d7d5');
                $('#analise_pendente_parecer_motivo_div').css('display', 'block');
                $('#analise_pendente_parecer_motivo').prop('required', true);

            } else {
                $('#analise_pendente_parecer').css('background-color', '#ffffff');
                $('#analise_pendente_parecer_motivo_div').css('display', 'none');
                $('#analise_pendente_parecer_motivo').prop('required', false);
            }
        })


        $("#form_pendente_deferir_indeferir").submit(function (e) {
            $.LoadingOverlay("show");
            var formData = new FormData();
            homolog_status = $("#analise_pendente_parecer").val();
            id = $("#analise_pendente_parecer_id").val();
            if (homolog_status == 1) {
                motivo = 'DEFERIDO';
            } else {
                motivo = $("#analise_pendente_parecer_motivo").val();
            }
            formData.append('homolog_status', homolog_status);
            formData.append('id', id);
            formData.append('motivo', motivo);

            $.ajax({
                url: 'index.php/inscricao/deferir_indeferir_inscricao',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (resposta) {
                    if (resposta.status) {
                        $('#modal_analise_pendente').modal("hide");
                        $.LoadingOverlay("show");
                        $("#tabela_inscricao_pendente_div").load("index.php/inscricao/tabela_pendentes", function () {
                            $.LoadingOverlay("hide");
                        });
                        $("#tabela_inscricao_todas_div").load("index.php/inscricao/tabela_todas", function () {
                        });
                        $("#tabela_inscricao_deferida_div").load("index.php/inscricao/tabela_def", function () {
                        });
                        $("#tabela_inscricao_indeferida_div").load("index.php/inscricao/tabela_indef", function () {
                        });

                    } else {
                        notifyDanger("Erro ao salvar os dados!", $('#inscricao_tela_inicial_pendente'));
                    }
                    $.LoadingOverlay("hide");
                }, error: function (error) {
                    console.log(resposta)
                    notifyDanger("Erro ao carregar os dados!" + error, $('#inscricao_tela_inicial_pendente'));
                    $.LoadingOverlay("hide");
                }
            });
        });
    });
    function exibirTudoPendentes() {
        console.log('aqui')
        $('#analise_pendente_doc_identidade_link').click()
        $('#analise_pendente_doc_laudo_social_link').click()
        $('#analise_pendente_doc_cpf_link').click()
        $('#analise_pendente_doc_eleitoral_link').click()
        $('#analise_pendente_doc_militar_link').click()
        $('#analise_pendente_doc_ens_medio_link').click()
        $('#analise_pendente_doc_ens_sup_link').click()
        $('#analise_pendente_comp_end_link').click()
    }
    function onSelectedFile(event) {
        if ($('#inscricao_arquivo')[0].files[0].size > 20000000) {
            notifyDanger("O arquivo não pode ser MAIOR que 20MB.", $('#modal_inscricao_cadastrar'));
            $('#inscricao_arquivo').val("");
            return;
        }
    }

</script>
