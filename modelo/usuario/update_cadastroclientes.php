<?php

//require_once("/../banco.php");  
//$conexao = Conexao::getInstance()->getConexao();

$id = intval($_REQUEST['id']);
$perfil = $_REQUEST['perfil'];
$nomeCompleto = $_REQUEST['nomeCompleto'];
$razaoSocial = $_REQUEST['razaoSocial'];
$nomeFantasia = $_REQUEST['nomeFantasia'];
$tipoEmpresa = $_REQUEST['tipoEmpresa'];
$rg = $_REQUEST['rg'];
$orgaoExpedidor = $_REQUEST['orgaoExpedidor'];
$cpf = $_REQUEST['cpf'];
$cnpj = $_REQUEST['cnpj'];
$email = $_REQUEST['email'];
$telefone1 = $_REQUEST['telefone1'];
$telefone2 = $_REQUEST['telefone2'];
$logradouro = $_REQUEST['logradouro'];
$bairro = $_REQUEST['bairro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$uf = $_REQUEST['uf'];
$cidade = $_REQUEST['cidade'];
$cep = $_REQUEST['cep'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

include 'conn.php';

$sql = "update usuarios set perfil='$perfil',nomeCompleto='$nomeCompleto',razaoSocial='$razaoSocial',nomeFantasia='$nomeFantasia',tipoEmpresa='$tipoEmpresa',rg='$rg',orgaoExpedidor='$orgaoExpedidor',cpf='$cpf',cnpj='$cnpj',email='$email',telefone1='$telefone1',telefone2='$telefone2',logradouro='$logradouro',bairro='$bairro',numero='$numero',complemento='$complemento',uf='$uf',cidade='$cidade',cep='$cep',login='$login',senha='$senha'  where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
	'perfil' => $perfil,
	'nomeCompleto' => $nomeCompleto,
	'razaoSocial' => $razaoSocial,
	'nomeFantasia' => $nomeFantasia,
	'tipoEmpresa' => $tipoEmpresa,
	'rg' => $rg,
	'orgaoExpedidor' => $orgaoExpedidor,
	'cpf' => $cpf,
	'cnpj' => $cnpj,
	'email' => $email,
	'telefone1' => $telefone1,
	'telefone2' => $telefone2,
	'logradouro' => $logradouro,
	'bairro' => $bairro,
	'numero' => $numero,
	'complemento' => $complemento,
	'uf' => $uf,
	'cidade' => $cidade,
	'cep' => $cep,
	'login' => $login,
	'senha' => $senha
));
?>