<?php
include_once 'modal/inscricao_analise_pendente.php';
?>
<div id="inscricao_tela_inicial_pendente">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-sm-12">
                <div class="page-header">
                    <h2 id="inscricao_page_inicial_pendente_title">Inscrições
                    </h2>
                </div>
                <div class="row">
                    <div class="col-2 offset-10" style="float:right;top:-113px;filter:alpha(opacity=40);opacity:.40;margin-bottom: -60px;"><img src="include/img/logo-crato.png" id="" width="100%"></div>
                </div>

                <div class="row modal-group-conv-2">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 text-center" style="background-color: #fffad4;">  <h3 id="">Listando Inscrições Pendentes</h3></div>
                        
                        <div class="col-md-12 col-sm-12 text-right"><button class="btn btn-success" style="text-align:right;margin-bottom: 20px;margin-top: 10px;" onclick="atualizaTabelaPendente()"><i class="fas fa-sync-alt"></i>  Atualizar tabela</button></div>
                        <div id="tabela_inscricao_pendente_div">
                            <?php include_once 'tabela_Inscricao_pendentes.php'; ?>
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
    function btnAnalise_pendente(id) {

        $.LoadingOverlay("show");
        $.ajax({
            type: "POST",
            url: "index.php/inscricao/get_one_inscricao",
            data: {id: id},
            dataType: 'JSON',
            success: function (resposta) {
                if (resposta.status) {
                    $('#modal_analise_pendente').modal();

                    console.log(resposta.inscricao)

                    $('#analise_pendente_id').val(resposta.inscricao.id)
                    $('#analise_pendente_parecer_id').val(resposta.inscricao.id)
                    $('#analise_pendente_parecer').val(resposta.inscricao.homolog_status).change()
                    $('#analise_pendente_nome').val(resposta.inscricao.nome)

                    var dt_nascimento = dateToBR(resposta.inscricao.dt_nascimento)

                    $('#analise_pendente_dt_nascimento').val(dt_nascimento)
                    $('#analise_pendente_cpf').val(resposta.inscricao.cpf)
                    $('#analise_pendente_rg').val(resposta.inscricao.rg)
                    $('#analise_pendente_tel').val(resposta.inscricao.tel)

                    if (resposta.inscricao.nivel_escolaridade == 1) {
                        $('#analise_pendente_escolaridade').val('NÍVEL MÉDIO')
                    } else {
                        $('#analise_pendente_escolaridade').val('NÍVEL SUPERIOR')
                    }
                    if (resposta.inscricao.cadunico == 1) {
                        $('#analise_pendente_cad').val('SIM')
                    } else {
                        $('#analise_pendente_cad').val('NÃO')
                    }

                    $('#analise_pendente_renda').val(resposta.inscricao.renda)


                    if (resposta.inscricao.homolog_status != 0) {
                        $('#analise_pendente_msg').text('ATENÇÃO! Essa inscrição já foi analisada.')
                    } else {
                        $('#analise_pendente_msg').text('')
                    }


                    if (resposta.cad != 0) {
                        $('#analise_pendente_cadunico_div').css('display', 'block');
                        $('#analise_pendente_cad_nome').val(resposta.cad.nome)
                        $('#analise_pendente_cad_renda').val('R$ ' + resposta.cad.renda + ',00')
                    } else {
                        $('#analise_pendente_cadunico_div').css('display', 'none');
                        $('#analise_pendente_cad_nome').val()
                        $('#analise_pendente_cad_renda').val()
                    }

                    //DOCS
                    if (resposta.inscricao.foto_identidade != '') {
                        $('#analise_pendente_doc_identidade_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_identidade)
                    } else {
                        $('#analise_pendente_doc_identidade_link').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_laudo_social != '') {
                        $('#analise_pendente_doc_laudo_social_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_laudo_social)
                    } else {
                        $('#analise_pendente_doc_laudo_social_tr').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_cpf != '') {
                        $('#analise_pendente_doc_cpf_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_cpf)
                    } else {
                        $('#analise_pendente_doc_cpf_link').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_comp_eleitoral != '') {
                        $('#analise_pendente_doc_eleitoral_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_comp_eleitoral)
                    } else {
                        $('#analise_pendente_doc_eleitoral_link').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_militar != '') {
                        $('#analise_pendente_doc_militar_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_militar)
                    } else {
                        $('#analise_pendente_doc_militar_tr').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_comp_ens_medio != '') {
                        $('#analise_pendente_doc_ens_medio_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_comp_ens_medio)
                    } else {
                        $('#analise_pendente_doc_ens_medio_tr').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_comp_ens_superior != '') {
                        $('#analise_pendente_doc_ens_sup_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_comp_ens_superior)
                    } else {
                        $('#analise_pendente_doc_ens_sup_tr').css('display', 'none');
                    }
                    if (resposta.inscricao.foto_endereco != '') {
                        $('#analise_pendente_comp_end_link').prop('href', 'http://servicos.crato.ce.gov.br/educadorcovid/documents/' + resposta.inscricao.foto_endereco)
                    } else {
                        $('#analise_pendente_comp_end_link').css('display', 'none');
                    }

                    $.LoadingOverlay("hide");
                } else {
                    console.log(resposta)
                    notifyDanger("Erro ao carregar documentação!", $('#inscricao_tela_inicial_pendente'));
                }
                $.LoadingOverlay("hide");
            }, error: function (error) {
                console.log(resposta)
                notifyDanger("Erro ao carregar os dados!" + error, $('#inscricao_tela_inicial_pendente'));
                $.LoadingOverlay("hide");
            }
        });
    }

    function dateToBR(date)
    {
        return date.split('-').reverse().join('/');
    }

    function atualizaTabelaPendente() {
        $.LoadingOverlay("show");
        $("#tabela_inscricao_pendente_div").load("index.php/inscricao/tabela_pendentes", function () {
            $.LoadingOverlay("hide");
        });
    }

</script>