<?php
   	function mensagem_erro($mensagem = ''){
   		$erro = array(
    		'salvar'=>'Erro ao salvar os dados!',
    		'editar'=>'Erro ao editar os dados!',
    		'atualizar'=>'Erro ao atualizar os dados!',
    		'arquivar'=>'Erro ao arquivar os dados!',
    		'desarquivar'=>'Erro ao desarquivar os dados!',
    		'enturmacao'=>'Erro ao remover enturmação!',
    		'banco'=>'Erro ao salvar os dados!',
    		'campos'=>'Campos incorretos, por favor verifique os campos!',
    		'turma'=>'Campos incorretos, por favor verifique os campos!',
        'horario_existe'=>'Esse horario já existe, verifique na tabela!',
        'get_dados'=>'Houve um problema em recuperar as informações'
    	);
    	$dados = mensagem_verify($mensagem,$erro);
    	return $dados;
    }
    function mensagem_sucesso($mensagem = ''){
    	$sucesso = array(
    		'salvar'=>'Dados salvos com sucesso!',
    		'atualizar'=>'Dados atualizados com sucesso!',
    		'editar'=>'Dados editados com sucesso!',
    		'desarquivar'=>'Dados desarquivados com sucesso!',
    		'arquivar'=>'Dados arquivados com sucesso!'
    	);
    	$dados = mensagem_verify($mensagem,$sucesso);
    	return $dados;
    }

    function mensagem_verify($mensagem,$array){
    	if(!empty($mensagem)){
   			if(array_key_exists($mensagem,$array)){
   				$retorno = $array[$mensagem];
   			}else{
   				$retorno = $array[key($array)];
   			}
   		}else{
   			$retorno =$array[key($array)];
   		}
   		return $retorno;
    }

    function ver_str($array = ''){
    	if(is_array($array) || is_object($array)){
    		echo '<pre>';
    		print_r($array);
    		echo '</pre>';
    	}else{
    		echo '<pre>';
    		print($array);
    		echo 'nao';
    	}
    }

?>