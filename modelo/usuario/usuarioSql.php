<?php
require_once ("../modelo/banco.php");
require_once ("usuario.php");

class UsuarioSql {

	public static function adicionar(Usuario $usuario) {
		//Conexão com o banco
		$conexao = Conexao::getInstance()->getConexao();

		//Atributo da tabela usuário
		//$idUsuario = '1';
		$codCidade = 109991;
		//mysql_real_escape_string($u->getObjCidadeOrigem()->getCodigo(), $conexao);

		$idPerfil    = mysql_real_escape_string($usuario->getIdPerfil(), $conexao);
		$nome        = mysql_real_escape_string($usuario->getNome(), $conexao);
		$razaoSocial = mysql_real_escape_string($usuario->getRazaoSocial(), $conexao);
		$fantasia    = mysql_real_escape_string($usuario->getFantasia(), $conexao);
		$cpfcnpj     = mysql_real_escape_string($usuario->getCpfCnpj(), $conexao);
		$email       = mysql_real_escape_string($usuario->getEmail(), $conexao);
		$telefone1   = mysql_real_escape_string($usuario->getTelefone1(), $conexao);
		$telefone2   = mysql_real_escape_string($usuario->getTelefone2(), $conexao);
		$logradouro  = mysql_real_escape_string($usuario->getLogradouro(), $conexao);
		$bairro      = mysql_real_escape_string($usuario->getBairro(), $conexao);
		$cep         = mysql_real_escape_string($usuario->getCep(), $conexao);

		//Login e senha do usuário
		$login = mysql_real_escape_string($usuario->getLogin(), $conexao);
		$senha = mysql_real_escape_string($usuario->getSenha(), $conexao);

		//Insert para a tabela de Usuários do banco de dados
		$sql       = "insert into usuarios (codCidade, idPerfil, nome, razaoSocial, fantasia, cpfcnpj, email, telefone1, telefone2, logradouro, bairro, cep, login, senha) values ($codCidade, $idPerfil, '$nome', '$razaoSocial', '$fantasia', '$cpfcnpj', '$email', '$telefone1', '$telefone2', '$logradouro', '$bairro', '$cep', '$login', '$senha')";
		$resultado = @mysql_query($sql, $conexao);

		//echo($sql);
		return ($resultado === true);
	}

	public static function login(Usuario $usuario) {
		//Conexão com o banco
		$conexao = Conexao::getInstance()->getConexao();

		/*
		$login = mysql_real_escape_string($usuario -> getLogin(), $conexao);
		$senha = mysql_real_escape_string($usuario -> getSenha(), $conexao);
		$email = mysql_real_escape_string($usuario -> getEmail(), $conexao);
		 */

		$retorno = null;
		$login   = $usuario->getLogin();
		$senha   = $usuario->getSenha();

		$sql     = "SELECT * FROM usuarios WHERE login='".$login."' AND senha = '".$senha."'";
		$execSql = @mysql_query($sql);

		if (mysql_num_rows($execSql) > 0) {
			$retorno = "Bem-vindo sr. ".$login;
		} else {
			$retorno = "Login/Senha não confere!";
		}

		return $retorno;

	}

}
?>
