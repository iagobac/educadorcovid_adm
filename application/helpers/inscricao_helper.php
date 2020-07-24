<?php

function preencher_tabela_inscricao($retornos) {

    if ($retornos) {
        foreach ($retornos as $retorno) {
            $linha = "<tr>
                <td class=\"text-center\" >{$retorno->id}</td>
                <td>{$retorno->nome}</td>
                <td>{$retorno->cpf}</td>
                <td>{$retorno->rg}</td>
                <td>{$retorno->dt_nascimento}</td>
                <td>{$retorno->tel}</td>";
            if ($retorno->nivel_escolaridade == 1) {
                $linha .= "<td>Nível Médio</td>";
            } else {
                $linha .= "<td>Nível Superior</td>";
            }
            if ($retorno->cadunico == 1) {
                $linha .= "<td class=\"text-center\">SIM</td>";
            } else {
                $linha .= "<td class=\"text-center\">NÃO</td>";
            }
            $linha .= "<td  class=\"text-center\">{$retorno->renda}</td>";

            if ($retorno->homolog_status == 0) {
                $linha .= "<td  class=\"text-center\">PENDENTE</td>";
                $linha .= "<td >-</td>";
            } else if ($retorno->homolog_status == 1) {
                $linha .= "<td  class=\"text-center\">DEFERIDO</td>";
                $linha .= "<td>DEFERIDO</td>";
            } else if ($retorno->homolog_status == 2) {
                $linha .= "<td  class=\"text-center\">INDEFERIDO</td>";
                $linha .= "<td  class=\"text-center\">{$retorno->homolog_motivo}</td>";
            }
            $linha .= "<td class=\"text-center tabela_opcoes\">
                    <button type='button' class='btn btn-info btn-md' id='btnAnalise' onclick=btnAnalise('" . $retorno->id . "') data-toggle='tooltip' data-placement='bottom' title='Analisar Informações'><i class='fa fa-edit'></i></button>
                </td>
            </tr>";

            echo $linha;
        }
    }
}
