<?

function moduloExemplo_funcao_auxiliar($parametros){ //conectar � sua API por exemplo
	
	//seu c�digo aqui
	
	$sucesso=true;
	
	if($sucesso){
		$retorno='xxxxxxxx';
	}else{
		$retorno='erro';
	}
	
	return $retorno;
}

function moduloExemplo_acao_criar($parametros){

	echo'<pre>';
	
	print_r($parametros);
	
	echo'</pre>';
	
	//exit();
	
	//Seu c�digo para criar contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}

function moduloExemplo_acao_suspender($parametros){
	
	//Seu c�digo para suspender contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
	
}

function moduloExemplo_acao_reativar($parametros){
	
	//Seu c�digo para reativar contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
	
}

function moduloExemplo_acao_finalizar($parametros){
	
	//Seu c�digo para finalizar/excluir contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}


/* CRIANDO FUN��ES ADICIONAIS */

function moduloExemplo_acao_alterar_senha($parametros){
	//Seu c�digo para alterar senha aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}

function moduloExemplo_acao_alterar_plano($parametros){
	//Seu c�digo para alterar o plano aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}

/* ADICIONAR COMANDOS NO ADMIN(adicionar bot�es/comandos para as fun��es adicionais)*/
function moduloExemplo_comandos_adicionais() {
	//adicionar outros comandos	(criar, suspender, reativar e finalizar s�o definidos automaticamente)
	
	$comandosAdmin=array(
		array("comando"=>"Alterar Senha",	"funcao"=>"acao_alterar_senha"),
		array("comando"=>"Alterar Plano",	"funcao"=>"acao_alterar_plano"),
	);
	
	return $comandosAdmin;
}


/*ADICIONAR COMANDOS NO PAINEL DO CLIENTE (gerenciamento da conta)*/

function moduloExemplo_comandos_cliente() {
	//adicionar outros comandos	
	
	$comandosCliente=array(
		array("comando"=>"Resetar Senha",	"funcao"=>"acao_alterar_senha"),
		/*comandos criar, suspender, reativar e finalizar n�o s�o permitidos*/
		
	);
	
	return $comandosCliente;
}

/* EXIBIR INFORMA��ES/C�DIGO NA TELA DO PRODUTO (ADMIN) */

function moduloExemplo_informacoes_admin($parametros){

	$code='<p>meu c�digo aqui</p>';
	
	return $code;
}

/* EXIBIR INFORMA��ES/C�DIGO NOS DETALHES DO PRODUTO (CLIENTE)*/

function moduloExemplo_informacoes_cliente($parametros){

	$code='<p>meu c�digo aqui</p>';
	
	return $code;
}

?>