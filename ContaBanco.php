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
}
?>