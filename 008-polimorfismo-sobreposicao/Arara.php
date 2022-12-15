<?php

require_once 'Ave.php';

class Arara extends Ave 
{
    public function emitirSom()
    {
        return 'palrar, grasnar ou taramelar';
    }

    public function alimentar()
    {
        return 'comendo frutas';
    }

    public function locomover()
    {
        return 'por natureza voa, mas existem mais de 60 espécies vivas que são incapazes de voar.';
    }
}