<?php
	require_once("../modelo/usuario/usuarioSql.php");   	
	session_start();   	
	
	extract ($_REQUEST);
	extract ($_SESSION);	

	//CONSULTA USUÁRIO
	if (isset($_GET["incluirUsuario"])) {			
		
		//Classe de Usuário
		$usuario = new Usuario();	

		//Atributos da classe Usuário/Valores 
		$usuario->setIdPerfil($idPerfil); 
		$usuario->setNomeCompleto($nomeCompleto); 
		$usuario->setRazaoSocial($razaoSocial); 
		$usuario->setnomeFantasia($nomeFantasia); 
		$usuario->setTipoEmpresa($tipoEmpresa); 
		$usuario->setRg($rg); 
		$usuario->setOrgaoExpedidor($orgaoExpedidor); 
		$usuario->setCpf($cpf); 
		$usuario->setCnpj($cnpj); 

		$usuario->setEmail($email); 
		$usuario->setTelefone1($telefone1); 
		$usuario->setTelefone2($telefone2); 
		$usuario->setLogradouro($logradouro); 
		$usuario->setBairro($bairro); 
		$usuario->setComplemento($complemento); 
		$usuario->setNumero($numero); 
		$usuario->setCep($cep); 
		$usuario->setCodCidade($codCidade); 

		$usuario->setLogin($login); 
		$usuario->setSenha($senha); 				
		
		//echo('1');

		if (UsuarioSql::adicionar($usuario)){
			$resultado[] = array(				
				'oka'	=>  'oks',						
			);			
		}	
		
		echo(json_encode($resultado ));			
	
	}		
?>
	
	