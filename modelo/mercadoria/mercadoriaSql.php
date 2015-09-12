<?php
  require_once("/opt/lampp/htdocs/dashboard/systransportes/modelo/banco.php");
  require_once("mercadoria.php");

  class MercadoriaSql
  {

     public static function adicionar(Mercadoria $mercadoria) {
      //Conexão com o banco
      $conexao = Conexao::getInstance()->getConexao();

	  //Atributo da tabela mercadoria

            //$idMercadoria = mysql_real_escape_string($mercadoria -> getId(), $conexao);
		$idCotacao = mysql_real_escape_string($mercadoria -> getObjCotacao() -> getId(), $conexao);
		$descricaoMercadoria = mysql_real_escape_string($mercadoria -> getDescricaoMercadoria(), $conexao);
		$pesoMercadoria = mysql_real_escape_string($mercadoria -> getPeso(), $conexao);


  	  //Insert para a tabela de Mercadoria do banco de dados
	  $sql = "
        insert into mercadorias (
          idCotacoes,
          descricao,
          peso)

         values (
          '$idCotacao',
          '$descricaoMercadoria',
          '$pesoMercadoria')";

	  $resultado = @mysql_query($sql, $conexao);

       //echo($sql);
      return ($resultado === true);
    }

	public static function consultar(Mercadoria $busca)
      {

      $conexao = Conexao::getInstance()->getConexao();

      $sql = "
      Select
      mercadorias.id,
      mercadorias.idCotacoes,
      mercadorias.descricao,
      mercadorias.peso

      from

      mercadorias
	inner join cotacoes
      on
      mercadorias.idCotacoes = cotacoes.id
      where 1=1";

      $resultado = @mysql_query($sql, $conexao);
      if ($resultado)
      {
        $retorno = array();
        while ($linha = mysql_fetch_array($resultado))
        {
            $u = new Mercadoria();
            $u->setId($linha["id"]);
		  $u->getObjCotacao()->setId($linha["idCotacoes"]);
		  $u->setDescricaoMercadoria($linha["descricao"]);
		  $u->setPeso($linha["peso"]);
          $retorno[] = $u;
         }
        return ($retorno);
      }
      else
        return null;
    }

  }
?>
