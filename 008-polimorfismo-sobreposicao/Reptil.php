<?php

require_once 'Animal.php';

class Reptil extends Animal 
{
    //ATRIBUTOS
    private $corDasEscamas;

    //MÉTODOS
    public function locomover()
    {
        echo "rastejando"; 
    }

    public function alimentar()
    {
        echo "comendo carne, insetos ou vegetal";
    }

    public function emitirSom()
    {
        echo "o réptil está emitindo um som";
    }

    //MÉTODOS ESPECIAIS 
    public function getCorDasEscamas()
    {
        return $this->corDasEscamas;
    }

    public function setCorDasEscamas($corDasEscamas)
    {
        $this->corDasEscamas = $corDasEscamas;

        return $this;
    }
}
