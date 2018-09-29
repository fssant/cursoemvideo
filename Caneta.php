<?php
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
      $resposta = $this->tampada?("Caneta tampada,impossivel rabiscar"):("Rabiscando");
      echo($resposta);
    }
}
?>
