<?php
class LoginUsuario {
	private $id;
	private $login;
	private $senha;

	public function setId($l) {
		$this -> id = trim($l);
	}

	public function getId() {
		return $this -> id;
	}

	public function setlogin($cidade) {
		$this -> objlogin = $cidade;
	}

	public function getlogin() {
		if ($this -> objlogin == null) {
			$this -> objlogin = new Cidade();
		}
		return $this -> login;
	}

	public function setsenha($cidade) {
		$this -> objsenha = $cidade;
	}

	public function getsenha() {
		if ($this -> objsenha == null) {
			$this -> objsenha = new Cidade();
		}
		return $this -> senha;
	}

}
?>