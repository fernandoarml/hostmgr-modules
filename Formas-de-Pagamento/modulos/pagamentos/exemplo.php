<?
# MODULO DE PAGAMENTO DE EXEMPLO

$moduloPagamento=array('nome'=>'exemplo','nomeVisivel'=>'Modulo de exemplo');

$dadosModuloPagamento=array(

	/*ex: array('a',		'b',		'c',		300,	d,		e,	f,	g),
	
	a = tipo de campo (textfield, select, textarea, radio, checkbox, password)
	b = nome/Rotulo do campo, legenda a ser exibida ao usuario
	c = nome do campo, parametro a ser utilizado	
	300 = largura do campo em pixels
	d = altura do campo (aplicavel ao textarea)
	e = campo obrigatorio (true = sim, false = nao)
	f = array com valores das opções, usado em select e radio ex: array('opcao1' => 1, 'opcao2' => 2)
	g = rotulo adicional ao usuario, aplicado ao final do campo
	
	*/
	
	array('textfield', 'Token', 'token', 300, '', true, '', 'seu token'),
	array('radio', 'Campo2', 'campo2', 300, '', true, array('opcao1' => 1, 'opcao2' => 2), ''),
);


function ModuloFatura_exemplo(){ //substituia exemplo pelo nome de seu arquivo/modulo

	global $parametros, $config;
	
	/*$parametros['fatura']
	  $parametros['cliente']
	  $parametros['moduloPagamento']*/
	
	$codigo = 'Código html/javascript visivel na fatura.<br />Token: ';		
	$codigo.= $parametros['moduloPagamento']['token'];
	
	return $codigo;

}

?>