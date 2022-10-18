<?php

class Caneta {
    public $model;
    private $penTip;
    private $cover;
    private $color;

    //método construtor - TIPO 1:
    /* public function __construct()
    {
        $this->color = "Verde";
        $this->tampada();   
    } */

    public function __construct($modelo, $cor, $ponta)
    {
        $this->model = $modelo;
        $this->penTip = $ponta;
        $this->color = $cor;
        $this->tampada();
    }

    public function getModelo()
    {
        return $this->model;
    }

    public function setModelo($modelo)
    {
       $this->model = $modelo;
    }

    public function getPonta()
    {
        return $this->penTip;  
    }

    public function setPonta($ponta)
    {
        $this->penTip = $ponta;
    }

    public function tampada()
    {
        $this->cover = true;
    }
}

?>