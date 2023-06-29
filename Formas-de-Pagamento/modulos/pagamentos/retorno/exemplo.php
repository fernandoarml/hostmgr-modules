<?php
# MODULO DE PAGAMENTO DE EXEMPLO -> RETORNO AUTOMÁTICO

include"../../../includes/conexao.php";
include"../../../includes/loadConfig.php";
include"../../../admin/includes/comandos.php";

$moduloPagamento=array();

$sql=$banco->consultar("select * from modulospagamento where modulo='exemplo'");

foreach($banco->lista($sql) as $linha){
	$moduloPagamento[$linha['parametro']]=$linha['valor'];
}

# ------------- Se condigo começa abaixo ---------------------------
if (count($_POST) > 0) { // Verifica se algum dado foi recebido
	
	$id_fatura=(int)$_POST['id_fatura'];
	$status=$_POST['status'];
	
	if($status=='pago'){
	
		$fatura=carregaParametrosFatura($id_fatura);
						
		$res=adicionarPagamento($fatura['id_fatura'], $transacao, $fatura['valor'],"exemplo");
		
		if ($res) {
			echo"Sucesso";
		} else {
			echo"Erro ao confirmar pagamento";
		}
	
	}else{
		echo"A fatura não foi paga";
	}
	
} else {
	// POST não recebido, indica que a requisição é o retorno do Checkout exemplo.
	// No término do checkout o usuário é redirecionado para este bloco.
    echo'<h3>Obrigado por efetuar a compra.</h3>';
}
?>