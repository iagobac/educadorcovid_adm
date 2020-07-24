<!-- <?php
//include_once  $_SERVER['DOCUMENT_ROOT'].'/controllers/unidade.php';
?>
<!-- INÍCIO DO MODAL -->
<div class="modal fade" id="modalEditarUnidadeHome"  role="dialog"
aria-labelledby="ModalLabelEditarUnidadeHome" aria-hidden="true">
<div class="modal-dialog modal-lg modal-xl" role="dialog">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title" id="">
        <h4 >Editar</h4>
        <h5 id="ModalLabelEditarUnidadeHome"></h5>
      </div>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form id="formEditUnidadeHome" action="javascript:func()">
      <div class="modal-body">
        <div id="statusEditUnidadeHome"></div>
        <input type="hidden" name="editUnidade" id="editUnidadeHome" value="">
        <div class="form-row col-md-12">
          <div class="col-md-12 col-sm-12">
            <h6 class="control-label "><b>Dados da Unidade</b></h6>
            <hr/>
          </div>

          <div class="col-md-4 col-sm-4 form-group modal-group-conv-1">
            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Código da Unidade Administrativa</label> <br>
            <input type="number" name="codigo_unidade" class="form-control modal-conteudo-conv" id="edit_unidade_home_codigo" required>
          </div>
          <div class="col-md-8 col-sm-8 form-group modal-group-conv-1">
            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Unidade Administrativa</label>
            <input type="text" class="form-control" name="descricao" id="edit_unidade_home_descricao" placeholder="" required>
          </div>
          <div class="col-md-4 col-sm-4 form-group modal-group-conv-1">
            <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Unidade Gestora</label>
            <select class="form-control uppercase" id="edit_unidade_home_secretaria" name="id_secretaria"
            value=""
            required>
            <?php imprimir_campos_secretaria($secretarias) ?>
          </select>
        </div>
        <div class="col-md-4 col-sm-4 form-group modal-group-conv-1">
          <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Lei de Denominação</label>
          <input  type="text" class="form-control" name="lei" id="edit_unidade_home_lei" placeholder="" >
        </div>
        <div class="col-md-4 col-sm-4 form-group modal-group-conv-1" id="div_unidade_data_val_contrato">
          <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Data da Publicação</label>
          <input type="text" name="data_publicacao" id="edit_unidade_home_data_publicacao" class="form-control modal-conteudo-conv data" placeholder="" >
        </div>
        <div class="col-md-6 col-sm-6 form-group modal-group-conv-1">
          <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Gestor</label>
          <input  type="text" class="form-control" name="gestor" id="edit_unidade_home_gestor" placeholder="" >
        </div>
        <div class="col-md-6 col-sm-6 form-group modal-group-conv-1">
          <label for="edit_unidade_home_id_imovel" class="control-label font-weight-bold modal-titulo-conv">Inscrição Cadastro Imobiliário/Descrição</label>
          <select class="js-example-basic-single select2" id="edit_unidade_home_id_imovel" name="id_imovel" required>

          </select>
        </div>
        <div class="col-md-12 col-sm-12">
          <h6 class="control-label "><b>Vencimentos</b></h6>
          <hr/>
        </div>
        <div class="col-md-12 col-sm-12 form-group">
          <div class="checkbox">
            <label><input type="checkbox" value="" id="checkbox_venc_edit_home">Usar Vencimentos do Imóvel</label>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
          <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Agrupamento Energia</label>
          <select class="form-control uppercase" id="id_edit_agru_home_enel" name="id_agrupamento_enel"
          value="">
          <?php //imprimir_campos_agru_enel($agrupamentos_enel) ?>
        </select>
      </div>
      <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Energia</label>
        <input type="number" maxlength="2" min="1" max="31" name="venc_enel" id="edit_unidade_home_venc_enel" class="form-control number_dia" placeholder="" >
      </div>
      <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
        <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Agrupamento Água</label>
        <select class="form-control uppercase" id="id_edit_agru_home_saaec" name="id_agrupamento_saaec"
        value="">
        <?php //imprimir_campos_agru_saaec($agrupamentos_saaec) ?>
      </select>
    </div>
    <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
      <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Água</label>
      <input type="number" maxlength="2" min="1" max="31" name="venc_saaec" id="edit_unidade_home_venc_saaec" class="form-control number_dia" placeholder="" >
    </div>
    <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
      <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Internet</label>
      <input type="number" maxlength="2" min="1" max="31" name="venc_internet" id="edit_unidade_home_venc_internet" class="form-control number_dia" placeholder="" >
    </div>
    <div class="col-md-3 col-sm-3 form-group modal-group-conv-1">
      <label for="textNome" class="control-label font-weight-bold modal-titulo-conv">Vencimento Telefonia</label>
      <input type="number" maxlength="2" min="1" max="31" name="venc_telefonia" id="edit_unidade_home_venc_telefonia" class="form-control modal-conteudo-conv number_dia" placeholder="" >
    </div>

  </div>
  <div class="">
    <div class="form-row">
      <h6 class="control-label "><b>Anexos</b></h6>
      &ensp;&ensp;<button type="button" class="btn btn-info add-anexo-edit" id="btn_add_anexo_home_edit" href="javascript:void(0)"><i class="fa fa-plus"></i></button>
    </div>
    <hr/>
  </div>
  <div class="">
    <!--
    <div class="form-row"><div class="col-md-8 col-sm-8 col-8 form-group"><select class="js-example-basic-single2" id="id_imovel_anexo" name="id_imovel_anexo[]">'</select></div><div class="col-md-4 col-sm-4 col-4 form-group"><button type="button" class="btn btn-info add-anexo-edit" id="" href="javascript:void(0)"><i class="fa fa-remove"></i></button></div></div>
  -->
