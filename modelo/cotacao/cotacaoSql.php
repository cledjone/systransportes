<?php
  require_once("/../banco.php");  
  require_once("cotacao.php");  

  class CotacaoSql {  
  
     public static function adicionar(Cotacao $u) {
      $conexao = Conexao::getInstance()->getConexao();     
	  $idUsuario='1';
      $codCidadeOrigem = 109991;//mysql_real_escape_string($u->getObjCidadeOrigem()->getCodigo(), $conexao);
	  $codCidadeDestino = 109991;// mysql_real_escape_string($u->getObjCidadeDestino()->getCodigo(), $conexao);
	  $valorCarga = mysql_real_escape_string($u->getValorCarga(), $conexao);      
	  $valorFrete = mysql_real_escape_string($u->getValorFrete(), $conexao);      
	  $altura = mysql_real_escape_string($u->getAltura(), $conexao);      
	  $largura = mysql_real_escape_string($u->getLargura(), $conexao);      
	  $peso = mysql_real_escape_string($u->getPeso(), $conexao);      
	  $comprimento = mysql_real_escape_string($u->getComprimento(), $conexao);      
	  $quantidadeCaixas = mysql_real_escape_string($u->getQuantidadeCaixas(), $conexao);      	  
	  $sql = "insert into cotacoes (idUsuario, codCidadeOrigem, codCidadeDestino, valorCarga, valorFrete, altura, largura, peso, comprimento, quantidadeCaixa) values ($idUsuario,$codCidadeOrigem,$codCidadeDestino, $valorCarga, $valorFrete, $altura, $largura, $peso, $comprimento, $quantidadeCaixas)";	  -
      $resultado = @mysql_query($sql, $conexao);
      return ($resultado === true);
    }
	
  }
?>
