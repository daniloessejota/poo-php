<?php

require_once 'Peixe.php';

class GoldenFish extends Peixe 
{
    public function alimentar()
    {
        return 'de vegetais no fundo do mar';
    }

    public function linhaLateral()
    {
        return 'uma linha lateral de escamas perfuradas que servem para ajudar na sua orientação na água e também perceber codições como temperatura e salinidade da água';
    }
}