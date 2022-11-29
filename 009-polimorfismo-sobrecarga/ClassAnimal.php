<?php

abstract class Animal
{
    //ATRIBUTOS
    protected $peso, $idade, $quantidadeDeMembros;

    //MÉTODOS
    abstract public function locomover();

    abstract public function alimentar();

    abstract public function emitirSom();

}