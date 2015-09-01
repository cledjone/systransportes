<?php
require_once ("../modelo/usuario/usuarioSql.php");
session_start();

extract($_REQUEST);
extract($_SESSION);

//CONSULTA USUÁRIO
	if (isset($_GET["incluirUsuario"])) {			
		
		//Classe de Usuário
		$usuario = new Usuario();	

		//Atributos da classe Usuário/Valores 
		$usuario->setIdPerfil($idPerfil); 
		$usuario->setNome($nome); 
		$usuario->setRazaoSocial($razaoSocial); 
		$usuario->setFantasia($fantasia); 
		$usuario->setCpfCnpj($cpfcnpj); 
		$usuario->setEmail($email); 
		$usuario->setTelefone1($telefone1); 
		$usuario->setTelefone2($telefone2); 
		$usuario->setLogradouro($logradouro); 
		$usuario->setBairro($bairro); 
		$usuario->setCep($cep); 
		$usuario->setObjCidade($codCidade); 
				
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
}

//CONSULTA lOGINUSUÁRIO
if (isset($_POST["tipo"])) {

	if ($_POST["tipo"] == "consultar") {

		$resultado = array();

		if (isset($_POST["login"]) && $_POST["login"] == "")
		{
			$resultado["erro"] = "Preencha o campo login!";			
		}
		else if (isset($_POST["senha"]) && $_POST["senha"] == "")
		{
			$resultado["erro"] = "Preencha o campo senha!";
		}
		else
		{
			$usuario = new Usuario();

			$usuario -> setLogin($_POST["login"]);
			$usuario -> setSenha($_POST["senha"]);

			$resultado["sucesso"] = usuarioSql::login($usuario);
		}

		echo json_encode($resultado);
	}
}
?>