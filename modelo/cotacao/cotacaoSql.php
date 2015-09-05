<?php
  require_once("/../banco.php");  
  require_once("cotacao.php");  

  class CotacaoSql {  
  
     public static function adicionar(Cotacao $u) {
      $conexao = Conexao::getInstance()->getConexao();     
	  $idUsuario = mysql_real_escape_string($u->getObjUsuario()->getId(), $conexao);      
	  $codCidadeOrigem = mysql_real_escape_string($u->getObjCidadeOrigem()->getCodigo(), $conexao);      
	  $codCidadeDestino = mysql_real_escape_string($u->getObjCidadeDestino()->getCodigo(), $conexao);
	  $valorCarga = mysql_real_escape_string($u->getValorCarga(), $conexao);      
	  $valorFrete = mysql_real_escape_string($u->getValorFrete(), $conexao);      
	  $altura = mysql_real_escape_string($u->getAltura(), $conexao);      
	  $largura = mysql_real_escape_string($u->getLargura(), $conexao);      
	  $peso = mysql_real_escape_string($u->getPeso(), $conexao);      
	  $comprimento = mysql_real_escape_string($u->getComprimento(), $conexao);      
	  $quantidadeCaixas = mysql_real_escape_string($u->getQuantidadeCaixas(), $conexao);   
	  $prazo = mysql_real_escape_string($u->getPrazo(), $conexao);   
	  $descricao = mysql_real_escape_string($u->getDescricao(), $conexao);   
	  $aprovadoCliente = mysql_real_escape_string($u->getAprovadoCliente(), $conexao);   
	  $aprovadoAtendente = mysql_real_escape_string($u->getAprovadoAtendente(), $conexao);   
	  $status = mysql_real_escape_string($u->getStatus(), $conexao);   
	  $sql = "insert into cotacoes (idUsuario, codCidadeOrigem, codCidadeDestino, valorCarga, valorFrete, altura, largura, peso, comprimento, quantidadeCaixa, prazo, descricao, aprovadoCliente, aprovadoAtendente, status) values ($idUsuario, $codCidadeOrigem, $codCidadeDestino, $valorCarga, $valorFrete, $altura, $largura, $peso, $comprimento, $quantidadeCaixas, $prazo, '$descricao', $aprovadoCliente, $aprovadoAtendente, $status)";	 
      $resultado = @mysql_query($sql, $conexao);
      return ($resultado === true);
    }
	
	 public static function alterar(Cotacao $u) {
      $conexao = Conexao::getInstance()->getConexao();     
	  $id = mysql_real_escape_string($u->getId(), $conexao);      
	  $idUsuario = mysql_real_escape_string($u->getObjUsuario()->getId(), $conexao);      
	  $codCidadeOrigem = mysql_real_escape_string($u->getObjCidadeOrigem()->getCodigo(), $conexao);      
	  $codCidadeDestino = mysql_real_escape_string($u->getObjCidadeDestino()->getCodigo(), $conexao);
	  $valorCarga = mysql_real_escape_string($u->getValorCarga(), $conexao);      
	  $valorFrete = mysql_real_escape_string($u->getValorFrete(), $conexao);      
	  $altura = mysql_real_escape_string($u->getAltura(), $conexao);      
	  $largura = mysql_real_escape_string($u->getLargura(), $conexao);      
	  $peso = mysql_real_escape_string($u->getPeso(), $conexao);      
	  $comprimento = mysql_real_escape_string($u->getComprimento(), $conexao);      
	  $quantidadeCaixas = mysql_real_escape_string($u->getQuantidadeCaixas(), $conexao);   
	  $prazo = mysql_real_escape_string($u->getPrazo(), $conexao);   
	  $descricao = mysql_real_escape_string($u->getDescricao(), $conexao);   
	  $aprovadoCliente = mysql_real_escape_string($u->getAprovadoCliente(), $conexao);   
	  $aprovadoAtendente = mysql_real_escape_string($u->getAprovadoAtendente(), $conexao);   
	  $status = mysql_real_escape_string($u->getStatus(), $conexao);   
	  $sql = "update cotacoes set idUsuario=$idUsuario, codCidadeOrigem=$codCidadeOrigem, codCidadeDestino=$codCidadeDestino, valorCarga=$valorCarga, valorFrete=$valorFrete, altura=$altura, largura=$largura, peso=$peso, comprimento=$comprimento, quantidadeCaixa=$quantidadeCaixas, prazo=$prazo, descricao='$descricao', aprovadoCliente=$aprovadoCliente, aprovadoAtendente=$aprovadoAtendente, status=$status where id=$id";	 
      $resultado = @mysql_query($sql, $conexao);
      return ($resultado === true);
    }
	
	public static function mudarStatus(Cotacao $u) {
      $conexao = Conexao::getInstance()->getConexao();     	 
	  $status = mysql_real_escape_string($u->getStatus(), $conexao);   
	  $idCotacao = mysql_real_escape_string($u->getId(), $conexao);   
	  $sql = "update cotacoes set status=$status where id=$idCotacao";	 
      $resultado = @mysql_query($sql, $conexao);
      return ($resultado === true);
    }
	
	public static function consultar(Cotacao $busca) {
      $conexao = Conexao::getInstance()->getConexao();	  
      $sql = "Select cotacoes.id, cotacoes.idUsuario, usuarios.nome as usuario, cotacoes.codCidadeOrigem, origem.descricao as cidadeOrigem, origem.uf as ufOrigem, cotacoes.codCidadeDestino, destino.descricao as cidadeDestino, destino.uf as ufDestino, cotacoes.valorCarga, cotacoes.valorFrete, cotacoes.altura, cotacoes.largura, cotacoes.peso, cotacoes.comprimento, cotacoes.prazo, cotacoes.quantidadeCaixa, cotacoes.descricao, cotacoes.prazo, cotacoes.aprovadoCliente, cotacoes.aprovadoAtendente, cotacoes.status, cotacoes.aprovadoCliente, cotacoes.aprovadoAtendente, cotacoes.status from cotacoes inner join usuarios on cotacoes.idUsuario= usuarios.id inner join  cidades as origem on origem.codigo=cotacoes.codCidadeOrigem inner join  cidades as destino on destino.codigo=cotacoes.codCidadeOrigem where (1=1)";
	  
      $resultado = @mysql_query($sql, $conexao);	      
      if ($resultado) {
        $retorno = array();
        while ($linha = mysql_fetch_array($resultado)) {
          $u = new Cotacao();          
          $u->setId($linha["id"]);          		  
		  $u->getObjUsuario()->setId($linha["idUsuario"]);		  
		  $u->getObjUsuario()->setNome($linha["usuario"]);		            
		  $u->getObjCidadeOrigem()->setCodigo($linha["codCidadeOrigem"]);		  
		  $u->getObjCidadeOrigem()->setDescricao($linha["cidadeOrigem"]);		  
		  $u->getObjCidadeOrigem()->setUf($linha["ufOrigem"]);		  
		  $u->getObjCidadeDestino()->setCodigo($linha["codCidadeDestino"]);		  
		  $u->getObjCidadeDestino()->setDescricao($linha["cidadeDestino"]);		  
		  $u->getObjCidadeDestino()->setUf($linha["ufDestino"]);		  
		  $u->setValorCarga($linha["valorCarga"]);          		  
		  $u->setValorFrete($linha["valorFrete"]);          		  
		  $u->setAltura($linha["altura"]);          		  
		  $u->setLargura($linha["largura"]);          		  
		  $u->setPeso($linha["peso"]);          		  
		  $u->setComprimento($linha["comprimento"]);          		  
		  $u->setQuantidadeCaixas($linha["quantidadeCaixa"]);        
		  $u->setPrazo($linha["prazo"]);          		    		  
		  $u->setDescricao($linha["descricao"]);          		    		  
		  $u->setAprovadoCliente($linha["aprovadoCliente"]);          		    		  
		  $u->setAprovadoAtendente($linha["aprovadoAtendente"]);          		    		  
		  $u->setStatus($linha["status"]);          		    		  		 	
          $retorno[] = $u;
         }
        return ($retorno);
      } else
        return null;
    }	
	
  }
?>
