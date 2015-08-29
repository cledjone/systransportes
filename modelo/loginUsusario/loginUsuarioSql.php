<?php
  require_once("/../banco.php");  
  require_once("loginUsuario.php");  

  class LoginUsuarioSql {  
  
     public static function adicionar(LoginUsuario $u) {
      $conexao = Conexao::getInstance()->getConexao();     
	  $idUsuario='1';
      $login = mysql_real_escape_string($u->getLogin(), $conexao);
	  $senha = mysql_real_escape_string($u->getSenha(), $conexao);
	  
	  
	  $sql = "insert into usuarios (idUsuario, login, senha) 
	  values ($idUsuario,$login,$senha )";	  -
      $resultado = @mysql_query($sql, $conexao);
      return ($resultado === true);
    }
	
  }
?>
