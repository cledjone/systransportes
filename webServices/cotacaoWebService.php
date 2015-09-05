<?php
	require_once("../modelo/cotacao/cotacaoSql.php");   	
	session_start();   	
	
	extract ($_REQUEST);
	extract ($_SESSION);	
	
	//CARREGA OBJETO COTAÇÃO SE FOR ALTERAR OU INCLUIR
	if (isset($_GET["incluirCotacao"]) || isset($_GET["alterarCotacao"])) {			
		$cotacao = new Cotacao();	
		if (isset($_GET["alterarCotacao"]))
			$cotacao->setId($idCotacao); 
		$cotacao->getObjUsuario()->setId($idUsuario);	
		$cotacao->getObjCidadeOrigem()->setCodigo($codCidadeOrigem);
		$cotacao->getObjCidadeDestino()->setCodigo($codCidadeDestino);
		$cotacao->setValorCarga($valorCarga); 
		$cotacao->setValorFrete($valorFrete); 
		$cotacao->setAltura($altura); 
		$cotacao->setLargura($largura); 
		$cotacao->setPeso($peso); 
		$cotacao->setComprimento($comprimento); 
		$cotacao->setQuantidadeCaixas($quantidadeCaixas); 	
		$cotacao->setPrazo($prazo); 	
		$cotacao->setDescricao($descricao); 	
		$cotacao->setAprovadoCliente($aprovadoCliente); 	
		$cotacao->setAprovadoAtendente($aprovadoAtendente); 	
		$cotacao->setStatus($status); 	
	}
		
	if (isset($_GET["incluirCotacao"])){
		if (CotacaoSql::adicionar($cotacao)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}			
		echo( json_encode( $resultado ) );				
	}			
	
	if (isset($_GET["alterarCotacao"])){
		if (CotacaoSql::alterar($cotacao)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}			
		echo( json_encode( $resultado ) );				
	}			
	
	if (isset($_GET["statusCotacao"])){
		$cotacao = new Cotacao();				
		$cotacao->setId($idCotacao); 	
		$cotacao->setStatus($status); 	
		if (CotacaoSql::mudarStatus($cotacao)){
			$resultado[] = array(				
				'ok'	=>  'ok',						
			);			
		}			
		echo( json_encode( $resultado ) );				
	}			
	
	//CONSULTAR COTACOES
	if (isset($_GET["consultaCotacao"])) {			
		$cotacao = new Cotacao();		
		$listaCotacoes = CotacaoSql::consultar($cotacao);
		for ($i=0; $i<count($listaCotacoes); $i++ ){					
			$resultado[] = array(				
				'id'	=>  $listaCotacoes[$i]->getId(),					
				'idUsuario'	=>   $listaCotacoes[$i]->getObjUsuario()->getId(),				
				'usuario'	=>  $listaCotacoes[$i]->getObjUsuario()->getNome(),				
				'codCidadeOrigem'	=>   $listaCotacoes[$i]->getObjCidadeOrigem()->getCodigo(),				
				'cidadeOrigem'	=>  $listaCotacoes[$i]->getObjCidadeOrigem()->getDescricao(),				
				'ufOrigem'	=>  $listaCotacoes[$i]->getObjCidadeOrigem()->getUf(),				
				'codCidadeDestino'	=>   $listaCotacoes[$i]->getObjCidadeDestino()->getCodigo(),				
				'cidadeDestino'	=>  $listaCotacoes[$i]->getObjCidadeDestino()->getDescricao(),	
				'ufDestino'	=>  $listaCotacoes[$i]->getObjCidadeDestino()->getUf(),								
				'valorCarga'	=>  $listaCotacoes[$i]->getValorCarga(),					
				'valorFrete'	=>  $listaCotacoes[$i]->getValorFrete(),					
				'altura'	=>  $listaCotacoes[$i]->getAltura(),					
				'largura'	=>  $listaCotacoes[$i]->getLargura(),					
				'peso'	=>  $listaCotacoes[$i]->getPeso(),					
				'comprimento'	=>  $listaCotacoes[$i]->getComprimento(),					
				'quantidadeCaixas'	=>  $listaCotacoes[$i]->getQuantidadeCaixas(),					
				'prazo'	=>  $listaCotacoes[$i]->getPrazo(),					
				'descricao'	=>  $listaCotacoes[$i]->getDescricao(),					
				'aprovadoCliente'	=>  $listaCotacoes[$i]->getAprovadoCliente(),					
				'aprovadoAtendente'	=>  $listaCotacoes[$i]->getAprovadoAtendente(),					
				'status'	=>  $listaCotacoes[$i]->getStatus(),									
			);
		}		
		
		echo( json_encode( $resultado ) );			
	
	}		
?>
	
	