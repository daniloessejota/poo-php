<?php
    require 'Caneta.php';

    $caneta_1 = new Caneta;

    $caneta_1->cor  = "AZUL";
    $caneta_1->carga = 75;
    $caneta_1->tampada = false;
    $caneta_1->ponta = 0.7;

    //chamando um método:

    $caneta_1->tampada();
    echo "A caneta ". $caneta_1->cor;
    $caneta_1->rabiscar();

    echo "</br>";

    $caneta_2 = new Caneta;
    $caneta_2->cor = "PRETA";
    $caneta_2->carga = "25";
    $caneta_2->ponta = "0.5";

    //chamando um método em vez de definir um atributo:

    $caneta_2->destampada();
    
    echo "A caneta ". $caneta_2->cor;
    $caneta_2->rabiscar();

?>