<?php

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

$sql = "insert into usuarios(perfil,nomeCompleto,razaoSocial,nomeFantasia,tipoEmpresa,rg,orgaoExpedidor,cpf,cnpj,email,telefone1,telefone2,logradouro,bairro,numero,complemento,uf,cidade,cep,login,senha) values('$perfil','$nomeCompleto','$razaoSocial','$nomeFantasia','$tipoEmpresa','$rg','$orgaoExpedidor','$cpf','$cnpj','$email','$telefone1','$telefone2','$logradouro','$bairro','$numero','$complemento','$uf','$cidade','$cep','$login','$senha')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
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