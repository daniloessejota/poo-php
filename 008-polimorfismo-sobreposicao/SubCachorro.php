<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero 
{
    public function locomover()
    {
        return 'move-se andando, saltando e correndo.';
    }

    public function alimentar()
    {
        return 'de leite da mãe quando pequenos e quando viram adultos são carnívoros';
    }

    public function abanarCauda()
    {
        return 'mexem sua cauda para mostrar que está feliz.';
    }
}