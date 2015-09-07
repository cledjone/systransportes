<?php
  require_once("/../banco.php");  
  require_once("usuario.php");  

  class UsuarioSql {  
  
     public static function adicionar(Usuario $usuario) {
      //Conexão com o banco
      $conexao = Conexao::getInstance()->getConexao();     
	  
	  //Atributo da tabela usuário
	  //$idUsuario = '1';
	  $perfil = mysql_real_escape_string($usuario->getPerfil(), $conexao);      
	  $nomeCompleto = mysql_real_escape_string($usuario->getNomeCompleto(), $conexao);      
	  $razaoSocial = mysql_real_escape_string($usuario->getRazaoSocial(), $conexao);      
	  $nomeFantasia = mysql_real_escape_string($usuario->getnomeFantasia(), $conexao);      
	  $tipoEmpresa = mysql_real_escape_string($usuario->getTipoEmpresa(), $conexao);     
	  $rg = mysql_real_escape_string($usuario->getRg(), $conexao);      
	  $orgaoExpedidor = mysql_real_escape_string($usuario->getOrgaoExpedidor(), $conexao);
	  $cpf = mysql_real_escape_string($usuario->getCpf(), $conexao);
	  $cnpj = mysql_real_escape_string($usuario->getCnpj(), $conexao);

	  $email = mysql_real_escape_string($usuario->getEmail(), $conexao);      
	  $telefone1 = mysql_real_escape_string($usuario->getTelefone1(), $conexao);     
	  $telefone2 = mysql_real_escape_string($usuario->getTelefone2(), $conexao); 

	  $logradouro = mysql_real_escape_string($usuario->getLogradouro(), $conexao);     
	  $bairro = mysql_real_escape_string($usuario->getBairro(), $conexao);
	  $numero = mysql_real_escape_string($usuario->getNumero(), $conexao);
	  $complemento = mysql_real_escape_string($usuario->getComplemento(), $conexao);
	  $cep = mysql_real_escape_string($usuario->getCep(), $conexao);  
	  $uf = mysql_real_escape_string($usuario->getUf(), $conexao);
	  $cidade = mysql_real_escape_string($usuario->getCidade(), $conexao);

	  //Login e senha do usuário    
	  $login = mysql_real_escape_string($usuario->getLogin(), $conexao);     
	  $senha = mysql_real_escape_string($usuario->getSenha(), $conexao);    
  
  	  //Insert para a tabela de Usuários do banco de dados
	  $sql = "insert into usuarios (perfil, nomeCompleto, razaoSocial, nomeFantasia, tipoEmpresa, rg, orgaoExpedidor, cpf, cnpj, email, telefone1, telefone2, logradouro, bairro, numero, complemento, cep, uf, cidade, login, senha) values ('$perfil', '$nomeCompleto', '$razaoSocial', '$nomeFantasia', '$tipoEmpresa', '$rg', '$orgaoExpedidor', '$cpf','$cnpj', '$email', '$telefone1', '$telefone2', '$logradouro', '$bairro', '$numero', '$complemento', '$cep','$uf','$cidade', '$login', '$senha')";	  
      //echo ($sql);
      $resultado = @mysql_query($sql, $conexao);

       //echo($sql);	
      return ($resultado === true);
    }
	
  }
?>
