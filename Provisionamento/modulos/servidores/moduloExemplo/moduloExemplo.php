<? 
# CONFIGURAÇÃO DE IDENTIFICAÇÃO DO MÓDULO.

$modulo_servidor['moduloExemplo']=array(

	'nome'=>"moduloExemplo",			/* informar o nome do modulo conforme nome do arquivo (respeitando maiusculas e minúsculas).
										   Não usar caracteres especiais ou espaços */
	
	'nome_visivel'=>"Modulo de Exemplo Servidor" /*Nome do seu módulo visível no painel HOSTMGR*/
);

#CAMPOS/CONFIGURAÇÕES DO SERVIDOR PARA INTEGRAÇÃO.

/*nesta etapa são criados os campos necessários para conexão junto a API (normalmente logins, tokens, chaves de acesso e etc...
			*Configurações -> servidores -> servidor -> configurações do modulo*/

$modulo_servidor_campos['moduloExemplo']=array(
	
	/* 
	array( TIPO, ROTULO, NOME, LARGURA, ALTURA, OBRIGATORIO, VALORES, HELPER );
	
	- TIPO			->	tipo de campo ( textfield, password, textarea, select, radio e checkbox)
	- ROTULO		->	Nome do campo (visível)
	- NOME			->	ID do campo (usado na programação)
	- LARGURA		->	largura em pixels
	- ALTURA		->	altura em linhas (apenas para textareas)
	- OBRIGATORIO	->	definir como obrigatorio 
	
							true 	-> cadastrar e editar
							false 	-> não é obrigatorio
							CAD 	-> obrigatório apenas no cadastro
													
	- VALORES		->	array de valores para determinados campos
	
							checkbox	->		array('valor se marcado', 'opção a ser marcada')
							select		->		array('opcao1'=>'valor opcao1', 'opcao2'=>'valor opcao2')
							radio		->		array('opcao1'=>'valor opcao1', 'opcao2'=>'valor opcao2')
	
	
	- HELPER		->	texto de complemento/helper
	
							Rótulo: [|||||||||||||||||||||||||] Texto inserido no Helper
	
*/

	array('textfield',	'Login:',				'login',	300,	'',		true,	'',		''),
	array('password',	'Senha:',				'senha',	300,	'',		false,	'',		'Para não alterar, deixe em branco'),
	array('textarea',	'Access Remote Key:',	'hash',		300,	10,		false,	'',		''),
	array('checkbox',	'&nbsp;',			'ssl',		300,	10,		false,	array('SIM','Usar conexão segura SSL'),		''),
);

/*Nesta etapa você deve definir os campos de configuração para os produtos, como espaço em disco, plano, usuarios, bitrate e etc...
		*Configurações -> produtos e serviços -> produto -> configurações do modulo*/
		
$modulo_servidor_produto['moduloExemplo']=array(
	array('textfield',	'Plano no WHM (package):',	'plano',	300,	'',		true,	'',		''),
	array('textfield',	'Feature List (ACL):',	'featurelist',	300,	'',		false,	'',		'Se o produto for uma revenda. <strong>Deixe em branco para "Default"</strong>'),

);

?>