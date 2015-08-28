<?php
	require_once("../modelo/cotacao/cotacaoSql.php");   	
	session_start();   	
	
	extract ($_REQUEST);
	extract ($_SESSION);	

	//CONSULTA CLIENTES
	if (isset($_GET["incluirCotacao"])) {			
		$cotacao = new Cotacao();				
		$cotacao->setValorCarga($valor); 
		$cotacao->setValorFrete('0'); 
		$cotacao->setAltura($altura); 
		$cotacao->setLargura($largura); 
		$cotacao->setPeso($peso); 
		$cotacao->setComprimento($comprimento); 
		$cotacao->setQuantidadeCaixas($qtdCaixas); 				
		echo('1');
		if (CotacaoSql::adicionar($cotacao)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}	
		
		echo( json_encode( $resultado ) );			
	
	}		
?>
	
	