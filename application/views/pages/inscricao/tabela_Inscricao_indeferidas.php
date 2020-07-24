<?php
//include_once  $_SERVER['DOCUMENT_ROOT'].'/controllers/fonte_recurso.php';
?>
<div class="table-responsive-sm">
    <table id="head_tabela_inscricao_indeferidas" class="table table-sm table-striped table-bordered table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center column-invisivel" style="width: 5%">CÓDIGO</th>
                <th scope="col">NOME</th>
                <th scope="col">CPF</th>
                <th scope="col" class="column-invisivel">RG</th>
                <th scope="col" style="width: 10%">DATA DE NASCIMENTO</th>
                <th scope="col" class="column-invisivel">TELEFONE</th>
                <th scope="col">ESCOLARIDADE</th>
                <th scope="col"style="width: 10%" class="text-center">CADUNICO?</th>
                <th scope="col" class="text-center">RENDA</th>
                <th scope="col" class="text-center">STATUS</th>
                <th scope="col" class="column-invisivel">MOTIVO</th>
                <th scope="col" class="text-center tabela_opcoes">DOCUMENTOS</th>
            </tr>
        </thead>
        <tbody>
            <?php preencher_tabela_inscricao($inscricoes); ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col" class="text-center column-invisivel" style="width: 5%">CÓDIGO</th>
                <th scope="col">NOME</th>
                <th scope="col">CPF</th>
                <th scope="col" class="column-invisivel">RG</th>
                <th scope="col" style="width: 10%">DATA DE NASCIMENTO</th>
                <th scope="col" class="column-invisivel">TELEFONE</th>
                <th scope="col">ESCOLARIDADE</th>
                <th scope="col" style="width: 10%" class="text-center">CADUNICO?</th>
                <th scope="col" class="text-center">RENDA</th>
                <th scope="col" class="text-center">STATUS</th>
                <th scope="col" class="column-invisivel">MOTIVO</th>
                <th scope="col" class="text-center tabela_opcoes">DOCUMENTOS</th>
            </tr>
        </tfoot>
    </table>
</div>

<script>

    $(document).ready(function () {
        datatableDinamic("head_tabela_inscricao_indeferidas");
    });

</script>
