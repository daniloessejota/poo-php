<?php

require_once 'ClassMamifero.php';

class Lobo extends Mamifero 
{
    public function locomover() //sobreposição
    {
        return 'move-se andando, saltando e correndo.';
    }

    public function alimentar() //sobreposição
    {
        return 'de leite da mãe quando pequenos e quando viram adultos são carnívoros';
    }

    public function emitirSom() //sobreposição
    {
        return "Os lobos se expressam atráves de uivos";
    }
}