<?php
require_once ("../modelo/usuario/usuarioSql.php");
session_start();

extract($_REQUEST);
extract($_SESSION);

//INSERIR USUÁRIO
if (isset($_GET["tipo"])) {
	if ($_GET["tipo"] == "incluir") {

		//Classe de Usuário
		$usuario = new Usuario();

		//Atributos da classe Usuário/Valores
		$usuario -> setIdPerfil($idPerfil);
		$usuario -> setNome($nome);
		$usuario -> setRazaoSocial($razaoSocial);
		$usuario -> setFantasia($fantasia);
		$usuario -> setCpfCnpj($cpfcnpj);
		$usuario -> setEmail($email);
		$usuario -> setTelefone1($telefone1);
		$usuario -> setTelefone2($telefone2);
		$usuario -> setLogradouro($logradouro);
		$usuario -> setBairro($bairro);
		$usuario -> setCep($cep);

		$usuario -> setLogin($login);
		$usuario -> setSenha($senha);

		//echo('1');

		if (UsuarioSql::adicionar($usuario)) {
			$resultado[] = array('oka' => 'oks', );
		}

		echo json_encode($resultado);
	}
}

//CONSULTA lOGINUSUÁRIO
if (isset($_GET["tipo"])) {

	if ($_GET["tipo"] == "consultar") {

		$resultado = array();

		if (isset($_GET["login"]) && $_GET["login"] == "")
		{
			$resultado["erro"] = "Preencha o campo login!";			
		}
		else if (isset($_GET["senha"]) && $_GET["senha"] == "")
		{
			$resultado["erro"] = "Preencha o campo senha!";
		}
		else
		{
			$usuario = new Usuario();

			$usuario -> setLogin($_GET["login"]);
			$usuario -> setSenha($_GET["senha"]);

			$resultadoLogin =  usuarioSql::login($usuario);
			
			if ($resultadoLogin){
				$_SESSION["login"] = $login;
				setcookie("login", "", time() + 3600);
				$resultado = "Bem-vindo sr. ".$login;
			}else {				
				$resultado = "Login/Senha não confere!";
			}
				
			
			
		}

		echo json_encode($resultado);
	}
}
?>