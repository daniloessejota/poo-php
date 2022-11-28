<?php

require_once 'Animal.php';

class Ave extends Animal
{
    //ATRIBUTOS
    private $corDaPena;

    //MÉTODOS
    public function locomover()
    {
        echo "voando";
    }

    public function alimentar()
    {
        return "comendo carne, insetos ou frutas";
    }

    public function emitirSom()
    {
        echo "a ave está cantando";
    }
    
    //MÉTODOS ESPECIAIS
    public function getCorDaPena()
    {
        return $this->corDaPena;
    }

    public function setCorDaPena($corDaPena)
    {
        $this->corDaPena = $corDaPena;

        return $this;
    }
}

