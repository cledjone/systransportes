<?php
class Usuario {

	//Atributos
	private $id;
	private $idPerfil;
	private $nome;
	private $razaoSocial;
	private $fantasia;
	private $cpfcnpj;
	private $email;
	private $telefone1;
	private $telefone2;
	private $logradouro;
	private $bairro;
	private $cep;
	private $codCidade;

	private $login;
	private $senha;

	//Id Usuário
	public function setId($l) {
		$this -> id = trim($l);
	}

	public function getId() {
		return $this -> id;
	}

	//Código Cidade
	public function setObjCidade($cidade) {
		$this -> objObjCidade = $cidade;
	}

	public function getObjCidade() {
		if ($this -> objObjCidade == null) {
			$this -> objObjCidade = new Cidade();
		}
		return $this -> codCidade;
	}

	//Id Perfil
	public function setIdPerfil($idPerfil) {
		$this -> idPerfil = trim($idPerfil);
	}

	public function getIdPerfil() {
		return $this -> idPerfil;
	}

	//nome
	public function setNome($nome) {
		$this -> nome = trim($nome);
	}

	public function getNome() {
		return $this -> nome;
	}

	//Razao Social
	public function setRazaoSocial($razaoSocial) {
		$this -> razaoSocial = trim($razaoSocial);
	}

	public function getRazaoSocial() {
		return $this -> razaoSocial;
	}

	//Fantasia
	public function setFantasia($fantasia) {
		$this -> fantasia = trim($fantasia);
	}

	public function getFantasia() {
		return $this -> fantasia;
	}

	//CPF/CNPJ
	public function setCpfCnpj($cpfcnpj) {
		$this -> cpfcnpj = trim($cpfcnpj);
	}

	public function getCpfCnpj() {
		return $this -> cpfcnpj;
	}

	//Email
	public function setEmail($email) {
		$this -> email = trim($email);
	}

	public function getEmail() {
		return $this -> email;
	}

	//Telefone 1
	public function setTelefone1($telefone1) {
		$this -> telefone1 = trim($telefone1);
	}

	public function getTelefone1() {
		return $this -> telefone1;
	}

	//Telefone 2
	public function setTelefone2($telefone2) {
		$this -> telefone2 = trim($telefone2);
	}

	public function getTelefone2() {
		return $this -> telefone2;
	}

	//Logradouro
	public function setLogradouro($logradouro) {
		$this -> logradouro = trim($logradouro);
	}

	public function getLogradouro() {
		return $this -> logradouro;
	}

	//Bairro
	public function setBairro($bairro) {
		$this -> bairro = trim($bairro);
	}

	public function getBairro() {
		return $this -> bairro;
	}

	//CEP
	public function setCep($cep) {
		$this -> cep = trim($cep);
	}

	public function getCep() {
		return $this -> cep;
	}

	//login
	public function setLogin($login) {
		$this -> login = trim($login);
	}

	public function getLogin() {
		return $this -> login;
	}

	//senha
	public function setSenha($senha) {
		$this -> senha = trim($senha);
	}

	public function getSenha() {
		return $this -> senha;
	}

}
?>