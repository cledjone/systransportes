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
		$usuario->setPerfil($perfil); 
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
		$usuario->setUf($uf); 
		$usuario->setCidade($cidade); 

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

	if ($_GET["editSave"] == "incluirUsuarioAdmin"){			
		//Classe de Usuário
		$usuario = new Usuario();	

		//Atributos da classe Usuário/Valores 
		$usuario->setPerfil($_REQUEST['perfil']); 
		$usuario->setNomeCompleto($_REQUEST['nomeCompleto']); 
		$usuario->setRazaoSocial($_REQUEST['razaoSocial']); 
		$usuario->setnomeFantasia($_REQUEST['nomeFantasia']); 
		$usuario->setTipoEmpresa($_REQUEST['tipoEmpresa']); 
		$usuario->setRg($_REQUEST['rg']); 
		$usuario->setOrgaoExpedidor($_REQUEST['orgaoExpedidor']); 
		$usuario->setCpf($_REQUEST['cpf']); 
		$usuario->setCnpj($_REQUEST['cnpj']); 

		$usuario->setEmail($_REQUEST['email']); 
		$usuario->setTelefone1($_REQUEST['telefone1']); 
		$usuario->setTelefone2($_REQUEST['telefone2']); 
		$usuario->setLogradouro($_REQUEST['logradouro']); 
		$usuario->setBairro($_REQUEST['bairro']); 
		$usuario->setComplemento($_REQUEST['numero']); 
		$usuario->setNumero($_REQUEST['complemento']); 
		$usuario->setCep($_REQUEST['cep']); 
		$usuario->setUf($_REQUEST['uf']); 
		$usuario->setCidade($_REQUEST['cidade']); 

		$usuario->setLogin($_REQUEST['login']); 
		$usuario->setSenha($_REQUEST['senha']); 				
		

		if (UsuarioSql::adicionar($usuario)){
			$resultado[] = array(				
				'oka'	=>  'oks',						
			);			
		}	
		
		echo(json_encode($resultado ));			
	}
	else if ($_GET["editSave"] == "alterarUsuario"){			
		//Classe de Usuário
		$usuario = new Usuario();	

		//Atributos da classe Usuário/Valores
		$usuario->setId($_REQUEST['id']);
		 
		$usuario->setPerfil($_REQUEST['perfil']); 
		$usuario->setNomeCompleto($_REQUEST['nomeCompleto']); 
		$usuario->setRazaoSocial($_REQUEST['razaoSocial']); 
		$usuario->setnomeFantasia($_REQUEST['nomeFantasia']); 
		$usuario->setTipoEmpresa($_REQUEST['tipoEmpresa']); 
		$usuario->setRg($_REQUEST['rg']); 
		$usuario->setOrgaoExpedidor($_REQUEST['orgaoExpedidor']); 
		$usuario->setCpf($_REQUEST['cpf']); 
		$usuario->setCnpj($_REQUEST['cnpj']); 

		$usuario->setEmail($_REQUEST['email']); 
		$usuario->setTelefone1($_REQUEST['telefone1']); 
		$usuario->setTelefone2($_REQUEST['telefone2']); 
		$usuario->setLogradouro($_REQUEST['logradouro']); 
		$usuario->setBairro($_REQUEST['bairro']); 
		$usuario->setComplemento($_REQUEST['numero']); 
		$usuario->setNumero($_REQUEST['complemento']); 
		$usuario->setCep($_REQUEST['cep']); 
		$usuario->setUf($_REQUEST['uf']); 
		$usuario->setCidade($_REQUEST['cidade']); 

		$usuario->setLogin($_REQUEST['login']); 
		$usuario->setSenha($_REQUEST['senha']); 				
		

		if (UsuarioSql::alterar($usuario)){
			$resultado[] = array(				
				'oka'	=>  'oks',						
			);			
		}	
		
		echo(json_encode($resultado ));				
	}

	else if ($_GET["editSave"] == "deletarUsuario"){

		//Classe de Usuário
		$usuario = new Usuario();	

		//Atributos da classe Usuário/Valores
		$usuario->setId($_REQUEST['id']);

		if (UsuarioSql::deletar($usuario)){
			$resultado[] = array(				
				'oka'	=>  'oks',						
			);			
		}	
	}
	else if ($_GET["editSave"] == "carregarUsuario"){

		//Classe de Usuário
		//$usuario = new Usuario();	

		//Atributos da classe Usuário/Valores
		//$usuario->setId($_REQUEST['id']);

		if (UsuarioSql::carregarLista()){
			$resultado[] = array(				
				'oka'	=>  'oks',						
			);			
		}	
	}		
?>
	
	