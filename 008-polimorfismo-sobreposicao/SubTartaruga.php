<?php

require_once 'Reptil.php';

class Tartaruga extends Reptil 
{
    public function tempoDeVida()
    {
        return 'Algumas espécies vivem por muitos anos, como as Tartarugas Marinhas, que vivem até 60 anos!';
    } 
    
    public function locomover()
    {
        return 'move-se caminhado lentamente.';
    }

    public function alimentar()
    {
        return 'de vegetais';
    }

}