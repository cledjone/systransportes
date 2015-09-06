<?php

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
$cep = $_REQUEST['cep'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];
include 'conn.php';

$sql = "insert into usuarios(nomeCompleto,razaoSocial,nomeFantasia,tipoEmpresa,rg,orgaoExpedidor,cpf,cnpj,email,telefone1,telefone2,logradouro,bairro,numero,complemento,cep,login,senha) values('$nomeCompleto','$razaoSocial','$nomeFantasia','$tipoEmpresa','$rg','$orgaoExpedidor','$cpf','$cnpj','$email','$telefone2','$logradouro','$bairro','$numero','$complemento','$cep','$login','$senha')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
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
	'cep' => $cep,
	'login' => $login,
	'senha' => $senha
));

?>