</div>
<div class="" id="UnidadesEditHome">
</div>
</div>
<!-- Modal footer -->
<div id="rodapeModal" class="modal-footer">
  <button type="submit" id="btnEditHomeSalvar" class="btn btn-info">Salvar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
</div>
</form>

</div>
</div>
</div>
</div>
<!--FIM DO MODAL-->

<script>

$('#formEditUnidadeHome').on('show.bs.modal', function (e) {
  $('#edit_unidade_home_id_imovel').select2({
    theme:'bootstrap',
    width:"100%"
  });
});

$(function($) {


  var dados_vencimento_edit;
  $('#edit_unidade_home_id_imovel').select2({
    theme:'bootstrap',
    width:"100%"
  });
  $( "#checkbox_venc_edit_home" ).click(function() {

    if($('#checkbox_venc_edit_home').is(':checked')){
      var result = dados_vencimento_edit;
      $("#id_edit_agru_home_enel").val("");
      $("#id_edit_agru_home_saaec").val("");
      $("#edit_unidade_home_venc_enel").val("");
      $("#edit_unidade_home_venc_saaec").val("");

      $("#edit_unidade_home_venc_internet").val("");
      $("#edit_unidade_home_venc_telefonia").val("");

      if(result.id_agrupamento_enel!="NÃO INFORMADO"){
        $("#id_edit_agru_home_enel").val(result.id_agrupamento_enel);
        $("#edit_unidade_home_venc_enel").val(result.venc_enel);
        //$('#unidade_venc_enel').prop('disabled', true);
        $('#edit_unidade_home_venc_enel').prop('readonly',false);

      }else{
        $("#edit_unidade_home_venc_enel").val(result.venc_enel);
      }
      if(result.id_agrupamento_saaec!="NÃO INFORMADO"){
        $("#id_edit_agru_home_saaec").val(result.id_agrupamento_saaec);
        $("#edit_unidade_home_venc_saaec").val(result.venc_saaec);
        //$('#unidade_venc_saaec').prop('disabled', true);
        $('#edit_unidade_home_venc_saaec').prop('readonly',true);

      }else{
        $("#edit_unidade_home_venc_saaec").val(result.venc_saaec);
      }

      $("#edit_unidade_home_venc_internet").val(result.venc_internet);
      $("#edit_unidade_home_venc_telefonia").val(result.venc_telefonia);


      $('#edit_unidade_home_venc_enel').prop('readonly', true);
      $('#edit_unidade_home_venc_saaec').prop('readonly', true);

      $('#edit_unidade_home_venc_internet').prop('readonly', true);
      $('#edit_unidade_home_venc_telefonia').prop('readonly', true);

      $('#id_edit_agru_home_enel').css({"background-color": "#e9ecef"});
      $('#id_edit_agru_home_saaec').css({"background-color": "#e9ecef"});

      $('#id_edit_agru_home_enel').css('pointer-events','none');
      $('#id_edit_agru_home_saaec').css('pointer-events','none');

    }else{

      $('#edit_unidade_home_venc_enel').prop('readonly',false);
      $('#edit_unidade_home_venc_saaec').prop('readonly',false);
      $('#edit_unidade_home_venc_telefonia').prop('readonly',false);
      $('#edit_unidade_home_venc_internet').prop('readonly',false);
      $('#id_edit_agru_home_enel').prop('readonly', false);
      $('#id_edit_agru_home_saaec').prop('readonly', false);

      $("#edit_unidade_home_venc_enel").val("");
      $("#edit_unidade_home_venc_saaec").val("");
      $("#edit_unidade_home_venc_telefonia").val("");
      $("#edit_unidade_home_venc_internet").val("");
      $("#id_edit_agru_home_enel").val("");
      $("#id_edit_agru_home_saaec").val("");

      $('#id_edit_agru_home_enel').css({"background-color": "white"});
      $('#id_edit_agru_home_saaec').css({"background-color": "white"});

      $('#id_edit_agru_home_enel').css('pointer-events','all');
      $('#id_edit_agru_home_saaec').css('pointer-events','all');
    }
  });

  $( "#btn_add_anexo_home_edit" ).click(function() {
    $.post('index.php/unidade/selectImovel', dados, function (resposta) {
      // console.log(resposta);
      array_edit_home_agru_enel = resposta;

    }).done(function () {
      // $.LoadingOverlay("hide");
      $.post('index.php/unidade/selectImovel', dados, function (resposta) {
        //console.log(resposta);
        array_edit_home_select_imovel = resposta;
        $("#UnidadesEditHome").append('<div class="form-row"><div class="col-md-8 col-sm-8 col-8 form-group"><select class="js-example-basic-single2" id="" name="id_imovel_anexo[]">'+resposta+'</select></div><div class="col-md-4 col-sm-4 col-4 form-group"><button type="button" class="btn btn-danger remover-anexo" id="" href="javascript:void(0)"><i class="fa fa-remove"></i></button></div></div>');
        //$("#Unidades").append('<div class="col-md-8 col-sm-8 col-8 form-group"><select class="js-example-basic-single2" id="" name="id_imovel_anexo[]" required>'+resposta+'</select></div><div class="col-md-4 col-sm-4 col-4 form-group input-group"><button type="button" class="btn btn-danger" id="" href="javascript:void(0)"><i class="fa fa-remove"></i></button></div>');
      }).done(function () {
        $('.js-example-basic-single2').select2({
          theme:'bootstrap',
          width:"100%"
        });

        $( ".remover-anexo" ).click(function() {
          $(this).parent().parent().remove();
          //console.log("remove");
        });
      });
    });
  });

  $( "#edit_unidade_home_id_imovel" ).change(function() {

    if($("#edit_unidade_home_id_imovel").val()!=""){

      var id = $("#edit_unidade_home_id_imovel").val();

      dados = {id: id};

      $.ajax({
        type: "POST", url: "index.php/imovel/getImovel_detalhes", data: dados, dataType: 'json',
        success: function (result) {
          console.log(result);
          dados_vencimento_edit = result;

          if (result == false) {
            notifyDanger("Houve um problema em recuperar as informações do do Imóvel", $('#modalCadastrarUnidade'));
          } else {
            $("#id_edit_agru_home_enel").val("");
            $("#id_edit_agru_home_saaec").val("");
            $("#edit_unidade_home_venc_enel").val("");
            $("#edit_unidade_home_venc_saaec").val("");

            $("#edit_unidade_home_venc_internet").val("");
            $("#edit_unidade_home_venc_telefonia").val("");

            if(result.id_agrupamento_enel!="NÃO INFORMADO"){
              $("#id_edit_agru_home_enel").val(result.id_agrupamento_enel);
              $("#edit_unidade_home_venc_enel").val(result.venc_enel);
              $('#edit_unidade_home_venc_enel').prop('readonly',true);
            }else{
              $("#edit_unidade_home_venc_enel").val(result.venc_enel);
            }
            if(result.id_agrupamento_saaec!="NÃO INFORMADO"){
              $("#id_edit_agru_home_saaec").val(result.id_agrupamento_saaec);
              $("#edit_unidade_home_venc_saaec").val(result.venc_saaec);
              $('#edit_unidade_home_venc_saaec').prop('readonly', true);
            }else{
              $("#edit_unidade_home_venc_saaec").val(result.venc_saaec);
            }

            $("#edit_unidade_home_venc_telefonia").val(result.venc_internet);
            $("#edit_unidade_home_venc_internet").val(result.venc_telefonia);

            $('#edit_unidade_home_venc_telefonia').prop('readonly', true);
            $('#edit_unidade_home_venc_saaec').prop('readonly', true);
            $('#edit_unidade_home_venc_internet').prop('readonly', true);
            $('#edit_unidade_home_venc_enel').prop('readonly', true);

            $('#id_edit_agru_home_enel').css({"background-color": "#e9ecef"});
            $('#id_edit_agru_home_saaec').css({"background-color": "#e9ecef"});

            $('#id_edit_agru_home_enel').css('pointer-events','none');
            $('#id_edit_agru_home_saaec').css('pointer-events','none');

            $("#checkbox_venc_edit_home").prop('checked', true);
          }
        }, error: function (error) {
        }

      });
    }
  });

  $( "#id_edit_agru_home_saaec" ).click(function() {

    if(!$("#id_edit_agru_home_saaec").val()==""){
      var id = $("#id_edit_agru_home_saaec").val();

      dados = {id: id, tipo:2};

      $.ajax({
        type: "POST", url: "index.php/unidade/selectAgrupamento", data: dados, dataType: 'json',
        success: function (result) {
          console.log(result);

          if (result == false) {
            notifyDanger("Houve um problema em recuperar as informações do Agrupamento", $('#modalEditarUnidadeHome'));
          } else {
            $('#edit_unidade_home_venc_saaec').val(result.vencimento);
            $('#edit_unidade_home_venc_saaec').prop('readonly', true);
          }
        }, error: function (error) {
        }

      });
    }

  });

  $( "#id_edit_agru_home_enel" ).click(function() {

    if(!$("#id_edit_agru_home_enel").val()==""){
      var id = $("#id_edit_agru_home_enel").val();

      dados = {id: id, tipo:1};

      $.ajax({
        type: "POST", url: "index.php/unidade/selectAgrupamento", data: dados, dataType: 'json',
        success: function (result) {
          console.log(result);

          if (result == false) {
            notifyDanger("Houve um problema em recuperar as informações do Agrupamento", $('#modalEditarUnidadeHome'));
          } else {
            $('#edit_unidade_home_venc_enel').val(result.vencimento);
            $('#edit_unidade_home_venc_enel').prop('readonly', true);
          }
        }, error: function (error) {
        }
      });
    }
  });

  $( "#id_edit_agru_home_saaec" ).click(function() {
    if($("#id_edit_agru_home_saaec").val()==""){
      $('#edit_unidade_home_venc_saaec').val("");
      $('#edit_unidade_home_venc_saaec').prop('readonly', false);
    }
  });

  $( "#id_edit_agru_home_enel" ).click(function() {
    if($("#id_edit_agru_home_enel").val()==""){
      $('#edit_unidade_home_venc_enel').val("");
      $('#edit_unidade_home_venc_enel').prop('readonly', false);
    }
  });

  $('#modalConfirmacao').on('hidden.bs.modal', function () {
    $('#modalEditarUnidadeHome').modal("show");
  });

  $('#modalEditarUnidadeHome').on('hidden.bs.modal', function () {
    //$("#formEditUnidadeHome")[0].reset();
  });

  function notificacao(local_data){
    $.notify({
      message: 'Data inválida em '+ local_data
    }, {
      type: 'danger',
      element: $('#modalEditarUnidadeHome')
    });
  }

  $("#formEditUnidadeHome").submit(function( event ) {

    var tam  = $('.anexo_edit').length;
    var valores = [];
    for(i=0;i<tam;i++){
      valores[i] = $('.anexo_edit').eq(i).val();
    }

    array = valores;
    for(i=0;i<valores.length;i++){
      console.log("valores1:");
      console.log(valores);

      val = valores[i];
      valores[i] = "";

      if($.inArray(val, valores)!= -1){
        notifyDanger("Anexos repetidos", $('#modalEditarUnidadeHome'));
        return;
      }
    }


    var data_pub = $('#edit_unidade_home_data_publicacao').val();

    if(!isDate(data_pub) && !data_pub=="" ){
      notifyDanger("Data inválida no campo: Data da publicação", $('#modalEditarUnidadeHome'));
    }
    else {
      $.LoadingOverlay("show");
      console.log($("#formEditUnidadeHome").serialize());
      $.post('index.php/unidade/editar/', $("#formEditUnidadeHome").serialize(), function (resposta) {
        console.log(resposta);

        if (resposta == "true") {
          $('#modalEditarUnidadeHome').modal("hide");
          notifySuccess("Sucesso ao atualizar os dados");
          $("#formEditUnidadeHome")[0].reset();
          fillMap();
        } else {
          notifyDanger("Falha da edição dos dados", $('#modalEditarUnidadeHome'));
        }
      }).always(function(){
        $.LoadingOverlay("hide");
      });

    }
  });
});

