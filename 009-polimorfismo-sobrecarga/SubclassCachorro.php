<?php

require_once 'SubclassLobo.php';

class Cachorro extends Lobo 
{
    public function locomover() //sobreposicao 
    {
        return 'move-se andando, saltando e correndo.';
    }

    public function alimentar() //sobreposição
    {
        return 'de leite da mãe quando pequenos e quando viram adultos são carnívoros';
    }

    public function emitirSom() //sobreposição
    {
        return "Os cachorros se expressam atráves de latidos.";
    }

    //O PHP NÃO SUPORTA SOBREPOSIÇÃO

    /* public function reagir($frase)
    {
        # code...
    }

    public function reagir($hora, $minuto)
    {
        # code...
    } */

    //POR ISSO O CÓDIGO ACIMA NÃO É ACEITO, MAS PODEMOS SUPERAR ESSA LIMITAÇÃO POR DECLARAR OS MÉTODOS DESEJADOS COM NOMES DIFERENTES

    
}