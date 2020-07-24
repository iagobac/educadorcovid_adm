<?php
//include_once 'modal/modal_detalhes.php';
//include_once 'modal/modal_editar.php';
?>
<div id="viewInscricoes">
    <div class="container-fluid">

        <div class="row align-items-end ">
            <div class="col-6" >
                <h2 ></h2>
            </div>
            <div class="col-12" style="margin-bottom: 20px;" >
                <img src="include/img/logo-crato.png" id="logoCrato" class="img-fluid pull-left" style="filter:alpha(opacity=0);opacity:.80; max-height:100px"  >
            </div>

        </div>

        <hr />

        <div class="row" >
            <div class="col-12">
                <h3></h3>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-12 ">

            </div>
        </div>
        <div style="justify-content: center;margin-bottom: 10px;" class="row">
            <div class="col-md-3">
                <div id="card_listar_todas_inscricoes" class="card text-white bg-info o-hidden h-100" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="card-body-icon">
                           <i class="fas fa-book"></i>
                        </div>
                        <div class="mr-5 font-weight-bold" style="font-size: 20px">Todas as Inscrições</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left card-description">Listar todas as inscrições</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div id="card_listar_inscricoes_pendentes" class="card text-white bg-warning o-hidden h-100" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="card-body-icon">
                           <i class="far fa-edit"></i>
                        </div>
                        <div class="mr-5 font-weight-bold" style="font-size: 20px">Inscrições Pendentes</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left card-description">Listar inscrições pendentes de análise</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div id="card_listar_inscricoes_deferidas" class="card text-white bg-success o-hidden h-100" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="card-body-icon">
                           <i class="far fa-check-square"></i>
                        </div>
                        <div class="mr-5 font-weight-bold" style="font-size: 20px">Inscrições Deferidas</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left card-description">Listar inscrições deferidas</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div id="card_listar_inscricoes_indeferidas" class="card text-white bg-danger o-hidden h-100" style="cursor: pointer;">
                    <div class="card-body">
                        <div class="card-body-icon">
                           <i class="far fa-calendar-times"></i>
                        </div>
                        <div class="mr-5 font-weight-bold" style="font-size: 20px">Inscrições Indeferidas</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left card-description">Listar inscrições indeferidas</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(function () {
        $('#card_listar_todas_inscricoes').click(function () {
            $("#btnListartodas").click();
        })
        $('#card_listar_inscricoes_pendentes').click(function () {
            $("#btnListarPendentes").click();
        })
        $('#card_listar_inscricoes_deferidas').click(function () {
            $("#btnListarDeferidas").click();
        })
        $('#card_listar_inscricoes_indeferidas').click(function () {
            $("#btnListarIndeferidas").click();
        })
    })
</script>