function btnEditUnidadeHome(id) {
  $.LoadingOverlay("show");

  $("#UnidadesEditHome").empty();

  console.log("button btnEditUnidadeHome id get fonte recurso");

  $('#edit_unidade_home_venc_enel').prop('readonly', false);
  $('#edit_unidade_home_venc_saaec').prop('readonly', false);

  $("#arq_home_termo_exist").show();
  $("#selecionarArquivoHomeTermoEdit").show();
  $("#arq_home_escritura_exist").show();
  $("#selecionarArquivoHomeEscrituraEdit").show();

  $('#status_arq_home_termo').val(null);
  $('#status_arq_home_escritura').val(null);

  $("#formEditUnidadeHome")[0].reset();

  //$.LoadingOverlay("show");

  dados = {atualizarSelectAqr: 1};

  $.post('index.php/unidade/getFonteRecurso', dados, function (resposta) {
    console.log(resposta);
    array_edit_home_recurso = resposta;
    $('#edit_unidade_home_fonte_recurso').empty();
    $('#edit_unidade_home_fonte_recurso').append(array_edit_home_recurso);

  }).done(function () {

    $.post('index.php/unidade/getAgruSaaec', dados, function (resposta) {
      console.log(resposta);
      array_edit_home_agru_saaec = resposta;
      $('#id_edit_agru_home_saaec').empty();
      $('#id_edit_agru_home_saaec').append(array_edit_home_agru_saaec);

    }).done(function () {
      $.post('index.php/unidade/getAgruEnel', dados, function (resposta) {
        console.log(resposta);
        array_edit_home_agru_enel = resposta;
        $('#id_edit_agru_home_enel').empty();
        $('#id_edit_agru_home_enel').append(array_edit_home_agru_enel);

      }).done(function () {

        $.post('index.php/unidade/selectImovel', dados, function (resposta) {
          console.log(resposta);
          array_edit_home_select_imovel = resposta;
          $('#edit_unidade_home_id_imovel').empty();
          $('#edit_unidade_home_id_imovel').append(array_edit_home_select_imovel.toUpperCase());

          $('#id_imovel_anexo').empty();
          $('#id_imovel_anexo').append(array_edit_home_select_imovel.toUpperCase());

        }).done(function () {
          carregar_valores(id);
        });
      });
    });

  });

  //$.LoadingOverlay("hide");
  $('#modalEditarUnidadeHome').modal("show");
}

