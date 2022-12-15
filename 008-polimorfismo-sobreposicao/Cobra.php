<?php

require_once 'Reptil.php';

class Cobra extends Reptil 
{
    public function locomover()
    {
        return 'move-se rastejando pelo chão.';
    }

    public function alimentar()
    {
        return 'de ovos e algumas especies são carnívoras';
    }

    public function trocaDePele()
    {
        return 'trocam suas peles por novas após determinados períodos de tempo';
    }
}