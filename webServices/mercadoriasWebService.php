<?php


//Criar função para excluir todas as mercadorias da cotação!!!!!!!!!!

	require_once("../modelo/mercadoria/mercadoriaSql.php");
	session_start();

	extract ($_REQUEST);
	extract ($_SESSION);

	//CONSULTA Mercadoria
	if (isset($_GET["incluirMercadoria"]))
	{
		//Classe de Mercadoria
		$mercadoria = new Mercadoria();

		//Atributos da classe Mercadoria
		$mercadoria -> getObjCotacao() -> setId($idCotacao);
		$mercadoria -> setDescricaoMercadoria($descricao);
		$mercadoria -> setPeso($peso);
	}

	if(isset($_GET["incluirMercadoria"]))
	{
		if (MercadoriaSql::adicionar($mercadoria))
		{
			//$resultado = $usuario;
			echo "Mercadoria incluída com êxito!!";
		}
		else
		{
			echo "Erro ao incluir mercadoria, ".$descricao."!";
			echo "<br />";
			echo json_encode($resultado);
		}
	}

	//Consultar Mercadorias
	if (isset($_GET["consultaMercadoria"]))
	{
		$mercadoria = new Mercadoria();
		$listaMercadorias = mercadoriaSql::consultar($mercadoria);

		for ($i=0; $i<count($listaMercadorias); $i++ )
		{
			$resultado[] = array
			(
				'idCotacao'	=>   $listaMercadorias[$i]->getObjCotacao()->getId(),
				'peso'		=>  $listaMercadorias[$i]->getPeso(),
				'descricao'	=>  $listaMercadorias[$i]->getDescricaoMercadoria(),
			);
		}
		echo( json_encode( $resultado ) );
	}
?>


