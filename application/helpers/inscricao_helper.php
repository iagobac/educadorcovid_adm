<?php

function preencher_tabela_inscricao_todas($retornos) {

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
                $linha .= "<td  class=\"text-center\"><span style='background:#ffc107;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>PENDENTE</span></td>";
                $linha .= "<td >-</td>";
            } else if ($retorno->homolog_status == 1) {
                $linha .= "<td  class=\"text-center\"><span style='background:#27a243;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>DEFERIDO</span></td>";
                $linha .= "<td>DEFERIDO</td>";
            } else if ($retorno->homolog_status == 2) {
                $linha .= "<td  class=\"text-center\"><span style='background:#dc3545;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>INDEFERIDO</span></td>";
                $linha .= "<td  class=\"text-center\">{$retorno->homolog_motivo}</td>";
            }

            $linha .= "<td class=\"text-center tabela_opcoes\">
                    <button type='button' class='btn btn-info btn-md' id='btnAnalise' onclick=btnAnalise_todas('" . $retorno->id . "') data-toggle='tooltip' data-placement='bottom' title='Analisar Informações'><i class='fa fa-edit'></i></button>
                </td>
            </tr>";
            echo $linha;
        }
    }
}

function preencher_tabela_inscricao_pend($retornos) {

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
                $linha .= "<td  class=\"text-center\"><span style='background:#ffc107;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>PENDENTE</span></td>";
                $linha .= "<td >-</td>";
            } else if ($retorno->homolog_status == 1) {
                $linha .= "<td  class=\"text-center\"><span style='background:#27a243;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>DEFERIDO</span></td>";
                $linha .= "<td>DEFERIDO</td>";
            } else if ($retorno->homolog_status == 2) {
                $linha .= "<td  class=\"text-center\"><span style='background:#dc3545;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>INDEFERIDO</span></td>";
                $linha .= "<td  class=\"text-center\">{$retorno->homolog_motivo}</td>";
            }
            $linha .= "<td class=\"text-center tabela_opcoes\">
                    <button type='button' class='btn btn-info btn-md' id='btnAnalise' onclick=btnAnalise_pendente('" . $retorno->id . "') data-toggle='tooltip' data-placement='bottom' title='Analisar Informações'><i class='fa fa-edit'></i></button>
                </td>
            </tr>";

            echo $linha;
        }
    }
}

function preencher_tabela_inscricao_def($retornos) {

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
                $linha .= "<td  class=\"text-center\"><span style='background:#ffc107;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>PENDENTE</span></td>";
                $linha .= "<td >-</td>";
            } else if ($retorno->homolog_status == 1) {
                $linha .= "<td  class=\"text-center\"><span style='background:#27a243;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>DEFERIDO</span></td>";
                $linha .= "<td>DEFERIDO</td>";
            } else if ($retorno->homolog_status == 2) {
                $linha .= "<td  class=\"text-center\"><span style='background:#dc3545;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>INDEFERIDO</span></td>";
                $linha .= "<td  class=\"text-center\">{$retorno->homolog_motivo}</td>";
            }
            $linha .= "</tr>";

            echo $linha;
        }
    }
}

function preencher_tabela_inscricao_indef($retornos) {

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
                $linha .= "<td  class=\"text-center\"><span style='background:#ffc107;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>PENDENTE</span></td>";
                $linha .= "<td >-</td>";
            } else if ($retorno->homolog_status == 1) {
                $linha .= "<td  class=\"text-center\"><span style='background:#27a243;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>DEFERIDO</span></td>";
                $linha .= "<td>DEFERIDO</td>";
            } else if ($retorno->homolog_status == 2) {
                $linha .= "<td  class=\"text-center\"><span style='background:#dc3545;padding: 2px 4px;color:white;border-radius: 4px;font-size: .84em;'>INDEFERIDO</span></td>";
                $linha .= "<td  class=\"text-center\">{$retorno->homolog_motivo}</td>";
            }
            $linha .= "</tr>";

            echo $linha;
        }
    }
}
