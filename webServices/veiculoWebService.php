<?php
	require_once("../modelo/veiculo/veiculoSql.php");   	
	session_start();   	
	
	extract ($_REQUEST);
	extract ($_SESSION);

	if (isset($_GET["incluirVeiculo"])){
		if (VeiculoSql::adicionar($veiculo)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}			
		echo( json_encode( $resultado ) );				
	}			
	
	if (isset($_GET["alterarVeiculo"])){
		if (VeiculoSql::alterar($veiculo)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}			
		echo( json_encode( $resultado ) );				
	}	

	if (isset($_GET["removerVeiculo"])){
		if (VeiculoSql::remover($veiculo)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}			
		echo( json_encode( $resultado ) );				
	}


	if ($_GET["editSave"] == "carregarVeiculo") {			
		
		if (VeiculoSql::carregarLista()){
			$resultado[] = array(				
				'oka'	=>  'oks',						
			);			
		}			
	}

	

?>