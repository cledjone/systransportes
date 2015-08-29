<?php
  class Cotacao {
    private $id;    
	private $objCidadeOrigem;  	
	private $objCidadeDestino;  	
	private $valorCarga;  
	private $valorFrete;  
	private $altura;  
	private $largura;  
	private $peso;  
	private $comprimento;  	
	private $quantidadeCaixas;  	
	private $prazo;  
        
    public function setId($l) {
      $this->id = trim($l);
    }
    
    public function getId() {
      return $this->id;
    }	
	
	public function setObjCidadeOrigem($cidade) {
		   $this->objObjCidadeOrigem = $cidade;
	}

	public function getObjCidadeOrigem() {     
		if($this->objObjCidadeOrigem == null){
			$this->objObjCidadeOrigem = new Cidade();
		}		
		return $this->objCidadeOrigem;
	}     
	
	public function setObjCidadeDestino($cidade) {
		   $this->objObjCidadeDestino = $cidade;
	}

	public function getObjCidadeDestino() {     
		if($this->objObjCidadeDestino == null){
			$this->objObjCidadeDestino = new Cidade();
		}		
		return $this->objCidadeDestino;
	}     
	
	public function setValorCarga($l) {
      $this->valorCarga = trim($l);
    }
    
    public function getValorCarga() {
      return $this->valorCarga;
    }	
	
	public function setValorFrete($l) {
      $this->valorFrete = trim($l);
    }
    
    public function getValorFrete() {
      return $this->valorFrete;
    }	
	
	public function setAltura($l) {
      $this->altura = trim($l);
    }
    
    public function getAltura() {
      return $this->altura;
    }	
	
	public function setLargura($l) {
      $this->largura = trim($l);
    }
    
    public function getLargura() {
      return $this->largura;
    }	
	
	public function setPeso($l) {
      $this->peso = trim($l);
    }
    
    public function getPeso() {
      return $this->peso;
    }	
	
	public function setComprimento($l) {
      $this->comprimento = trim($l);
    }
    
    public function getComprimento() {
      return $this->comprimento;
    }	
	
	public function setQuantidadeCaixas($l) {
      $this->quantidadeCaixas = trim($l);
    }
    
    public function getQuantidadeCaixas() {
      return $this->quantidadeCaixas;
    }	
	
	public function setPrazo($l) {
      $this->prazo = trim($l);
    }
    
    public function getPrazo() {
      return $this->prazo;
    }	
	
	
  }
?>