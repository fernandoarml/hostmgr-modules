<?php
if(VALIDA_MODULO!=1){
	die('acesso negado');
	exit();
}

if(!isset($extra) || !is_array($extra)){
	$extra=array();
}


$extra['moduloExemplo']=array(
	
	'nome'		=> "Modulo extra (exemplo)",
	'autor'		=> "HOSTMGR",
	'versao'	=> '1.0',
	'descricao'	=> 'Complemento de demonstração para criação de modulo extra'

);

# ATIVAR O COMPLEMENTO
function extra_moduloExemplo_ativar(){
	
	global $banco;
	
	$sql=mysqli_query($banco->con,"CREATE TABLE IF NOT EXISTS mod_moduloExemplo (
  id INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  id_servidor INT( 11 ) NOT NULL ,
  parametro TEXT NOT NULL ,
  id_produto INT( 11 ) NOT NULL 
);");
	
	if($sql){	
		return true;
	}else{
		return false;	
	}
}

# UPDATE O COMPLEMENTO
function extra_moduloExemplo_update(){
	# CODIGO ao ATUALIZAR DA VERSÃO anterior para mais recente
	
	global $banco;
	
	
	$sql=mysqli_query($banco->con,"CREATE TABLE IF NOT EXISTS mod_moduloExemplo (
  id INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  id_servidor INT( 11 ) NOT NULL ,
  parametro TEXT NOT NULL ,
  id_produto INT( 11 ) NOT NULL 
);");
	
	
	if($sql){	
		$sql=$banco->query("UPDATE modulosextras SET versao='2.0' WHERE modulo='moduloExemplo' LIMIT 1;");
		return true;
	}else{
		return false;	
	}
	
	return true;
}

# DESATIVAR O COMPLEMENTO
function extra_moduloExemplo_desativar(){
	
	global $banco;
	
	$sql=$banco->query("DROP TABLE mod_moduloExemplo");
	
	if($sql){
		return true;
	}else{
		return false;	
	}
}


# CHAMAR MODULO

function extra_moduloExemplo_executar(){
	
	global $banco;
	
	$output='<div class="panel">
	
	<div class="panel-body">'.mod_moduloExemploFunction().'</div>
	
	</div>';
	
	
	$output.='
	<link href="../modulos/extras/moduloExemplo/style.css" rel="stylesheet" type="text/css" />
	<script src="../modulos/extras/moduloExemplo/scripts.js"></script>
	';
	
	
	return $output;
	
}

function mod_moduloExemploFunction(){
	$x='Teste Olá Modulo';
	
	return $x;
}

?>