function carregar_valores(id) {

  dados = {id: id, getUnidade: true};

  $.ajax({
    type: "POST", url: "index.php/unidade/getUnidade", data: dados, dataType: 'json',
    success: function (result) {
      console.log(result);
      result2 = result;
      result = result[0];

      if (result == false) {
        notifyDanger("Houve um problema em recuperar as informações das Unidade", $('#modalEditarUnidadeHome'));
      } else {

        $('#ModalLabelEditarUnidadeHome').text(result.descricao.toUpperCase());

        $('#editUnidadeHome').val(result.id);
        $('#edit_unidade_home_codigo').val(result.codigo_unidade);
        $('#edit_unidade_home_descricao').val(result.descricao);

        $('#edit_unidade_home_venc_telefonia').val(result.venc_telefonia);
        $('#edit_unidade_home_venc_internet').val(result.venc_internet);
        $('#edit_unidade_home_venc_saaec').val(result.venc_saaec);
        $('#edit_unidade_home_venc_enel').val(result.venc_enel);

        $('#edit_unidade_home_secretaria').val(result.id_secretaria);

        $('#edit_unidade_home_lei').val(result.lei);
        $('#edit_unidade_home_data_publicacao').val(result.data_publicacao);
        $('#edit_unidade_home_gestor').val(result.gestor);

        $('#edit_unidade_home_id_imovel').val(result.id_imovel);
        $('#edit_unidade_home_id_imovel').change();

        $.post('index.php/unidade/selectImovel', dados, function (resposta) {
          //console.log(resposta);
          array_edit_home_select_imovel = resposta;
          tam = result2[1].length;
          for(i=0;i<tam;i++){
            //info = result2[1][i].id_imovel;
            $("#UnidadesEditHome").append('<div class="form-row"><div class="col-md-8 col-sm-8 col-8 form-group"><select class="js-example-basic-single2 anexo_edit" id="id_imovel_anexo'+i+'" name="id_imovel_anexo[]">'+resposta+'</select></div><div class="col-md-4 col-sm-4 col-4 form-group"><button type="button" class="btn btn-danger remover-anexo-edit" id="" href="javascript:void(0)"><i class="fa fa-remove"></i></button></div></div>');
            //console.log("#id_imovel_anexo"+i);
            $("#id_imovel_anexo"+i).val(result2[1][i].id_imovel);
          }
        }).done(function () {
          $('.js-example-basic-single2').select2({
            theme:'bootstrap',
            width:"100%"
          });
          $('#edit_unidade_home_id_imovel').select2({
            theme:'bootstrap',
            width:"100%"
          });

          $( ".remover-anexo-edit" ).click(function() {
            $(this).parent().parent().remove();
          });
        });

        /*
        if(result.data_paga_alocacao==""){
        console.log("var...");
        //$('#edit_data_paga_alocacao').clear();
        //$('#edit_data_paga_alocacao').empty();
        //$('#edit_data_paga_alocacao').val('');
        //$('#edit_data_paga_alocacao').val('4');
        //$('#edit_data_paga_alocacao').reset();

        //$('#edit_data_paga_alocacao').remove();

        //$( ".inner" ).append( "Data de Publiação<p>Test</p>" );
        // $( "#div_unidade_data_val_contrato_edit" ).append('<input type="text" name="data_paga_alocacao" id="edit_data_paga_alocacao" class="form-control modal-conteudo-conv number_dia" placeholder="" >' );

      }else{
      console.log("var... else");
    }
    */

    /*
    $('#edit_unidade_home_rua').val(result.rua);
    $('#edit_unidade_home_numero_rua').val(result.numero_rua);
    $('#edit_unidade_home_bairro').val(result.bairro);
    $('#edit_unidade_home_cep').val(result.cep);
    */

    if(!(result.id_agrupamento_enel==0)){
      $('#id_edit_agru_home_enel').val(result.id_agrupamento_enel);
    }else{
      $('#id_edit_agru_home_enel').val("");
    }

    if(!(result.id_agrupamento_saaec==0)) {
      $('#id_edit_agru_home_saaec').val(result.id_agrupamento_saaec);
    }else{
      $('#id_edit_agru_home_saaec').val("");
    }

    if( !(result.id_agrupamento_enel == 0)){
      $('#edit_unidade_home_venc_enel').prop('readonly', true);
    }

    if(!(result.id_agrupamento_saaec == 0)){
      $('#edit_unidade_home_venc_saaec').prop('readonly', true);
    }
    //$("#div_edit_unidade_home_numero_contrato").hide();

  }
}, error: function (error) {
}

//});
}).done(function () {
  $.LoadingOverlay("hide");
});

}

</script>
