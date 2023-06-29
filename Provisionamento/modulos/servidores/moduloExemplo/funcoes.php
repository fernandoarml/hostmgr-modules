<?

function moduloExemplo_funcao_auxiliar($parametros){ //conectar à sua API por exemplo
	
	//seu código aqui
	
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
	
	//Seu código para criar contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}

function moduloExemplo_acao_suspender($parametros){
	
	//Seu código para suspender contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
	
}

function moduloExemplo_acao_reativar($parametros){
	
	//Seu código para reativar contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
	
}

function moduloExemplo_acao_finalizar($parametros){
	
	//Seu código para finalizar/excluir contas aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}


/* CRIANDO FUNÇÕES ADICIONAIS */

function moduloExemplo_acao_alterar_senha($parametros){
	//Seu código para alterar senha aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}

function moduloExemplo_acao_alterar_plano($parametros){
	//Seu código para alterar o plano aqui
	
	$sucesso=true;
		
	if($sucesso){
		$resultado=array('status'=>'sucesso');
	}else{
		$resultado=array('status'=>'erro','msg'=>'Mensagem de erro');
	}
	
	return $resultado;
}

/* ADICIONAR COMANDOS NO ADMIN(adicionar botões/comandos para as funções adicionais)*/
function moduloExemplo_comandos_adicionais() {
	//adicionar outros comandos	(criar, suspender, reativar e finalizar são definidos automaticamente)
	
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
		/*comandos criar, suspender, reativar e finalizar não são permitidos*/
		
	);
	
	return $comandosCliente;
}

/* EXIBIR INFORMAÇÕES/CÓDIGO NA TELA DO PRODUTO (ADMIN) */

function moduloExemplo_informacoes_admin($parametros){

	$code='<p>meu código aqui</p>';
	
	return $code;
}

/* EXIBIR INFORMAÇÕES/CÓDIGO NOS DETALHES DO PRODUTO (CLIENTE)*/

function moduloExemplo_informacoes_cliente($parametros){

	$code='<p>meu código aqui</p>';
	
	return $code;
}

?>