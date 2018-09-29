<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($modelo, $cor, $ponta){
      $this->setModelo($modelo);
      $this->setCor($cor);
      $this->setPonta($ponta);
      $this->tampar();
    }

    public function setModelo($modelo){
      $this->modelo = $modelo;
    }
    public function getModelo(){
      return($this->modelo);
    }
    public function setCor($cor){
      $this->cor = $cor;
    }
    public function getCor(){
      return($this->cor);
    }
    public function setPonta($ponta){
      $this->ponta = $ponta;
    }
    public function getPonta(){
      return($this->ponta);
    }
    public function setCarga($carga){
      $this->carga = $carga;
    }
    public function getCarga(){
      return($this->carga);
    }
    public function setTampada($tampada){
      $this->tampada = $tampada;
    }
    public function getTampada(){
      return($this->tampada);
    }

    public function rabiscar(){
      $resposta = $this->getTampada()?("Caneta tampada,impossivel rabiscar"):("Rabiscando");
      echo($resposta);
    }

    private function tampar(){
      $this->setTampada(true);
    }

    private function destampar(){
      $this->setTampada(false);
    }
}
?>
