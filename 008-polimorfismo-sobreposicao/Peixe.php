<?php

require_once 'Animal.php';

class Peixe extends Animal 
{
    //ATRIBUTOS
    private $corDasEscama;
    

    //MÉTODOS 
    public function locomover()
    {
        echo "o peixe está nadando";
    }

    public function alimentar()
    {
        echo "comendo carne, planctôns ou vegetais";
    }
    public function emitirSom()
    {
        echo "o peixe está emitindo um roncando";
    }

    public function respirando()
    {
        echo "o peixe está soltando bolhas";
    }


    //MÉTODOS ESPECIAIS
    public function getCorDasEscama()
    {
        return $this->corDasEscama;
    }


    public function setCorDasEscama($corDasEscama)
    {
        $this->corDasEscama = $corDasEscama;

        return $this;
    }
}
