<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $status;
    private $saldo;

    function setNumConta($numero){
      $this->numConta = $numero;
    }
    function getNumConta(){
      return($this->numConta);
    }
    function setTipo($tipo){
      $this->tipo = $tipo;
    }
    function getTipo(){
      return($this->tipo);
    }
    function setDono($dono){
      $this->dono = $dono;
    }
    function getDono(){
      return($this->dono);
    }
    function setStatus($status){
      $this->status = $status;
    }
    function getStatus(){
      return($this->status);
    }
    function setSaldo($saldo){
      $this->saldo = $saldo;
    }
    function getSaldo(){
      return($this->saldo);
    }

    public function abrirConta($tipo, $dono, $numero){
      $resposta = true;
      if((($tipo=="CC")||($tipo=="CP"))&&(ctype_digit($numero))){
        $this->setStatus(true);
        $this->setTipo($tipo);
        $this->setNumConta($numero);
        $this->setDono($dono);
        $this->getTipo()=="CC"?$this->setSaldo(50):$this->setSaldo(150);
      }else{
        $resposta = false;
      }
      return($resposta);
    }

    public function fecharConta(){
      $resposta = $this->getSaldo()==0?$this->setStatus(false):$this->setStatus(true);
      return($resposta);
    }

    public function depositar($valor){
      $resposta = $valor>0?$this->setSaldo($this->getSaldo()+$valor):false;
      return ($resposta);
    }

}
