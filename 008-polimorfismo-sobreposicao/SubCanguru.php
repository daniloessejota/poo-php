<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero 
{
    public function locomover()
    {
        return 'move-se saltando e avança bem rápido!';
    }

    public function alimentar()
    {
        return 'de leite da mãe quando pequenos e quando viram adultos da vegetação local';
    }

    public function bolsa()
    {
        return 'possuem bolsa para abrigar os filhotes recém nascidos.';
    }
}
