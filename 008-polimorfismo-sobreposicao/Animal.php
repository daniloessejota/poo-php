<?php

abstract class Animal
{
    //ATRIBUTOS
    protected $peso, $idade, $quantidadeDeMenbros;

    //MÉTODOS
    abstract public function locomover();

    abstract public function alimentar();

    abstract public function emitirSom();

}