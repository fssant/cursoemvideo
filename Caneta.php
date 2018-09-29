<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
      $resposta = $this->tampada?("Caneta tampada,impossivel rabiscar"):("Rabiscando");
      echo($resposta);
    }

    private function tampar(){
      $this->tampada = true;
    }

    private function destampar(){
      $this->tampada = false;
    }
}
?>
