<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar () {
        if ($this->tampada == true) {
            echo " está tampada não pode escrever...";
        } else {
            echo " está sem tampa e está escrevendo...";
        }
    } //this é chamado no PHP de autoreferência

    function tampada () {
        $this->tampada = true;
    }

    function destampada () {
        $this->tampada = false;
    }

}




?>